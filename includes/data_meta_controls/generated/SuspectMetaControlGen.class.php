<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Suspect class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Suspect object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a SuspectMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read Suspect $Suspect the actual Suspect data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QTextBox $FirstNameControl
	 * property-read QLabel $FirstNameLabel
	 * property QTextBox $LastNameControl
	 * property-read QLabel $LastNameLabel
	 * property QDateTimePicker $DateOfBirthControl
	 * property-read QLabel $DateOfBirthLabel
	 * property QIntegerTextBox $PfdControl
	 * property-read QLabel $PfdLabel
	 * property QTextBox $InformationControl
	 * property-read QLabel $InformationLabel
	 * property QListBox $CasesAsCaseControl
	 * property-read QLabel $CasesAsCaseLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class SuspectMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var Suspect objSuspect
		 * @access protected
		 */
		protected $objSuspect;

		/**
		 * @var QForm|QControl objParentObject
		 * @access protected
		 */
		protected $objParentObject;

		/**
		 * @var string  strTitleVerb
		 * @access protected
		 */
		protected $strTitleVerb;

		/**
		 * @var boolean blnEditMode
		 * @access protected
		 */
		protected $blnEditMode;

		// Controls that allow the editing of Suspect's individual data fields
        /**
         * @var QLabel lblId;
         * @access protected
         */
		protected $lblId;

        /**
         * @var QTextBox txtFirstName;
         * @access protected
         */
		protected $txtFirstName;

        /**
         * @var QTextBox txtLastName;
         * @access protected
         */
		protected $txtLastName;

        /**
         * @var QDateTimePicker calDateOfBirth;
         * @access protected
         */
		protected $calDateOfBirth;

        /**
         * @var QIntegerTextBox txtPfd;
         * @access protected
         */
		protected $txtPfd;

        /**
         * @var QTextBox txtInformation;
         * @access protected
         */
		protected $txtInformation;


		// Controls that allow the viewing of Suspect's individual data fields
        /**
         * @var QLabel lblFirstName
         * @access protected
         */
		protected $lblFirstName;

        /**
         * @var QLabel lblLastName
         * @access protected
         */
		protected $lblLastName;

        /**
         * @var QLabel lblDateOfBirth
         * @access protected
         */
		protected $lblDateOfBirth;

        /**
         * @var QLabel lblPfd
         * @access protected
         */
		protected $lblPfd;

        /**
         * @var QLabel lblInformation
         * @access protected
         */
		protected $lblInformation;


		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References
		protected $lstCasesesAsCase;


		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References
		protected $lblCasesesAsCase;



		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * SuspectMetaControl to edit a single Suspect object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Suspect object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this SuspectMetaControl
		 * @param Suspect $objSuspect new or existing Suspect object
		 */
		 public function __construct($objParentObject, Suspect $objSuspect) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this SuspectMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Suspect object
			$this->objSuspect = $objSuspect;

			// Figure out if we're Editing or Creating New
			if ($this->objSuspect->__Restored) {
				$this->strTitleVerb = QApplication::Translate('Edit');
				$this->blnEditMode = true;
			} else {
				$this->strTitleVerb = QApplication::Translate('Create');
				$this->blnEditMode = false;
			}
		 }

		/**
		 * Static Helper Method to Create using PK arguments
		 * You must pass in the PK arguments on an object to load, or leave it blank to create a new one.
		 * If you want to load via QueryString or PathInfo, use the CreateFromQueryString or CreateFromPathInfo
		 * static helper methods.  Finally, specify a CreateType to define whether or not we are only allowed to 
		 * edit, or if we are also allowed to create a new one, etc.
		 * 
		 * @param mixed $objParentObject QForm or QPanel which will be using this SuspectMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Suspect object creation - defaults to CreateOrEdit
 		 * @return SuspectMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objSuspect = Suspect::Load($intId);

				// Suspect was found -- return it!
				if ($objSuspect)
					return new SuspectMetaControl($objParentObject, $objSuspect);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Suspect object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new SuspectMetaControl($objParentObject, new Suspect());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this SuspectMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Suspect object creation - defaults to CreateOrEdit
		 * @return SuspectMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return SuspectMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this SuspectMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Suspect object creation - defaults to CreateOrEdit
		 * @return SuspectMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return SuspectMetaControl::Create($objParentObject, $intId, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblId_Create($strControlId = null) {
			$this->lblId = new QLabel($this->objParentObject, $strControlId);
			$this->lblId->Name = QApplication::Translate('Id');
			if ($this->blnEditMode)
				$this->lblId->Text = $this->objSuspect->Id;
			else
				$this->lblId->Text = 'N/A';
			return $this->lblId;
		}

		/**
		 * Create and setup QTextBox txtFirstName
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtFirstName_Create($strControlId = null) {
			$this->txtFirstName = new QTextBox($this->objParentObject, $strControlId);
			$this->txtFirstName->Name = QApplication::Translate('First Name');
			$this->txtFirstName->Text = $this->objSuspect->FirstName;
			$this->txtFirstName->MaxLength = Suspect::FirstNameMaxLength;
			return $this->txtFirstName;
		}

		/**
		 * Create and setup QLabel lblFirstName
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblFirstName_Create($strControlId = null) {
			$this->lblFirstName = new QLabel($this->objParentObject, $strControlId);
			$this->lblFirstName->Name = QApplication::Translate('First Name');
			$this->lblFirstName->Text = $this->objSuspect->FirstName;
			return $this->lblFirstName;
		}

		/**
		 * Create and setup QTextBox txtLastName
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtLastName_Create($strControlId = null) {
			$this->txtLastName = new QTextBox($this->objParentObject, $strControlId);
			$this->txtLastName->Name = QApplication::Translate('Last Name');
			$this->txtLastName->Text = $this->objSuspect->LastName;
			$this->txtLastName->MaxLength = Suspect::LastNameMaxLength;
			return $this->txtLastName;
		}

		/**
		 * Create and setup QLabel lblLastName
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblLastName_Create($strControlId = null) {
			$this->lblLastName = new QLabel($this->objParentObject, $strControlId);
			$this->lblLastName->Name = QApplication::Translate('Last Name');
			$this->lblLastName->Text = $this->objSuspect->LastName;
			return $this->lblLastName;
		}

		/**
		 * Create and setup QDateTimePicker calDateOfBirth
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calDateOfBirth_Create($strControlId = null) {
			$this->calDateOfBirth = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calDateOfBirth->Name = QApplication::Translate('Date Of Birth');
			$this->calDateOfBirth->DateTime = $this->objSuspect->DateOfBirth;
			$this->calDateOfBirth->DateTimePickerType = QDateTimePickerType::Date;
			return $this->calDateOfBirth;
		}

		/**
		 * Create and setup QLabel lblDateOfBirth
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat optional DateTimeFormat to use
		 * @return QLabel
		 */
		public function lblDateOfBirth_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblDateOfBirth = new QLabel($this->objParentObject, $strControlId);
			$this->lblDateOfBirth->Name = QApplication::Translate('Date Of Birth');
			$this->strDateOfBirthDateTimeFormat = $strDateTimeFormat;
			$this->lblDateOfBirth->Text = sprintf($this->objSuspect->DateOfBirth) ? $this->objSuspect->DateOfBirth->__toString($this->strDateOfBirthDateTimeFormat) : null;
			return $this->lblDateOfBirth;
		}

		protected $strDateOfBirthDateTimeFormat;

		/**
		 * Create and setup QIntegerTextBox txtPfd
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtPfd_Create($strControlId = null) {
			$this->txtPfd = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtPfd->Name = QApplication::Translate('Pfd');
			$this->txtPfd->Text = $this->objSuspect->Pfd;
			return $this->txtPfd;
		}

		/**
		 * Create and setup QLabel lblPfd
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblPfd_Create($strControlId = null, $strFormat = null) {
			$this->lblPfd = new QLabel($this->objParentObject, $strControlId);
			$this->lblPfd->Name = QApplication::Translate('Pfd');
			$this->lblPfd->Text = $this->objSuspect->Pfd;
			$this->lblPfd->Format = $strFormat;
			return $this->lblPfd;
		}

		/**
		 * Create and setup QTextBox txtInformation
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtInformation_Create($strControlId = null) {
			$this->txtInformation = new QTextBox($this->objParentObject, $strControlId);
			$this->txtInformation->Name = QApplication::Translate('Information');
			$this->txtInformation->Text = $this->objSuspect->Information;
			$this->txtInformation->MaxLength = Suspect::InformationMaxLength;
			return $this->txtInformation;
		}

		/**
		 * Create and setup QLabel lblInformation
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblInformation_Create($strControlId = null) {
			$this->lblInformation = new QLabel($this->objParentObject, $strControlId);
			$this->lblInformation->Name = QApplication::Translate('Information');
			$this->lblInformation->Text = $this->objSuspect->Information;
			return $this->lblInformation;
		}

		/**
		 * Create and setup QListBox lstCasesesAsCase
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstCasesesAsCase_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstCasesesAsCase = new QListBox($this->objParentObject, $strControlId);
			$this->lstCasesesAsCase->Name = QApplication::Translate('Caseses As Case');
			$this->lstCasesesAsCase->SelectionMode = QSelectionMode::Multiple;

			// We need to know which items to "Pre-Select"
			$objAssociatedArray = $this->objSuspect->GetCasesAsCaseArray();

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objCasesCursor = Cases::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objCases = Cases::InstantiateCursor($objCasesCursor)) {
				$objListItem = new QListItem($objCases->__toString(), $objCases->Id);
				foreach ($objAssociatedArray as $objAssociated) {
					if ($objAssociated->Id == $objCases->Id)
						$objListItem->Selected = true;
				}
				$this->lstCasesesAsCase->AddItem($objListItem);
			}

			// Return the QListControl
			return $this->lstCasesesAsCase;
		}

		/**
		 * Create and setup QLabel lblCasesesAsCase
		 * @param string $strControlId optional ControlId to use
		 * @param string $strGlue glue to display in between each associated object
		 * @return QLabel
		 */
		public function lblCasesesAsCase_Create($strControlId = null, $strGlue = ', ') {
			$this->lblCasesesAsCase = new QLabel($this->objParentObject, $strControlId);
			$this->lstCasesesAsCase->Name = QApplication::Translate('Caseses As Case');
			
			$objAssociatedArray = $this->objSuspect->GetCasesAsCaseArray();
			$strItems = array();
			foreach ($objAssociatedArray as $objAssociated)
				$strItems[] = $objAssociated->__toString();
			$this->lblCasesesAsCase->Text = implode($strGlue, $strItems);
			return $this->lblCasesesAsCase;
		}



		/**
		 * Refresh this MetaControl with Data from the local Suspect object.
		 * @param boolean $blnReload reload Suspect from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objSuspect->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objSuspect->Id;

			if ($this->txtFirstName) $this->txtFirstName->Text = $this->objSuspect->FirstName;
			if ($this->lblFirstName) $this->lblFirstName->Text = $this->objSuspect->FirstName;

			if ($this->txtLastName) $this->txtLastName->Text = $this->objSuspect->LastName;
			if ($this->lblLastName) $this->lblLastName->Text = $this->objSuspect->LastName;

			if ($this->calDateOfBirth) $this->calDateOfBirth->DateTime = $this->objSuspect->DateOfBirth;
			if ($this->lblDateOfBirth) $this->lblDateOfBirth->Text = sprintf($this->objSuspect->DateOfBirth) ? $this->objSuspect->__toString($this->strDateOfBirthDateTimeFormat) : null;

			if ($this->txtPfd) $this->txtPfd->Text = $this->objSuspect->Pfd;
			if ($this->lblPfd) $this->lblPfd->Text = $this->objSuspect->Pfd;

			if ($this->txtInformation) $this->txtInformation->Text = $this->objSuspect->Information;
			if ($this->lblInformation) $this->lblInformation->Text = $this->objSuspect->Information;

			if ($this->lstCasesesAsCase) {
				$this->lstCasesesAsCase->RemoveAllItems();
				$objAssociatedArray = $this->objSuspect->GetCasesAsCaseArray();
				$objCasesArray = Cases::LoadAll();
				if ($objCasesArray) foreach ($objCasesArray as $objCases) {
					$objListItem = new QListItem($objCases->__toString(), $objCases->Id);
					foreach ($objAssociatedArray as $objAssociated) {
						if ($objAssociated->Id == $objCases->Id)
							$objListItem->Selected = true;
					}
					$this->lstCasesesAsCase->AddItem($objListItem);
				}
			}
			if ($this->lblCasesesAsCase) {
				$objAssociatedArray = $this->objSuspect->GetCasesAsCaseArray();
				$strItems = array();
				foreach ($objAssociatedArray as $objAssociated)
					$strItems[] = $objAssociated->__toString();
				$this->lblCasesesAsCase->Text = implode($strGlue, $strItems);
			}

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////

		protected function lstCasesesAsCase_Update() {
			if ($this->lstCasesesAsCase) {
				$this->objSuspect->UnassociateAllCasesesAsCase();
				$objSelectedListItems = $this->lstCasesesAsCase->SelectedItems;
				if ($objSelectedListItems) foreach ($objSelectedListItems as $objListItem) {
					$this->objSuspect->AssociateCasesAsCase(Cases::Load($objListItem->Value));
				}
			}
		}





		///////////////////////////////////////////////
		// PUBLIC SUSPECT OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Suspect instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveSuspect() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtFirstName) $this->objSuspect->FirstName = $this->txtFirstName->Text;
				if ($this->txtLastName) $this->objSuspect->LastName = $this->txtLastName->Text;
				if ($this->calDateOfBirth) $this->objSuspect->DateOfBirth = $this->calDateOfBirth->DateTime;
				if ($this->txtPfd) $this->objSuspect->Pfd = $this->txtPfd->Text;
				if ($this->txtInformation) $this->objSuspect->Information = $this->txtInformation->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Suspect object
				$this->objSuspect->Save();

				// Finally, update any ManyToManyReferences (if any)
				$this->lstCasesesAsCase_Update();
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Suspect instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteSuspect() {
			$this->objSuspect->UnassociateAllCasesesAsCase();
			$this->objSuspect->Delete();
		}		



		///////////////////////////////////////////////
		// PUBLIC GETTERS and SETTERS
		///////////////////////////////////////////////

		/**
		 * Override method to perform a property "Get"
		 * This will get the value of $strName
		 *
		 * @param string $strName Name of the property to get
		 * @return mixed
		 */
		public function __get($strName) {
			switch ($strName) {
				// General MetaControlVariables
				case 'Suspect': return $this->objSuspect;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Suspect fields -- will be created dynamically if not yet created
				case 'IdControl':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'IdLabel':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'FirstNameControl':
					if (!$this->txtFirstName) return $this->txtFirstName_Create();
					return $this->txtFirstName;
				case 'FirstNameLabel':
					if (!$this->lblFirstName) return $this->lblFirstName_Create();
					return $this->lblFirstName;
				case 'LastNameControl':
					if (!$this->txtLastName) return $this->txtLastName_Create();
					return $this->txtLastName;
				case 'LastNameLabel':
					if (!$this->lblLastName) return $this->lblLastName_Create();
					return $this->lblLastName;
				case 'DateOfBirthControl':
					if (!$this->calDateOfBirth) return $this->calDateOfBirth_Create();
					return $this->calDateOfBirth;
				case 'DateOfBirthLabel':
					if (!$this->lblDateOfBirth) return $this->lblDateOfBirth_Create();
					return $this->lblDateOfBirth;
				case 'PfdControl':
					if (!$this->txtPfd) return $this->txtPfd_Create();
					return $this->txtPfd;
				case 'PfdLabel':
					if (!$this->lblPfd) return $this->lblPfd_Create();
					return $this->lblPfd;
				case 'InformationControl':
					if (!$this->txtInformation) return $this->txtInformation_Create();
					return $this->txtInformation;
				case 'InformationLabel':
					if (!$this->lblInformation) return $this->lblInformation_Create();
					return $this->lblInformation;
				case 'CasesAsCaseControl':
					if (!$this->lstCasesesAsCase) return $this->lstCasesesAsCase_Create();
					return $this->lstCasesesAsCase;
				case 'CasesAsCaseLabel':
					if (!$this->lblCasesesAsCase) return $this->lblCasesesAsCase_Create();
					return $this->lblCasesesAsCase;
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

		/**
		 * Override method to perform a property "Set"
		 * This will set the property $strName to be $mixValue
		 *
		 * @param string $strName Name of the property to set
		 * @param string $mixValue New value of the property
		 * @return mixed
		 */
		public function __set($strName, $mixValue) {
			try {
				switch ($strName) {
					// Controls that point to Suspect fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'FirstNameControl':
						return ($this->txtFirstName = QType::Cast($mixValue, 'QControl'));
					case 'LastNameControl':
						return ($this->txtLastName = QType::Cast($mixValue, 'QControl'));
					case 'DateOfBirthControl':
						return ($this->calDateOfBirth = QType::Cast($mixValue, 'QControl'));
					case 'PfdControl':
						return ($this->txtPfd = QType::Cast($mixValue, 'QControl'));
					case 'InformationControl':
						return ($this->txtInformation = QType::Cast($mixValue, 'QControl'));
					case 'CasesAsCaseControl':
						return ($this->lstCasesesAsCase = QType::Cast($mixValue, 'QControl'));
					default:
						return parent::__set($strName, $mixValue);
				}
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}
	}
?>