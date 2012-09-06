<?php
	/**
	 * This is a quick-and-dirty draft QPanel object to do Create, Edit, and Delete functionality
	 * of the Suspect class.  It uses the code-generated
	 * SuspectMetaControl class, which has meta-methods to help with
	 * easily creating/defining controls to modify the fields of a Suspect columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both suspect_edit.php AND
	 * suspect_edit.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class SuspectEditPanel extends QPanel {
		// Local instance of the SuspectMetaControl
		protected $mctSuspect;

		// Controls for Suspect's Data Fields
		public $lblId;
		public $txtFirstName;
		public $txtLastName;
		public $calDateOfBirth;
		public $txtPfd;
		public $txtInformation;

		// Other ListBoxes (if applicable) via Unique ReverseReferences and ManyToMany References
		public $lstCasesesAsCase;

		// Other Controls
		public $btnSave;
		public $btnDelete;
		public $btnCancel;

		// Callback
		protected $strClosePanelMethod;

		public function __construct($objParentObject, $strClosePanelMethod, $intId = null, $strControlId = null) {
			// Call the Parent
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Setup Callback and Template
			$this->strTemplate = 'SuspectEditPanel.tpl.php';
			$this->strClosePanelMethod = $strClosePanelMethod;

			// Construct the SuspectMetaControl
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctSuspect = SuspectMetaControl::Create($this, $intId);

			// Call MetaControl's methods to create qcontrols based on Suspect's data fields
			$this->lblId = $this->mctSuspect->lblId_Create();
			$this->txtFirstName = $this->mctSuspect->txtFirstName_Create();
			$this->txtLastName = $this->mctSuspect->txtLastName_Create();
			$this->calDateOfBirth = $this->mctSuspect->calDateOfBirth_Create();
			$this->txtPfd = $this->mctSuspect->txtPfd_Create();
			$this->txtInformation = $this->mctSuspect->txtInformation_Create();
			$this->lstCasesesAsCase = $this->mctSuspect->lstCasesesAsCase_Create();

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
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(QApplication::Translate('Are you SURE you want to DELETE this') . ' ' . QApplication::Translate('Suspect') . '?'));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctSuspect->EditMode;
		}

		// Control AjaxAction Event Handlers
		public function btnSave_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Save" processing to the SuspectMetaControl
			$this->mctSuspect->SaveSuspect();
			$this->CloseSelf(true);
		}

		public function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the SuspectMetaControl
			$this->mctSuspect->DeleteSuspect();
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