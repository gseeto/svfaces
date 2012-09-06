<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Person class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Person object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a PersonMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read Person $Person the actual Person data class being edited
	 * property QLabel $VictimWitnessNumControl
	 * property-read QLabel $VictimWitnessNumLabel
	 * property QTextBox $FirstNameControl
	 * property-read QLabel $FirstNameLabel
	 * property QTextBox $LastNameControl
	 * property-read QLabel $LastNameLabel
	 * property QDateTimePicker $DateOfBirthControl
	 * property-read QLabel $DateOfBirthLabel
	 * property QIntegerTextBox $SocialSecurityNumberControl
	 * property-read QLabel $SocialSecurityNumberLabel
	 * property QTextBox $PhoneControl
	 * property-read QLabel $PhoneLabel
	 * property QTextBox $EmailControl
	 * property-read QLabel $EmailLabel
	 * property QTextBox $NotesControl
	 * property-read QLabel $NotesLabel
	 * property QCheckBox $GenderControl
	 * property-read QLabel $GenderLabel
	 * property QListBox $EthnicityIdControl
	 * property-read QLabel $EthnicityIdLabel
	 * property QIntegerTextBox $AgeControl
	 * property-read QLabel $AgeLabel
	 * property QListBox $PrimaryLanguageIdControl
	 * property-read QLabel $PrimaryLanguageIdLabel
	 * property QCheckBox $DisabledControl
	 * property-read QLabel $DisabledLabel
	 * property QCheckBox $ElderlyControl
	 * property-read QLabel $ElderlyLabel
	 * property QListBox $AgencyReferredIdControl
	 * property-read QLabel $AgencyReferredIdLabel
	 * property QListBox $CasesAsCaseControl
	 * property-read QLabel $CasesAsCaseLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class PersonMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var Person objPerson
		 * @access protected
		 */
		protected $objPerson;

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

		// Controls that allow the editing of Person's individual data fields
        /**
         * @var QLabel lblVictimWitnessNum;
         * @access protected
         */
		protected $lblVictimWitnessNum;

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
         * @var QIntegerTextBox txtSocialSecurityNumber;
         * @access protected
         */
		protected $txtSocialSecurityNumber;

        /**
         * @var QTextBox txtPhone;
         * @access protected
         */
		protected $txtPhone;

        /**
         * @var QTextBox txtEmail;
         * @access protected
         */
		protected $txtEmail;

        /**
         * @var QTextBox txtNotes;
         * @access protected
         */
		protected $txtNotes;

        /**
         * @var QCheckBox chkGender;
         * @access protected
         */
		protected $chkGender;

        /**
         * @var QListBox lstEthnicity;
         * @access protected
         */
		protected $lstEthnicity;

        /**
         * @var QIntegerTextBox txtAge;
         * @access protected
         */
		protected $txtAge;

        /**
         * @var QListBox lstPrimaryLanguage;
         * @access protected
         */
		protected $lstPrimaryLanguage;

        /**
         * @var QCheckBox chkDisabled;
         * @access protected
         */
		protected $chkDisabled;

        /**
         * @var QCheckBox chkElderly;
         * @access protected
         */
		protected $chkElderly;

        /**
         * @var QListBox lstAgencyReferred;
         * @access protected
         */
		protected $lstAgencyReferred;


		// Controls that allow the viewing of Person's individual data fields
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
         * @var QLabel lblSocialSecurityNumber
         * @access protected
         */
		protected $lblSocialSecurityNumber;

        /**
         * @var QLabel lblPhone
         * @access protected
         */
		protected $lblPhone;

        /**
         * @var QLabel lblEmail
         * @access protected
         */
		protected $lblEmail;

        /**
         * @var QLabel lblNotes
         * @access protected
         */
		protected $lblNotes;

        /**
         * @var QLabel lblGender
         * @access protected
         */
		protected $lblGender;

        /**
         * @var QLabel lblEthnicityId
         * @access protected
         */
		protected $lblEthnicityId;

        /**
         * @var QLabel lblAge
         * @access protected
         */
		protected $lblAge;

        /**
         * @var QLabel lblPrimaryLanguageId
         * @access protected
         */
		protected $lblPrimaryLanguageId;

        /**
         * @var QLabel lblDisabled
         * @access protected
         */
		protected $lblDisabled;

        /**
         * @var QLabel lblElderly
         * @access protected
         */
		protected $lblElderly;

        /**
         * @var QLabel lblAgencyReferredId
         * @access protected
         */
		protected $lblAgencyReferredId;


		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References
		protected $lstCasesesAsCase;


		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References
		protected $lblCasesesAsCase;



		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * PersonMetaControl to edit a single Person object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Person object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this PersonMetaControl
		 * @param Person $objPerson new or existing Person object
		 */
		 public function __construct($objParentObject, Person $objPerson) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this PersonMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Person object
			$this->objPerson = $objPerson;

			// Figure out if we're Editing or Creating New
			if ($this->objPerson->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this PersonMetaControl
		 * @param integer $intVictimWitnessNum primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Person object creation - defaults to CreateOrEdit
 		 * @return PersonMetaControl
		 */
		public static function Create($objParentObject, $intVictimWitnessNum = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intVictimWitnessNum)) {
				$objPerson = Person::Load($intVictimWitnessNum);

				// Person was found -- return it!
				if ($objPerson)
					return new PersonMetaControl($objParentObject, $objPerson);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Person object with PK arguments: ' . $intVictimWitnessNum);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new PersonMetaControl($objParentObject, new Person());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this PersonMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Person object creation - defaults to CreateOrEdit
		 * @return PersonMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intVictimWitnessNum = QApplication::PathInfo(0);
			return PersonMetaControl::Create($objParentObject, $intVictimWitnessNum, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this PersonMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Person object creation - defaults to CreateOrEdit
		 * @return PersonMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intVictimWitnessNum = QApplication::QueryString('intVictimWitnessNum');
			return PersonMetaControl::Create($objParentObject, $intVictimWitnessNum, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblVictimWitnessNum
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblVictimWitnessNum_Create($strControlId = null) {
			$this->lblVictimWitnessNum = new QLabel($this->objParentObject, $strControlId);
			$this->lblVictimWitnessNum->Name = QApplication::Translate('Victim Witness Num');
			if ($this->blnEditMode)
				$this->lblVictimWitnessNum->Text = $this->objPerson->VictimWitnessNum;
			else
				$this->lblVictimWitnessNum->Text = 'N/A';
			return $this->lblVictimWitnessNum;
		}

		/**
		 * Create and setup QTextBox txtFirstName
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtFirstName_Create($strControlId = null) {
			$this->txtFirstName = new QTextBox($this->objParentObject, $strControlId);
			$this->txtFirstName->Name = QApplication::Translate('First Name');
			$this->txtFirstName->Text = $this->objPerson->FirstName;
			$this->txtFirstName->MaxLength = Person::FirstNameMaxLength;
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
			$this->lblFirstName->Text = $this->objPerson->FirstName;
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
			$this->txtLastName->Text = $this->objPerson->LastName;
			$this->txtLastName->MaxLength = Person::LastNameMaxLength;
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
			$this->lblLastName->Text = $this->objPerson->LastName;
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
			$this->calDateOfBirth->DateTime = $this->objPerson->DateOfBirth;
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
			$this->lblDateOfBirth->Text = sprintf($this->objPerson->DateOfBirth) ? $this->objPerson->DateOfBirth->__toString($this->strDateOfBirthDateTimeFormat) : null;
			return $this->lblDateOfBirth;
		}

		protected $strDateOfBirthDateTimeFormat;

		/**
		 * Create and setup QIntegerTextBox txtSocialSecurityNumber
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtSocialSecurityNumber_Create($strControlId = null) {
			$this->txtSocialSecurityNumber = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtSocialSecurityNumber->Name = QApplication::Translate('Social Security Number');
			$this->txtSocialSecurityNumber->Text = $this->objPerson->SocialSecurityNumber;
			return $this->txtSocialSecurityNumber;
		}

		/**
		 * Create and setup QLabel lblSocialSecurityNumber
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblSocialSecurityNumber_Create($strControlId = null, $strFormat = null) {
			$this->lblSocialSecurityNumber = new QLabel($this->objParentObject, $strControlId);
			$this->lblSocialSecurityNumber->Name = QApplication::Translate('Social Security Number');
			$this->lblSocialSecurityNumber->Text = $this->objPerson->SocialSecurityNumber;
			$this->lblSocialSecurityNumber->Format = $strFormat;
			return $this->lblSocialSecurityNumber;
		}

		/**
		 * Create and setup QTextBox txtPhone
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtPhone_Create($strControlId = null) {
			$this->txtPhone = new QTextBox($this->objParentObject, $strControlId);
			$this->txtPhone->Name = QApplication::Translate('Phone');
			$this->txtPhone->Text = $this->objPerson->Phone;
			$this->txtPhone->MaxLength = Person::PhoneMaxLength;
			return $this->txtPhone;
		}

		/**
		 * Create and setup QLabel lblPhone
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblPhone_Create($strControlId = null) {
			$this->lblPhone = new QLabel($this->objParentObject, $strControlId);
			$this->lblPhone->Name = QApplication::Translate('Phone');
			$this->lblPhone->Text = $this->objPerson->Phone;
			return $this->lblPhone;
		}

		/**
		 * Create and setup QTextBox txtEmail
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtEmail_Create($strControlId = null) {
			$this->txtEmail = new QTextBox($this->objParentObject, $strControlId);
			$this->txtEmail->Name = QApplication::Translate('Email');
			$this->txtEmail->Text = $this->objPerson->Email;
			$this->txtEmail->MaxLength = Person::EmailMaxLength;
			return $this->txtEmail;
		}

		/**
		 * Create and setup QLabel lblEmail
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblEmail_Create($strControlId = null) {
			$this->lblEmail = new QLabel($this->objParentObject, $strControlId);
			$this->lblEmail->Name = QApplication::Translate('Email');
			$this->lblEmail->Text = $this->objPerson->Email;
			return $this->lblEmail;
		}

		/**
		 * Create and setup QTextBox txtNotes
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNotes_Create($strControlId = null) {
			$this->txtNotes = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNotes->Name = QApplication::Translate('Notes');
			$this->txtNotes->Text = $this->objPerson->Notes;
			$this->txtNotes->MaxLength = Person::NotesMaxLength;
			return $this->txtNotes;
		}

		/**
		 * Create and setup QLabel lblNotes
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblNotes_Create($strControlId = null) {
			$this->lblNotes = new QLabel($this->objParentObject, $strControlId);
			$this->lblNotes->Name = QApplication::Translate('Notes');
			$this->lblNotes->Text = $this->objPerson->Notes;
			return $this->lblNotes;
		}

		/**
		 * Create and setup QCheckBox chkGender
		 * @param string $strControlId optional ControlId to use
		 * @return QCheckBox
		 */
		public function chkGender_Create($strControlId = null) {
			$this->chkGender = new QCheckBox($this->objParentObject, $strControlId);
			$this->chkGender->Name = QApplication::Translate('Gender');
			$this->chkGender->Checked = $this->objPerson->Gender;
			return $this->chkGender;
		}

		/**
		 * Create and setup QLabel lblGender
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblGender_Create($strControlId = null) {
			$this->lblGender = new QLabel($this->objParentObject, $strControlId);
			$this->lblGender->Name = QApplication::Translate('Gender');
			$this->lblGender->Text = ($this->objPerson->Gender) ? QApplication::Translate('Yes') : QApplication::Translate('No');
			return $this->lblGender;
		}

		/**
		 * Create and setup QListBox lstEthnicity
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstEthnicity_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstEthnicity = new QListBox($this->objParentObject, $strControlId);
			$this->lstEthnicity->Name = QApplication::Translate('Ethnicity');
			$this->lstEthnicity->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objEthnicityCursor = Ethnicity::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objEthnicity = Ethnicity::InstantiateCursor($objEthnicityCursor)) {
				$objListItem = new QListItem($objEthnicity->__toString(), $objEthnicity->Id);
				if (($this->objPerson->Ethnicity) && ($this->objPerson->Ethnicity->Id == $objEthnicity->Id))
					$objListItem->Selected = true;
				$this->lstEthnicity->AddItem($objListItem);
			}

			// Return the QListBox
			return $this->lstEthnicity;
		}

		/**
		 * Create and setup QLabel lblEthnicityId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblEthnicityId_Create($strControlId = null) {
			$this->lblEthnicityId = new QLabel($this->objParentObject, $strControlId);
			$this->lblEthnicityId->Name = QApplication::Translate('Ethnicity');
			$this->lblEthnicityId->Text = ($this->objPerson->Ethnicity) ? $this->objPerson->Ethnicity->__toString() : null;
			return $this->lblEthnicityId;
		}

		/**
		 * Create and setup QIntegerTextBox txtAge
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtAge_Create($strControlId = null) {
			$this->txtAge = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtAge->Name = QApplication::Translate('Age');
			$this->txtAge->Text = $this->objPerson->Age;
			return $this->txtAge;
		}

		/**
		 * Create and setup QLabel lblAge
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblAge_Create($strControlId = null, $strFormat = null) {
			$this->lblAge = new QLabel($this->objParentObject, $strControlId);
			$this->lblAge->Name = QApplication::Translate('Age');
			$this->lblAge->Text = $this->objPerson->Age;
			$this->lblAge->Format = $strFormat;
			return $this->lblAge;
		}

		/**
		 * Create and setup QListBox lstPrimaryLanguage
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstPrimaryLanguage_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstPrimaryLanguage = new QListBox($this->objParentObject, $strControlId);
			$this->lstPrimaryLanguage->Name = QApplication::Translate('Primary Language');
			$this->lstPrimaryLanguage->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objPrimaryLanguageCursor = Language::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objPrimaryLanguage = Language::InstantiateCursor($objPrimaryLanguageCursor)) {
				$objListItem = new QListItem($objPrimaryLanguage->__toString(), $objPrimaryLanguage->Id);
				if (($this->objPerson->PrimaryLanguage) && ($this->objPerson->PrimaryLanguage->Id == $objPrimaryLanguage->Id))
					$objListItem->Selected = true;
				$this->lstPrimaryLanguage->AddItem($objListItem);
			}

			// Return the QListBox
			return $this->lstPrimaryLanguage;
		}

		/**
		 * Create and setup QLabel lblPrimaryLanguageId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblPrimaryLanguageId_Create($strControlId = null) {
			$this->lblPrimaryLanguageId = new QLabel($this->objParentObject, $strControlId);
			$this->lblPrimaryLanguageId->Name = QApplication::Translate('Primary Language');
			$this->lblPrimaryLanguageId->Text = ($this->objPerson->PrimaryLanguage) ? $this->objPerson->PrimaryLanguage->__toString() : null;
			return $this->lblPrimaryLanguageId;
		}

		/**
		 * Create and setup QCheckBox chkDisabled
		 * @param string $strControlId optional ControlId to use
		 * @return QCheckBox
		 */
		public function chkDisabled_Create($strControlId = null) {
			$this->chkDisabled = new QCheckBox($this->objParentObject, $strControlId);
			$this->chkDisabled->Name = QApplication::Translate('Disabled');
			$this->chkDisabled->Checked = $this->objPerson->Disabled;
			return $this->chkDisabled;
		}

		/**
		 * Create and setup QLabel lblDisabled
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblDisabled_Create($strControlId = null) {
			$this->lblDisabled = new QLabel($this->objParentObject, $strControlId);
			$this->lblDisabled->Name = QApplication::Translate('Disabled');
			$this->lblDisabled->Text = ($this->objPerson->Disabled) ? QApplication::Translate('Yes') : QApplication::Translate('No');
			return $this->lblDisabled;
		}

		/**
		 * Create and setup QCheckBox chkElderly
		 * @param string $strControlId optional ControlId to use
		 * @return QCheckBox
		 */
		public function chkElderly_Create($strControlId = null) {
			$this->chkElderly = new QCheckBox($this->objParentObject, $strControlId);
			$this->chkElderly->Name = QApplication::Translate('Elderly');
			$this->chkElderly->Checked = $this->objPerson->Elderly;
			return $this->chkElderly;
		}

		/**
		 * Create and setup QLabel lblElderly
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblElderly_Create($strControlId = null) {
			$this->lblElderly = new QLabel($this->objParentObject, $strControlId);
			$this->lblElderly->Name = QApplication::Translate('Elderly');
			$this->lblElderly->Text = ($this->objPerson->Elderly) ? QApplication::Translate('Yes') : QApplication::Translate('No');
			return $this->lblElderly;
		}

		/**
		 * Create and setup QListBox lstAgencyReferred
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstAgencyReferred_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstAgencyReferred = new QListBox($this->objParentObject, $strControlId);
			$this->lstAgencyReferred->Name = QApplication::Translate('Agency Referred');
			$this->lstAgencyReferred->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objAgencyReferredCursor = Agency::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objAgencyReferred = Agency::InstantiateCursor($objAgencyReferredCursor)) {
				$objListItem = new QListItem($objAgencyReferred->__toString(), $objAgencyReferred->Id);
				if (($this->objPerson->AgencyReferred) && ($this->objPerson->AgencyReferred->Id == $objAgencyReferred->Id))
					$objListItem->Selected = true;
				$this->lstAgencyReferred->AddItem($objListItem);
			}

			// Return the QListBox
			return $this->lstAgencyReferred;
		}

		/**
		 * Create and setup QLabel lblAgencyReferredId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblAgencyReferredId_Create($strControlId = null) {
			$this->lblAgencyReferredId = new QLabel($this->objParentObject, $strControlId);
			$this->lblAgencyReferredId->Name = QApplication::Translate('Agency Referred');
			$this->lblAgencyReferredId->Text = ($this->objPerson->AgencyReferred) ? $this->objPerson->AgencyReferred->__toString() : null;
			return $this->lblAgencyReferredId;
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
			$objAssociatedArray = $this->objPerson->GetCasesAsCaseArray();

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
			
			$objAssociatedArray = $this->objPerson->GetCasesAsCaseArray();
			$strItems = array();
			foreach ($objAssociatedArray as $objAssociated)
				$strItems[] = $objAssociated->__toString();
			$this->lblCasesesAsCase->Text = implode($strGlue, $strItems);
			return $this->lblCasesesAsCase;
		}



		/**
		 * Refresh this MetaControl with Data from the local Person object.
		 * @param boolean $blnReload reload Person from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objPerson->Reload();

			if ($this->lblVictimWitnessNum) if ($this->blnEditMode) $this->lblVictimWitnessNum->Text = $this->objPerson->VictimWitnessNum;

			if ($this->txtFirstName) $this->txtFirstName->Text = $this->objPerson->FirstName;
			if ($this->lblFirstName) $this->lblFirstName->Text = $this->objPerson->FirstName;

			if ($this->txtLastName) $this->txtLastName->Text = $this->objPerson->LastName;
			if ($this->lblLastName) $this->lblLastName->Text = $this->objPerson->LastName;

			if ($this->calDateOfBirth) $this->calDateOfBirth->DateTime = $this->objPerson->DateOfBirth;
			if ($this->lblDateOfBirth) $this->lblDateOfBirth->Text = sprintf($this->objPerson->DateOfBirth) ? $this->objPerson->__toString($this->strDateOfBirthDateTimeFormat) : null;

			if ($this->txtSocialSecurityNumber) $this->txtSocialSecurityNumber->Text = $this->objPerson->SocialSecurityNumber;
			if ($this->lblSocialSecurityNumber) $this->lblSocialSecurityNumber->Text = $this->objPerson->SocialSecurityNumber;

			if ($this->txtPhone) $this->txtPhone->Text = $this->objPerson->Phone;
			if ($this->lblPhone) $this->lblPhone->Text = $this->objPerson->Phone;

			if ($this->txtEmail) $this->txtEmail->Text = $this->objPerson->Email;
			if ($this->lblEmail) $this->lblEmail->Text = $this->objPerson->Email;

			if ($this->txtNotes) $this->txtNotes->Text = $this->objPerson->Notes;
			if ($this->lblNotes) $this->lblNotes->Text = $this->objPerson->Notes;

			if ($this->chkGender) $this->chkGender->Checked = $this->objPerson->Gender;
			if ($this->lblGender) $this->lblGender->Text = ($this->objPerson->Gender) ? QApplication::Translate('Yes') : QApplication::Translate('No');

			if ($this->lstEthnicity) {
					$this->lstEthnicity->RemoveAllItems();
				$this->lstEthnicity->AddItem(QApplication::Translate('- Select One -'), null);
				$objEthnicityArray = Ethnicity::LoadAll();
				if ($objEthnicityArray) foreach ($objEthnicityArray as $objEthnicity) {
					$objListItem = new QListItem($objEthnicity->__toString(), $objEthnicity->Id);
					if (($this->objPerson->Ethnicity) && ($this->objPerson->Ethnicity->Id == $objEthnicity->Id))
						$objListItem->Selected = true;
					$this->lstEthnicity->AddItem($objListItem);
				}
			}
			if ($this->lblEthnicityId) $this->lblEthnicityId->Text = ($this->objPerson->Ethnicity) ? $this->objPerson->Ethnicity->__toString() : null;

			if ($this->txtAge) $this->txtAge->Text = $this->objPerson->Age;
			if ($this->lblAge) $this->lblAge->Text = $this->objPerson->Age;

			if ($this->lstPrimaryLanguage) {
					$this->lstPrimaryLanguage->RemoveAllItems();
				$this->lstPrimaryLanguage->AddItem(QApplication::Translate('- Select One -'), null);
				$objPrimaryLanguageArray = Language::LoadAll();
				if ($objPrimaryLanguageArray) foreach ($objPrimaryLanguageArray as $objPrimaryLanguage) {
					$objListItem = new QListItem($objPrimaryLanguage->__toString(), $objPrimaryLanguage->Id);
					if (($this->objPerson->PrimaryLanguage) && ($this->objPerson->PrimaryLanguage->Id == $objPrimaryLanguage->Id))
						$objListItem->Selected = true;
					$this->lstPrimaryLanguage->AddItem($objListItem);
				}
			}
			if ($this->lblPrimaryLanguageId) $this->lblPrimaryLanguageId->Text = ($this->objPerson->PrimaryLanguage) ? $this->objPerson->PrimaryLanguage->__toString() : null;

			if ($this->chkDisabled) $this->chkDisabled->Checked = $this->objPerson->Disabled;
			if ($this->lblDisabled) $this->lblDisabled->Text = ($this->objPerson->Disabled) ? QApplication::Translate('Yes') : QApplication::Translate('No');

			if ($this->chkElderly) $this->chkElderly->Checked = $this->objPerson->Elderly;
			if ($this->lblElderly) $this->lblElderly->Text = ($this->objPerson->Elderly) ? QApplication::Translate('Yes') : QApplication::Translate('No');

			if ($this->lstAgencyReferred) {
					$this->lstAgencyReferred->RemoveAllItems();
				$this->lstAgencyReferred->AddItem(QApplication::Translate('- Select One -'), null);
				$objAgencyReferredArray = Agency::LoadAll();
				if ($objAgencyReferredArray) foreach ($objAgencyReferredArray as $objAgencyReferred) {
					$objListItem = new QListItem($objAgencyReferred->__toString(), $objAgencyReferred->Id);
					if (($this->objPerson->AgencyReferred) && ($this->objPerson->AgencyReferred->Id == $objAgencyReferred->Id))
						$objListItem->Selected = true;
					$this->lstAgencyReferred->AddItem($objListItem);
				}
			}
			if ($this->lblAgencyReferredId) $this->lblAgencyReferredId->Text = ($this->objPerson->AgencyReferred) ? $this->objPerson->AgencyReferred->__toString() : null;

			if ($this->lstCasesesAsCase) {
				$this->lstCasesesAsCase->RemoveAllItems();
				$objAssociatedArray = $this->objPerson->GetCasesAsCaseArray();
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
				$objAssociatedArray = $this->objPerson->GetCasesAsCaseArray();
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
				$this->objPerson->UnassociateAllCasesesAsCase();
				$objSelectedListItems = $this->lstCasesesAsCase->SelectedItems;
				if ($objSelectedListItems) foreach ($objSelectedListItems as $objListItem) {
					$this->objPerson->AssociateCasesAsCase(Cases::Load($objListItem->Value));
				}
			}
		}





		///////////////////////////////////////////////
		// PUBLIC PERSON OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Person instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SavePerson() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtFirstName) $this->objPerson->FirstName = $this->txtFirstName->Text;
				if ($this->txtLastName) $this->objPerson->LastName = $this->txtLastName->Text;
				if ($this->calDateOfBirth) $this->objPerson->DateOfBirth = $this->calDateOfBirth->DateTime;
				if ($this->txtSocialSecurityNumber) $this->objPerson->SocialSecurityNumber = $this->txtSocialSecurityNumber->Text;
				if ($this->txtPhone) $this->objPerson->Phone = $this->txtPhone->Text;
				if ($this->txtEmail) $this->objPerson->Email = $this->txtEmail->Text;
				if ($this->txtNotes) $this->objPerson->Notes = $this->txtNotes->Text;
				if ($this->chkGender) $this->objPerson->Gender = $this->chkGender->Checked;
				if ($this->lstEthnicity) $this->objPerson->EthnicityId = $this->lstEthnicity->SelectedValue;
				if ($this->txtAge) $this->objPerson->Age = $this->txtAge->Text;
				if ($this->lstPrimaryLanguage) $this->objPerson->PrimaryLanguageId = $this->lstPrimaryLanguage->SelectedValue;
				if ($this->chkDisabled) $this->objPerson->Disabled = $this->chkDisabled->Checked;
				if ($this->chkElderly) $this->objPerson->Elderly = $this->chkElderly->Checked;
				if ($this->lstAgencyReferred) $this->objPerson->AgencyReferredId = $this->lstAgencyReferred->SelectedValue;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Person object
				$this->objPerson->Save();

				// Finally, update any ManyToManyReferences (if any)
				$this->lstCasesesAsCase_Update();
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Person instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeletePerson() {
			$this->objPerson->UnassociateAllCasesesAsCase();
			$this->objPerson->Delete();
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
				case 'Person': return $this->objPerson;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Person fields -- will be created dynamically if not yet created
				case 'VictimWitnessNumControl':
					if (!$this->lblVictimWitnessNum) return $this->lblVictimWitnessNum_Create();
					return $this->lblVictimWitnessNum;
				case 'VictimWitnessNumLabel':
					if (!$this->lblVictimWitnessNum) return $this->lblVictimWitnessNum_Create();
					return $this->lblVictimWitnessNum;
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
				case 'SocialSecurityNumberControl':
					if (!$this->txtSocialSecurityNumber) return $this->txtSocialSecurityNumber_Create();
					return $this->txtSocialSecurityNumber;
				case 'SocialSecurityNumberLabel':
					if (!$this->lblSocialSecurityNumber) return $this->lblSocialSecurityNumber_Create();
					return $this->lblSocialSecurityNumber;
				case 'PhoneControl':
					if (!$this->txtPhone) return $this->txtPhone_Create();
					return $this->txtPhone;
				case 'PhoneLabel':
					if (!$this->lblPhone) return $this->lblPhone_Create();
					return $this->lblPhone;
				case 'EmailControl':
					if (!$this->txtEmail) return $this->txtEmail_Create();
					return $this->txtEmail;
				case 'EmailLabel':
					if (!$this->lblEmail) return $this->lblEmail_Create();
					return $this->lblEmail;
				case 'NotesControl':
					if (!$this->txtNotes) return $this->txtNotes_Create();
					return $this->txtNotes;
				case 'NotesLabel':
					if (!$this->lblNotes) return $this->lblNotes_Create();
					return $this->lblNotes;
				case 'GenderControl':
					if (!$this->chkGender) return $this->chkGender_Create();
					return $this->chkGender;
				case 'GenderLabel':
					if (!$this->lblGender) return $this->lblGender_Create();
					return $this->lblGender;
				case 'EthnicityIdControl':
					if (!$this->lstEthnicity) return $this->lstEthnicity_Create();
					return $this->lstEthnicity;
				case 'EthnicityIdLabel':
					if (!$this->lblEthnicityId) return $this->lblEthnicityId_Create();
					return $this->lblEthnicityId;
				case 'AgeControl':
					if (!$this->txtAge) return $this->txtAge_Create();
					return $this->txtAge;
				case 'AgeLabel':
					if (!$this->lblAge) return $this->lblAge_Create();
					return $this->lblAge;
				case 'PrimaryLanguageIdControl':
					if (!$this->lstPrimaryLanguage) return $this->lstPrimaryLanguage_Create();
					return $this->lstPrimaryLanguage;
				case 'PrimaryLanguageIdLabel':
					if (!$this->lblPrimaryLanguageId) return $this->lblPrimaryLanguageId_Create();
					return $this->lblPrimaryLanguageId;
				case 'DisabledControl':
					if (!$this->chkDisabled) return $this->chkDisabled_Create();
					return $this->chkDisabled;
				case 'DisabledLabel':
					if (!$this->lblDisabled) return $this->lblDisabled_Create();
					return $this->lblDisabled;
				case 'ElderlyControl':
					if (!$this->chkElderly) return $this->chkElderly_Create();
					return $this->chkElderly;
				case 'ElderlyLabel':
					if (!$this->lblElderly) return $this->lblElderly_Create();
					return $this->lblElderly;
				case 'AgencyReferredIdControl':
					if (!$this->lstAgencyReferred) return $this->lstAgencyReferred_Create();
					return $this->lstAgencyReferred;
				case 'AgencyReferredIdLabel':
					if (!$this->lblAgencyReferredId) return $this->lblAgencyReferredId_Create();
					return $this->lblAgencyReferredId;
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
					// Controls that point to Person fields
					case 'VictimWitnessNumControl':
						return ($this->lblVictimWitnessNum = QType::Cast($mixValue, 'QControl'));
					case 'FirstNameControl':
						return ($this->txtFirstName = QType::Cast($mixValue, 'QControl'));
					case 'LastNameControl':
						return ($this->txtLastName = QType::Cast($mixValue, 'QControl'));
					case 'DateOfBirthControl':
						return ($this->calDateOfBirth = QType::Cast($mixValue, 'QControl'));
					case 'SocialSecurityNumberControl':
						return ($this->txtSocialSecurityNumber = QType::Cast($mixValue, 'QControl'));
					case 'PhoneControl':
						return ($this->txtPhone = QType::Cast($mixValue, 'QControl'));
					case 'EmailControl':
						return ($this->txtEmail = QType::Cast($mixValue, 'QControl'));
					case 'NotesControl':
						return ($this->txtNotes = QType::Cast($mixValue, 'QControl'));
					case 'GenderControl':
						return ($this->chkGender = QType::Cast($mixValue, 'QControl'));
					case 'EthnicityIdControl':
						return ($this->lstEthnicity = QType::Cast($mixValue, 'QControl'));
					case 'AgeControl':
						return ($this->txtAge = QType::Cast($mixValue, 'QControl'));
					case 'PrimaryLanguageIdControl':
						return ($this->lstPrimaryLanguage = QType::Cast($mixValue, 'QControl'));
					case 'DisabledControl':
						return ($this->chkDisabled = QType::Cast($mixValue, 'QControl'));
					case 'ElderlyControl':
						return ($this->chkElderly = QType::Cast($mixValue, 'QControl'));
					case 'AgencyReferredIdControl':
						return ($this->lstAgencyReferred = QType::Cast($mixValue, 'QControl'));
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