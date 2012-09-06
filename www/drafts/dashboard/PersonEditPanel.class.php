<?php
	/**
	 * This is a quick-and-dirty draft QPanel object to do Create, Edit, and Delete functionality
	 * of the Person class.  It uses the code-generated
	 * PersonMetaControl class, which has meta-methods to help with
	 * easily creating/defining controls to modify the fields of a Person columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both person_edit.php AND
	 * person_edit.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class PersonEditPanel extends QPanel {
		// Local instance of the PersonMetaControl
		protected $mctPerson;

		// Controls for Person's Data Fields
		public $lblVictimWitnessNum;
		public $txtFirstName;
		public $txtLastName;
		public $calDateOfBirth;
		public $txtSocialSecurityNumber;
		public $txtPhone;
		public $txtEmail;
		public $txtNotes;
		public $chkGender;
		public $lstEthnicity;
		public $txtAge;
		public $lstPrimaryLanguage;
		public $chkDisabled;
		public $chkElderly;
		public $lstAgencyReferred;

		// Other ListBoxes (if applicable) via Unique ReverseReferences and ManyToMany References
		public $lstCasesesAsCase;

		// Other Controls
		public $btnSave;
		public $btnDelete;
		public $btnCancel;

		// Callback
		protected $strClosePanelMethod;

		public function __construct($objParentObject, $strClosePanelMethod, $intVictimWitnessNum = null, $strControlId = null) {
			// Call the Parent
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Setup Callback and Template
			$this->strTemplate = 'PersonEditPanel.tpl.php';
			$this->strClosePanelMethod = $strClosePanelMethod;

			// Construct the PersonMetaControl
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctPerson = PersonMetaControl::Create($this, $intVictimWitnessNum);

			// Call MetaControl's methods to create qcontrols based on Person's data fields
			$this->lblVictimWitnessNum = $this->mctPerson->lblVictimWitnessNum_Create();
			$this->txtFirstName = $this->mctPerson->txtFirstName_Create();
			$this->txtLastName = $this->mctPerson->txtLastName_Create();
			$this->calDateOfBirth = $this->mctPerson->calDateOfBirth_Create();
			$this->txtSocialSecurityNumber = $this->mctPerson->txtSocialSecurityNumber_Create();
			$this->txtPhone = $this->mctPerson->txtPhone_Create();
			$this->txtEmail = $this->mctPerson->txtEmail_Create();
			$this->txtNotes = $this->mctPerson->txtNotes_Create();
			$this->chkGender = $this->mctPerson->chkGender_Create();
			$this->lstEthnicity = $this->mctPerson->lstEthnicity_Create();
			$this->txtAge = $this->mctPerson->txtAge_Create();
			$this->lstPrimaryLanguage = $this->mctPerson->lstPrimaryLanguage_Create();
			$this->chkDisabled = $this->mctPerson->chkDisabled_Create();
			$this->chkElderly = $this->mctPerson->chkElderly_Create();
			$this->lstAgencyReferred = $this->mctPerson->lstAgencyReferred_Create();
			$this->lstCasesesAsCase = $this->mctPerson->lstCasesesAsCase_Create();

			// Create Buttons and Actions on this Form
			$this->btnSave = new QButton($this);
			$this->btnSave->Text = QApplication::Translate('Save');
			$this->btnSave->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnSave_Click'));
			$this->btnSave->CausesValidation = $this;

			$this->btnCancel = new QButton($this);
			$this->btnCancel->Text = QApplication::Translate('Cancel');
			$this->btnCancel->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCancel_Click'));

			$this->btnDelete = new QButton($this);
			$this->btnDelete->Text = QApplication::Translate('Delete');
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(QApplication::Translate('Are you SURE you want to DELETE this') . ' ' . QApplication::Translate('Person') . '?'));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctPerson->EditMode;
		}

		// Control AjaxAction Event Handlers
		public function btnSave_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Save" processing to the PersonMetaControl
			$this->mctPerson->SavePerson();
			$this->CloseSelf(true);
		}

		public function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the PersonMetaControl
			$this->mctPerson->DeletePerson();
			$this->CloseSelf(true);
		}

		public function btnCancel_Click($strFormId, $strControlId, $strParameter) {
			$this->CloseSelf(false);
		}

		// Close Myself and Call ClosePanelMethod Callback
		protected function CloseSelf($blnChangesMade) {
			$strMethod = $this->strClosePanelMethod;
			$this->objForm->$strMethod($blnChangesMade);
		}
	}
?>