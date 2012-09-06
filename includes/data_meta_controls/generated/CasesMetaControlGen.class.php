<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Cases class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Cases object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a CasesMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read Cases $Cases the actual Cases data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QListBox $CrimeTypeIdControl
	 * property-read QLabel $CrimeTypeIdLabel
	 * property QDateTimePicker $CrimeDateControl
	 * property-read QLabel $CrimeDateLabel
	 * property QListBox $AgencyReportedToIdControl
	 * property-read QLabel $AgencyReportedToIdLabel
	 * property QIntegerTextBox $CrimeReportNumberControl
	 * property-read QLabel $CrimeReportNumberLabel
	 * property QIntegerTextBox $FamilyLawNumberControl
	 * property-read QLabel $FamilyLawNumberLabel
	 * property QListBox $CourtIdControl
	 * property-read QLabel $CourtIdLabel
	 * property QListBox $CaseStatusIdControl
	 * property-read QLabel $CaseStatusIdLabel
	 * property QIntegerTextBox $PrimaryPersonIdControl
	 * property-read QLabel $PrimaryPersonIdLabel
	 * property QListBox $AdvocateAsCaseControl
	 * property-read QLabel $AdvocateAsCaseLabel
	 * property QListBox $SuspectAsCaseControl
	 * property-read QLabel $SuspectAsCaseLabel
	 * property QListBox $PersonAsCaseControl
	 * property-read QLabel $PersonAsCaseLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class CasesMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var Cases objCases
		 * @access protected
		 */
		protected $objCases;

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

		// Controls that allow the editing of Cases's individual data fields
        /**
         * @var QLabel lblId;
         * @access protected
         */
		protected $lblId;

        /**
         * @var QListBox lstCrimeType;
         * @access protected
         */
		protected $lstCrimeType;

        /**
         * @var QDateTimePicker calCrimeDate;
         * @access protected
         */
		protected $calCrimeDate;

        /**
         * @var QListBox lstAgencyReportedTo;
         * @access protected
         */
		protected $lstAgencyReportedTo;

        /**
         * @var QIntegerTextBox txtCrimeReportNumber;
         * @access protected
         */
		protected $txtCrimeReportNumber;

        /**
         * @var QIntegerTextBox txtFamilyLawNumber;
         * @access protected
         */
		protected $txtFamilyLawNumber;

        /**
         * @var QListBox lstCourt;
         * @access protected
         */
		protected $lstCourt;

        /**
         * @var QListBox lstCaseStatus;
         * @access protected
         */
		protected $lstCaseStatus;

        /**
         * @var QIntegerTextBox txtPrimaryPersonId;
         * @access protected
         */
		protected $txtPrimaryPersonId;


		// Controls that allow the viewing of Cases's individual data fields
        /**
         * @var QLabel lblCrimeTypeId
         * @access protected
         */
		protected $lblCrimeTypeId;

        /**
         * @var QLabel lblCrimeDate
         * @access protected
         */
		protected $lblCrimeDate;

        /**
         * @var QLabel lblAgencyReportedToId
         * @access protected
         */
		protected $lblAgencyReportedToId;

        /**
         * @var QLabel lblCrimeReportNumber
         * @access protected
         */
		protected $lblCrimeReportNumber;

        /**
         * @var QLabel lblFamilyLawNumber
         * @access protected
         */
		protected $lblFamilyLawNumber;

        /**
         * @var QLabel lblCourtId
         * @access protected
         */
		protected $lblCourtId;

        /**
         * @var QLabel lblCaseStatusId
         * @access protected
         */
		protected $lblCaseStatusId;

        /**
         * @var QLabel lblPrimaryPersonId
         * @access protected
         */
		protected $lblPrimaryPersonId;


		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References
		protected $lstAdvocatesAsCase;

		protected $lstSuspectsAsCase;

		protected $lstPeopleAsCase;


		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References
		protected $lblAdvocatesAsCase;

		protected $lblSuspectsAsCase;

		protected $lblPeopleAsCase;



		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * CasesMetaControl to edit a single Cases object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Cases object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this CasesMetaControl
		 * @param Cases $objCases new or existing Cases object
		 */
		 public function __construct($objParentObject, Cases $objCases) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this CasesMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Cases object
			$this->objCases = $objCases;

			// Figure out if we're Editing or Creating New
			if ($this->objCases->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this CasesMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Cases object creation - defaults to CreateOrEdit
 		 * @return CasesMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objCases = Cases::Load($intId);

				// Cases was found -- return it!
				if ($objCases)
					return new CasesMetaControl($objParentObject, $objCases);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Cases object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new CasesMetaControl($objParentObject, new Cases());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this CasesMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Cases object creation - defaults to CreateOrEdit
		 * @return CasesMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return CasesMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this CasesMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Cases object creation - defaults to CreateOrEdit
		 * @return CasesMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return CasesMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objCases->Id;
			else
				$this->lblId->Text = 'N/A';
			return $this->lblId;
		}

		/**
		 * Create and setup QListBox lstCrimeType
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstCrimeType_Create($strControlId = null) {
			$this->lstCrimeType = new QListBox($this->objParentObject, $strControlId);
			$this->lstCrimeType->Name = QApplication::Translate('Crime Type');
			$this->lstCrimeType->AddItem(QApplication::Translate('- Select One -'), null);

			$this->lstCrimeType->AddItems(CrimeType::$NameArray, $this->objCases->CrimeTypeId);
			return $this->lstCrimeType;
		}

		/**
		 * Create and setup QLabel lblCrimeTypeId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblCrimeTypeId_Create($strControlId = null) {
			$this->lblCrimeTypeId = new QLabel($this->objParentObject, $strControlId);
			$this->lblCrimeTypeId->Name = QApplication::Translate('Crime Type');
			$this->lblCrimeTypeId->Text = ($this->objCases->CrimeTypeId) ? CrimeType::$NameArray[$this->objCases->CrimeTypeId] : null;
			return $this->lblCrimeTypeId;
		}

		/**
		 * Create and setup QDateTimePicker calCrimeDate
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calCrimeDate_Create($strControlId = null) {
			$this->calCrimeDate = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calCrimeDate->Name = QApplication::Translate('Crime Date');
			$this->calCrimeDate->DateTime = $this->objCases->CrimeDate;
			$this->calCrimeDate->DateTimePickerType = QDateTimePickerType::DateTime;
			return $this->calCrimeDate;
		}

		/**
		 * Create and setup QLabel lblCrimeDate
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat optional DateTimeFormat to use
		 * @return QLabel
		 */
		public function lblCrimeDate_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblCrimeDate = new QLabel($this->objParentObject, $strControlId);
			$this->lblCrimeDate->Name = QApplication::Translate('Crime Date');
			$this->strCrimeDateDateTimeFormat = $strDateTimeFormat;
			$this->lblCrimeDate->Text = sprintf($this->objCases->CrimeDate) ? $this->objCases->CrimeDate->__toString($this->strCrimeDateDateTimeFormat) : null;
			return $this->lblCrimeDate;
		}

		protected $strCrimeDateDateTimeFormat;

		/**
		 * Create and setup QListBox lstAgencyReportedTo
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstAgencyReportedTo_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstAgencyReportedTo = new QListBox($this->objParentObject, $strControlId);
			$this->lstAgencyReportedTo->Name = QApplication::Translate('Agency Reported To');
			$this->lstAgencyReportedTo->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objAgencyReportedToCursor = Agency::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objAgencyReportedTo = Agency::InstantiateCursor($objAgencyReportedToCursor)) {
				$objListItem = new QListItem($objAgencyReportedTo->__toString(), $objAgencyReportedTo->Id);
				if (($this->objCases->AgencyReportedTo) && ($this->objCases->AgencyReportedTo->Id == $objAgencyReportedTo->Id))
					$objListItem->Selected = true;
				$this->lstAgencyReportedTo->AddItem($objListItem);
			}

			// Return the QListBox
			return $this->lstAgencyReportedTo;
		}

		/**
		 * Create and setup QLabel lblAgencyReportedToId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblAgencyReportedToId_Create($strControlId = null) {
			$this->lblAgencyReportedToId = new QLabel($this->objParentObject, $strControlId);
			$this->lblAgencyReportedToId->Name = QApplication::Translate('Agency Reported To');
			$this->lblAgencyReportedToId->Text = ($this->objCases->AgencyReportedTo) ? $this->objCases->AgencyReportedTo->__toString() : null;
			return $this->lblAgencyReportedToId;
		}

		/**
		 * Create and setup QIntegerTextBox txtCrimeReportNumber
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtCrimeReportNumber_Create($strControlId = null) {
			$this->txtCrimeReportNumber = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtCrimeReportNumber->Name = QApplication::Translate('Crime Report Number');
			$this->txtCrimeReportNumber->Text = $this->objCases->CrimeReportNumber;
			return $this->txtCrimeReportNumber;
		}

		/**
		 * Create and setup QLabel lblCrimeReportNumber
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblCrimeReportNumber_Create($strControlId = null, $strFormat = null) {
			$this->lblCrimeReportNumber = new QLabel($this->objParentObject, $strControlId);
			$this->lblCrimeReportNumber->Name = QApplication::Translate('Crime Report Number');
			$this->lblCrimeReportNumber->Text = $this->objCases->CrimeReportNumber;
			$this->lblCrimeReportNumber->Format = $strFormat;
			return $this->lblCrimeReportNumber;
		}

		/**
		 * Create and setup QIntegerTextBox txtFamilyLawNumber
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtFamilyLawNumber_Create($strControlId = null) {
			$this->txtFamilyLawNumber = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtFamilyLawNumber->Name = QApplication::Translate('Family Law Number');
			$this->txtFamilyLawNumber->Text = $this->objCases->FamilyLawNumber;
			return $this->txtFamilyLawNumber;
		}

		/**
		 * Create and setup QLabel lblFamilyLawNumber
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblFamilyLawNumber_Create($strControlId = null, $strFormat = null) {
			$this->lblFamilyLawNumber = new QLabel($this->objParentObject, $strControlId);
			$this->lblFamilyLawNumber->Name = QApplication::Translate('Family Law Number');
			$this->lblFamilyLawNumber->Text = $this->objCases->FamilyLawNumber;
			$this->lblFamilyLawNumber->Format = $strFormat;
			return $this->lblFamilyLawNumber;
		}

		/**
		 * Create and setup QListBox lstCourt
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstCourt_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstCourt = new QListBox($this->objParentObject, $strControlId);
			$this->lstCourt->Name = QApplication::Translate('Court');
			$this->lstCourt->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objCourtCursor = CourtInformation::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objCourt = CourtInformation::InstantiateCursor($objCourtCursor)) {
				$objListItem = new QListItem($objCourt->__toString(), $objCourt->Id);
				if (($this->objCases->Court) && ($this->objCases->Court->Id == $objCourt->Id))
					$objListItem->Selected = true;
				$this->lstCourt->AddItem($objListItem);
			}

			// Return the QListBox
			return $this->lstCourt;
		}

		/**
		 * Create and setup QLabel lblCourtId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblCourtId_Create($strControlId = null) {
			$this->lblCourtId = new QLabel($this->objParentObject, $strControlId);
			$this->lblCourtId->Name = QApplication::Translate('Court');
			$this->lblCourtId->Text = ($this->objCases->Court) ? $this->objCases->Court->__toString() : null;
			return $this->lblCourtId;
		}

		/**
		 * Create and setup QListBox lstCaseStatus
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstCaseStatus_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstCaseStatus = new QListBox($this->objParentObject, $strControlId);
			$this->lstCaseStatus->Name = QApplication::Translate('Case Status');
			$this->lstCaseStatus->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objCaseStatusCursor = CaseStatus::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objCaseStatus = CaseStatus::InstantiateCursor($objCaseStatusCursor)) {
				$objListItem = new QListItem($objCaseStatus->__toString(), $objCaseStatus->Id);
				if (($this->objCases->CaseStatus) && ($this->objCases->CaseStatus->Id == $objCaseStatus->Id))
					$objListItem->Selected = true;
				$this->lstCaseStatus->AddItem($objListItem);
			}

			// Return the QListBox
			return $this->lstCaseStatus;
		}

		/**
		 * Create and setup QLabel lblCaseStatusId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblCaseStatusId_Create($strControlId = null) {
			$this->lblCaseStatusId = new QLabel($this->objParentObject, $strControlId);
			$this->lblCaseStatusId->Name = QApplication::Translate('Case Status');
			$this->lblCaseStatusId->Text = ($this->objCases->CaseStatus) ? $this->objCases->CaseStatus->__toString() : null;
			return $this->lblCaseStatusId;
		}

		/**
		 * Create and setup QIntegerTextBox txtPrimaryPersonId
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtPrimaryPersonId_Create($strControlId = null) {
			$this->txtPrimaryPersonId = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtPrimaryPersonId->Name = QApplication::Translate('Primary Person Id');
			$this->txtPrimaryPersonId->Text = $this->objCases->PrimaryPersonId;
			return $this->txtPrimaryPersonId;
		}

		/**
		 * Create and setup QLabel lblPrimaryPersonId
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblPrimaryPersonId_Create($strControlId = null, $strFormat = null) {
			$this->lblPrimaryPersonId = new QLabel($this->objParentObject, $strControlId);
			$this->lblPrimaryPersonId->Name = QApplication::Translate('Primary Person Id');
			$this->lblPrimaryPersonId->Text = $this->objCases->PrimaryPersonId;
			$this->lblPrimaryPersonId->Format = $strFormat;
			return $this->lblPrimaryPersonId;
		}

		/**
		 * Create and setup QListBox lstAdvocatesAsCase
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstAdvocatesAsCase_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstAdvocatesAsCase = new QListBox($this->objParentObject, $strControlId);
			$this->lstAdvocatesAsCase->Name = QApplication::Translate('Advocates As Case');
			$this->lstAdvocatesAsCase->SelectionMode = QSelectionMode::Multiple;

			// We need to know which items to "Pre-Select"
			$objAssociatedArray = $this->objCases->GetAdvocateAsCaseArray();

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objAdvocateCursor = Advocate::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objAdvocate = Advocate::InstantiateCursor($objAdvocateCursor)) {
				$objListItem = new QListItem($objAdvocate->__toString(), $objAdvocate->Id);
				foreach ($objAssociatedArray as $objAssociated) {
					if ($objAssociated->Id == $objAdvocate->Id)
						$objListItem->Selected = true;
				}
				$this->lstAdvocatesAsCase->AddItem($objListItem);
			}

			// Return the QListControl
			return $this->lstAdvocatesAsCase;
		}

		/**
		 * Create and setup QLabel lblAdvocatesAsCase
		 * @param string $strControlId optional ControlId to use
		 * @param string $strGlue glue to display in between each associated object
		 * @return QLabel
		 */
		public function lblAdvocatesAsCase_Create($strControlId = null, $strGlue = ', ') {
			$this->lblAdvocatesAsCase = new QLabel($this->objParentObject, $strControlId);
			$this->lstAdvocatesAsCase->Name = QApplication::Translate('Advocates As Case');
			
			$objAssociatedArray = $this->objCases->GetAdvocateAsCaseArray();
			$strItems = array();
			foreach ($objAssociatedArray as $objAssociated)
				$strItems[] = $objAssociated->__toString();
			$this->lblAdvocatesAsCase->Text = implode($strGlue, $strItems);
			return $this->lblAdvocatesAsCase;
		}

		/**
		 * Create and setup QListBox lstSuspectsAsCase
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstSuspectsAsCase_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstSuspectsAsCase = new QListBox($this->objParentObject, $strControlId);
			$this->lstSuspectsAsCase->Name = QApplication::Translate('Suspects As Case');
			$this->lstSuspectsAsCase->SelectionMode = QSelectionMode::Multiple;

			// We need to know which items to "Pre-Select"
			$objAssociatedArray = $this->objCases->GetSuspectAsCaseArray();

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objSuspectCursor = Suspect::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objSuspect = Suspect::InstantiateCursor($objSuspectCursor)) {
				$objListItem = new QListItem($objSuspect->__toString(), $objSuspect->Id);
				foreach ($objAssociatedArray as $objAssociated) {
					if ($objAssociated->Id == $objSuspect->Id)
						$objListItem->Selected = true;
				}
				$this->lstSuspectsAsCase->AddItem($objListItem);
			}

			// Return the QListControl
			return $this->lstSuspectsAsCase;
		}

		/**
		 * Create and setup QLabel lblSuspectsAsCase
		 * @param string $strControlId optional ControlId to use
		 * @param string $strGlue glue to display in between each associated object
		 * @return QLabel
		 */
		public function lblSuspectsAsCase_Create($strControlId = null, $strGlue = ', ') {
			$this->lblSuspectsAsCase = new QLabel($this->objParentObject, $strControlId);
			$this->lstSuspectsAsCase->Name = QApplication::Translate('Suspects As Case');
			
			$objAssociatedArray = $this->objCases->GetSuspectAsCaseArray();
			$strItems = array();
			foreach ($objAssociatedArray as $objAssociated)
				$strItems[] = $objAssociated->__toString();
			$this->lblSuspectsAsCase->Text = implode($strGlue, $strItems);
			return $this->lblSuspectsAsCase;
		}

		/**
		 * Create and setup QListBox lstPeopleAsCase
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstPeopleAsCase_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstPeopleAsCase = new QListBox($this->objParentObject, $strControlId);
			$this->lstPeopleAsCase->Name = QApplication::Translate('People As Case');
			$this->lstPeopleAsCase->SelectionMode = QSelectionMode::Multiple;

			// We need to know which items to "Pre-Select"
			$objAssociatedArray = $this->objCases->GetPersonAsCaseArray();

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objPersonCursor = Person::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objPerson = Person::InstantiateCursor($objPersonCursor)) {
				$objListItem = new QListItem($objPerson->__toString(), $objPerson->VictimWitnessNum);
				foreach ($objAssociatedArray as $objAssociated) {
					if ($objAssociated->VictimWitnessNum == $objPerson->VictimWitnessNum)
						$objListItem->Selected = true;
				}
				$this->lstPeopleAsCase->AddItem($objListItem);
			}

			// Return the QListControl
			return $this->lstPeopleAsCase;
		}

		/**
		 * Create and setup QLabel lblPeopleAsCase
		 * @param string $strControlId optional ControlId to use
		 * @param string $strGlue glue to display in between each associated object
		 * @return QLabel
		 */
		public function lblPeopleAsCase_Create($strControlId = null, $strGlue = ', ') {
			$this->lblPeopleAsCase = new QLabel($this->objParentObject, $strControlId);
			$this->lstPeopleAsCase->Name = QApplication::Translate('People As Case');
			
			$objAssociatedArray = $this->objCases->GetPersonAsCaseArray();
			$strItems = array();
			foreach ($objAssociatedArray as $objAssociated)
				$strItems[] = $objAssociated->__toString();
			$this->lblPeopleAsCase->Text = implode($strGlue, $strItems);
			return $this->lblPeopleAsCase;
		}



		/**
		 * Refresh this MetaControl with Data from the local Cases object.
		 * @param boolean $blnReload reload Cases from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objCases->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objCases->Id;

			if ($this->lstCrimeType) $this->lstCrimeType->SelectedValue = $this->objCases->CrimeTypeId;
			if ($this->lblCrimeTypeId) $this->lblCrimeTypeId->Text = ($this->objCases->CrimeTypeId) ? CrimeType::$NameArray[$this->objCases->CrimeTypeId] : null;

			if ($this->calCrimeDate) $this->calCrimeDate->DateTime = $this->objCases->CrimeDate;
			if ($this->lblCrimeDate) $this->lblCrimeDate->Text = sprintf($this->objCases->CrimeDate) ? $this->objCases->__toString($this->strCrimeDateDateTimeFormat) : null;

			if ($this->lstAgencyReportedTo) {
					$this->lstAgencyReportedTo->RemoveAllItems();
				$this->lstAgencyReportedTo->AddItem(QApplication::Translate('- Select One -'), null);
				$objAgencyReportedToArray = Agency::LoadAll();
				if ($objAgencyReportedToArray) foreach ($objAgencyReportedToArray as $objAgencyReportedTo) {
					$objListItem = new QListItem($objAgencyReportedTo->__toString(), $objAgencyReportedTo->Id);
					if (($this->objCases->AgencyReportedTo) && ($this->objCases->AgencyReportedTo->Id == $objAgencyReportedTo->Id))
						$objListItem->Selected = true;
					$this->lstAgencyReportedTo->AddItem($objListItem);
				}
			}
			if ($this->lblAgencyReportedToId) $this->lblAgencyReportedToId->Text = ($this->objCases->AgencyReportedTo) ? $this->objCases->AgencyReportedTo->__toString() : null;

			if ($this->txtCrimeReportNumber) $this->txtCrimeReportNumber->Text = $this->objCases->CrimeReportNumber;
			if ($this->lblCrimeReportNumber) $this->lblCrimeReportNumber->Text = $this->objCases->CrimeReportNumber;

			if ($this->txtFamilyLawNumber) $this->txtFamilyLawNumber->Text = $this->objCases->FamilyLawNumber;
			if ($this->lblFamilyLawNumber) $this->lblFamilyLawNumber->Text = $this->objCases->FamilyLawNumber;

			if ($this->lstCourt) {
					$this->lstCourt->RemoveAllItems();
				$this->lstCourt->AddItem(QApplication::Translate('- Select One -'), null);
				$objCourtArray = CourtInformation::LoadAll();
				if ($objCourtArray) foreach ($objCourtArray as $objCourt) {
					$objListItem = new QListItem($objCourt->__toString(), $objCourt->Id);
					if (($this->objCases->Court) && ($this->objCases->Court->Id == $objCourt->Id))
						$objListItem->Selected = true;
					$this->lstCourt->AddItem($objListItem);
				}
			}
			if ($this->lblCourtId) $this->lblCourtId->Text = ($this->objCases->Court) ? $this->objCases->Court->__toString() : null;

			if ($this->lstCaseStatus) {
					$this->lstCaseStatus->RemoveAllItems();
				$this->lstCaseStatus->AddItem(QApplication::Translate('- Select One -'), null);
				$objCaseStatusArray = CaseStatus::LoadAll();
				if ($objCaseStatusArray) foreach ($objCaseStatusArray as $objCaseStatus) {
					$objListItem = new QListItem($objCaseStatus->__toString(), $objCaseStatus->Id);
					if (($this->objCases->CaseStatus) && ($this->objCases->CaseStatus->Id == $objCaseStatus->Id))
						$objListItem->Selected = true;
					$this->lstCaseStatus->AddItem($objListItem);
				}
			}
			if ($this->lblCaseStatusId) $this->lblCaseStatusId->Text = ($this->objCases->CaseStatus) ? $this->objCases->CaseStatus->__toString() : null;

			if ($this->txtPrimaryPersonId) $this->txtPrimaryPersonId->Text = $this->objCases->PrimaryPersonId;
			if ($this->lblPrimaryPersonId) $this->lblPrimaryPersonId->Text = $this->objCases->PrimaryPersonId;

			if ($this->lstAdvocatesAsCase) {
				$this->lstAdvocatesAsCase->RemoveAllItems();
				$objAssociatedArray = $this->objCases->GetAdvocateAsCaseArray();
				$objAdvocateArray = Advocate::LoadAll();
				if ($objAdvocateArray) foreach ($objAdvocateArray as $objAdvocate) {
					$objListItem = new QListItem($objAdvocate->__toString(), $objAdvocate->Id);
					foreach ($objAssociatedArray as $objAssociated) {
						if ($objAssociated->Id == $objAdvocate->Id)
							$objListItem->Selected = true;
					}
					$this->lstAdvocatesAsCase->AddItem($objListItem);
				}
			}
			if ($this->lblAdvocatesAsCase) {
				$objAssociatedArray = $this->objCases->GetAdvocateAsCaseArray();
				$strItems = array();
				foreach ($objAssociatedArray as $objAssociated)
					$strItems[] = $objAssociated->__toString();
				$this->lblAdvocatesAsCase->Text = implode($strGlue, $strItems);
			}

			if ($this->lstSuspectsAsCase) {
				$this->lstSuspectsAsCase->RemoveAllItems();
				$objAssociatedArray = $this->objCases->GetSuspectAsCaseArray();
				$objSuspectArray = Suspect::LoadAll();
				if ($objSuspectArray) foreach ($objSuspectArray as $objSuspect) {
					$objListItem = new QListItem($objSuspect->__toString(), $objSuspect->Id);
					foreach ($objAssociatedArray as $objAssociated) {
						if ($objAssociated->Id == $objSuspect->Id)
							$objListItem->Selected = true;
					}
					$this->lstSuspectsAsCase->AddItem($objListItem);
				}
			}
			if ($this->lblSuspectsAsCase) {
				$objAssociatedArray = $this->objCases->GetSuspectAsCaseArray();
				$strItems = array();
				foreach ($objAssociatedArray as $objAssociated)
					$strItems[] = $objAssociated->__toString();
				$this->lblSuspectsAsCase->Text = implode($strGlue, $strItems);
			}

			if ($this->lstPeopleAsCase) {
				$this->lstPeopleAsCase->RemoveAllItems();
				$objAssociatedArray = $this->objCases->GetPersonAsCaseArray();
				$objPersonArray = Person::LoadAll();
				if ($objPersonArray) foreach ($objPersonArray as $objPerson) {
					$objListItem = new QListItem($objPerson->__toString(), $objPerson->VictimWitnessNum);
					foreach ($objAssociatedArray as $objAssociated) {
						if ($objAssociated->VictimWitnessNum == $objPerson->VictimWitnessNum)
							$objListItem->Selected = true;
					}
					$this->lstPeopleAsCase->AddItem($objListItem);
				}
			}
			if ($this->lblPeopleAsCase) {
				$objAssociatedArray = $this->objCases->GetPersonAsCaseArray();
				$strItems = array();
				foreach ($objAssociatedArray as $objAssociated)
					$strItems[] = $objAssociated->__toString();
				$this->lblPeopleAsCase->Text = implode($strGlue, $strItems);
			}

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////

		protected function lstAdvocatesAsCase_Update() {
			if ($this->lstAdvocatesAsCase) {
				$this->objCases->UnassociateAllAdvocatesAsCase();
				$objSelectedListItems = $this->lstAdvocatesAsCase->SelectedItems;
				if ($objSelectedListItems) foreach ($objSelectedListItems as $objListItem) {
					$this->objCases->AssociateAdvocateAsCase(Advocate::Load($objListItem->Value));
				}
			}
		}

		protected function lstSuspectsAsCase_Update() {
			if ($this->lstSuspectsAsCase) {
				$this->objCases->UnassociateAllSuspectsAsCase();
				$objSelectedListItems = $this->lstSuspectsAsCase->SelectedItems;
				if ($objSelectedListItems) foreach ($objSelectedListItems as $objListItem) {
					$this->objCases->AssociateSuspectAsCase(Suspect::Load($objListItem->Value));
				}
			}
		}

		protected function lstPeopleAsCase_Update() {
			if ($this->lstPeopleAsCase) {
				$this->objCases->UnassociateAllPeopleAsCase();
				$objSelectedListItems = $this->lstPeopleAsCase->SelectedItems;
				if ($objSelectedListItems) foreach ($objSelectedListItems as $objListItem) {
					$this->objCases->AssociatePersonAsCase(Person::Load($objListItem->Value));
				}
			}
		}





		///////////////////////////////////////////////
		// PUBLIC CASES OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Cases instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveCases() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstCrimeType) $this->objCases->CrimeTypeId = $this->lstCrimeType->SelectedValue;
				if ($this->calCrimeDate) $this->objCases->CrimeDate = $this->calCrimeDate->DateTime;
				if ($this->lstAgencyReportedTo) $this->objCases->AgencyReportedToId = $this->lstAgencyReportedTo->SelectedValue;
				if ($this->txtCrimeReportNumber) $this->objCases->CrimeReportNumber = $this->txtCrimeReportNumber->Text;
				if ($this->txtFamilyLawNumber) $this->objCases->FamilyLawNumber = $this->txtFamilyLawNumber->Text;
				if ($this->lstCourt) $this->objCases->CourtId = $this->lstCourt->SelectedValue;
				if ($this->lstCaseStatus) $this->objCases->CaseStatusId = $this->lstCaseStatus->SelectedValue;
				if ($this->txtPrimaryPersonId) $this->objCases->PrimaryPersonId = $this->txtPrimaryPersonId->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Cases object
				$this->objCases->Save();

				// Finally, update any ManyToManyReferences (if any)
				$this->lstAdvocatesAsCase_Update();
				$this->lstSuspectsAsCase_Update();
				$this->lstPeopleAsCase_Update();
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Cases instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteCases() {
			$this->objCases->UnassociateAllAdvocatesAsCase();
			$this->objCases->UnassociateAllSuspectsAsCase();
			$this->objCases->UnassociateAllPeopleAsCase();
			$this->objCases->Delete();
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
				case 'Cases': return $this->objCases;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Cases fields -- will be created dynamically if not yet created
				case 'IdControl':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'IdLabel':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'CrimeTypeIdControl':
					if (!$this->lstCrimeType) return $this->lstCrimeType_Create();
					return $this->lstCrimeType;
				case 'CrimeTypeIdLabel':
					if (!$this->lblCrimeTypeId) return $this->lblCrimeTypeId_Create();
					return $this->lblCrimeTypeId;
				case 'CrimeDateControl':
					if (!$this->calCrimeDate) return $this->calCrimeDate_Create();
					return $this->calCrimeDate;
				case 'CrimeDateLabel':
					if (!$this->lblCrimeDate) return $this->lblCrimeDate_Create();
					return $this->lblCrimeDate;
				case 'AgencyReportedToIdControl':
					if (!$this->lstAgencyReportedTo) return $this->lstAgencyReportedTo_Create();
					return $this->lstAgencyReportedTo;
				case 'AgencyReportedToIdLabel':
					if (!$this->lblAgencyReportedToId) return $this->lblAgencyReportedToId_Create();
					return $this->lblAgencyReportedToId;
				case 'CrimeReportNumberControl':
					if (!$this->txtCrimeReportNumber) return $this->txtCrimeReportNumber_Create();
					return $this->txtCrimeReportNumber;
				case 'CrimeReportNumberLabel':
					if (!$this->lblCrimeReportNumber) return $this->lblCrimeReportNumber_Create();
					return $this->lblCrimeReportNumber;
				case 'FamilyLawNumberControl':
					if (!$this->txtFamilyLawNumber) return $this->txtFamilyLawNumber_Create();
					return $this->txtFamilyLawNumber;
				case 'FamilyLawNumberLabel':
					if (!$this->lblFamilyLawNumber) return $this->lblFamilyLawNumber_Create();
					return $this->lblFamilyLawNumber;
				case 'CourtIdControl':
					if (!$this->lstCourt) return $this->lstCourt_Create();
					return $this->lstCourt;
				case 'CourtIdLabel':
					if (!$this->lblCourtId) return $this->lblCourtId_Create();
					return $this->lblCourtId;
				case 'CaseStatusIdControl':
					if (!$this->lstCaseStatus) return $this->lstCaseStatus_Create();
					return $this->lstCaseStatus;
				case 'CaseStatusIdLabel':
					if (!$this->lblCaseStatusId) return $this->lblCaseStatusId_Create();
					return $this->lblCaseStatusId;
				case 'PrimaryPersonIdControl':
					if (!$this->txtPrimaryPersonId) return $this->txtPrimaryPersonId_Create();
					return $this->txtPrimaryPersonId;
				case 'PrimaryPersonIdLabel':
					if (!$this->lblPrimaryPersonId) return $this->lblPrimaryPersonId_Create();
					return $this->lblPrimaryPersonId;
				case 'AdvocateAsCaseControl':
					if (!$this->lstAdvocatesAsCase) return $this->lstAdvocatesAsCase_Create();
					return $this->lstAdvocatesAsCase;
				case 'AdvocateAsCaseLabel':
					if (!$this->lblAdvocatesAsCase) return $this->lblAdvocatesAsCase_Create();
					return $this->lblAdvocatesAsCase;
				case 'SuspectAsCaseControl':
					if (!$this->lstSuspectsAsCase) return $this->lstSuspectsAsCase_Create();
					return $this->lstSuspectsAsCase;
				case 'SuspectAsCaseLabel':
					if (!$this->lblSuspectsAsCase) return $this->lblSuspectsAsCase_Create();
					return $this->lblSuspectsAsCase;
				case 'PersonAsCaseControl':
					if (!$this->lstPeopleAsCase) return $this->lstPeopleAsCase_Create();
					return $this->lstPeopleAsCase;
				case 'PersonAsCaseLabel':
					if (!$this->lblPeopleAsCase) return $this->lblPeopleAsCase_Create();
					return $this->lblPeopleAsCase;
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
					// Controls that point to Cases fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'CrimeTypeIdControl':
						return ($this->lstCrimeType = QType::Cast($mixValue, 'QControl'));
					case 'CrimeDateControl':
						return ($this->calCrimeDate = QType::Cast($mixValue, 'QControl'));
					case 'AgencyReportedToIdControl':
						return ($this->lstAgencyReportedTo = QType::Cast($mixValue, 'QControl'));
					case 'CrimeReportNumberControl':
						return ($this->txtCrimeReportNumber = QType::Cast($mixValue, 'QControl'));
					case 'FamilyLawNumberControl':
						return ($this->txtFamilyLawNumber = QType::Cast($mixValue, 'QControl'));
					case 'CourtIdControl':
						return ($this->lstCourt = QType::Cast($mixValue, 'QControl'));
					case 'CaseStatusIdControl':
						return ($this->lstCaseStatus = QType::Cast($mixValue, 'QControl'));
					case 'PrimaryPersonIdControl':
						return ($this->txtPrimaryPersonId = QType::Cast($mixValue, 'QControl'));
					case 'AdvocateAsCaseControl':
						return ($this->lstAdvocatesAsCase = QType::Cast($mixValue, 'QControl'));
					case 'SuspectAsCaseControl':
						return ($this->lstSuspectsAsCase = QType::Cast($mixValue, 'QControl'));
					case 'PersonAsCaseControl':
						return ($this->lstPeopleAsCase = QType::Cast($mixValue, 'QControl'));
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