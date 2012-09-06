<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Address class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Address object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a AddressMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read Address $Address the actual Address data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QTextBox $Address1Control
	 * property-read QLabel $Address1Label
	 * property QTextBox $Address2Control
	 * property-read QLabel $Address2Label
	 * property QTextBox $Address3Control
	 * property-read QLabel $Address3Label
	 * property QTextBox $CityControl
	 * property-read QLabel $CityLabel
	 * property QTextBox $StateControl
	 * property-read QLabel $StateLabel
	 * property QTextBox $ZipcodeControl
	 * property-read QLabel $ZipcodeLabel
	 * property QTextBox $CountryControl
	 * property-read QLabel $CountryLabel
	 * property QListBox $PersonIdControl
	 * property-read QLabel $PersonIdLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class AddressMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var Address objAddress
		 * @access protected
		 */
		protected $objAddress;

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

		// Controls that allow the editing of Address's individual data fields
        /**
         * @var QLabel lblId;
         * @access protected
         */
		protected $lblId;

        /**
         * @var QTextBox txtAddress1;
         * @access protected
         */
		protected $txtAddress1;

        /**
         * @var QTextBox txtAddress2;
         * @access protected
         */
		protected $txtAddress2;

        /**
         * @var QTextBox txtAddress3;
         * @access protected
         */
		protected $txtAddress3;

        /**
         * @var QTextBox txtCity;
         * @access protected
         */
		protected $txtCity;

        /**
         * @var QTextBox txtState;
         * @access protected
         */
		protected $txtState;

        /**
         * @var QTextBox txtZipcode;
         * @access protected
         */
		protected $txtZipcode;

        /**
         * @var QTextBox txtCountry;
         * @access protected
         */
		protected $txtCountry;

        /**
         * @var QListBox lstPerson;
         * @access protected
         */
		protected $lstPerson;


		// Controls that allow the viewing of Address's individual data fields
        /**
         * @var QLabel lblAddress1
         * @access protected
         */
		protected $lblAddress1;

        /**
         * @var QLabel lblAddress2
         * @access protected
         */
		protected $lblAddress2;

        /**
         * @var QLabel lblAddress3
         * @access protected
         */
		protected $lblAddress3;

        /**
         * @var QLabel lblCity
         * @access protected
         */
		protected $lblCity;

        /**
         * @var QLabel lblState
         * @access protected
         */
		protected $lblState;

        /**
         * @var QLabel lblZipcode
         * @access protected
         */
		protected $lblZipcode;

        /**
         * @var QLabel lblCountry
         * @access protected
         */
		protected $lblCountry;

        /**
         * @var QLabel lblPersonId
         * @access protected
         */
		protected $lblPersonId;


		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * AddressMetaControl to edit a single Address object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Address object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this AddressMetaControl
		 * @param Address $objAddress new or existing Address object
		 */
		 public function __construct($objParentObject, Address $objAddress) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this AddressMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Address object
			$this->objAddress = $objAddress;

			// Figure out if we're Editing or Creating New
			if ($this->objAddress->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this AddressMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Address object creation - defaults to CreateOrEdit
 		 * @return AddressMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objAddress = Address::Load($intId);

				// Address was found -- return it!
				if ($objAddress)
					return new AddressMetaControl($objParentObject, $objAddress);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Address object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new AddressMetaControl($objParentObject, new Address());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this AddressMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Address object creation - defaults to CreateOrEdit
		 * @return AddressMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return AddressMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this AddressMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Address object creation - defaults to CreateOrEdit
		 * @return AddressMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return AddressMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objAddress->Id;
			else
				$this->lblId->Text = 'N/A';
			return $this->lblId;
		}

		/**
		 * Create and setup QTextBox txtAddress1
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtAddress1_Create($strControlId = null) {
			$this->txtAddress1 = new QTextBox($this->objParentObject, $strControlId);
			$this->txtAddress1->Name = QApplication::Translate('Address 1');
			$this->txtAddress1->Text = $this->objAddress->Address1;
			$this->txtAddress1->MaxLength = Address::Address1MaxLength;
			return $this->txtAddress1;
		}

		/**
		 * Create and setup QLabel lblAddress1
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblAddress1_Create($strControlId = null) {
			$this->lblAddress1 = new QLabel($this->objParentObject, $strControlId);
			$this->lblAddress1->Name = QApplication::Translate('Address 1');
			$this->lblAddress1->Text = $this->objAddress->Address1;
			return $this->lblAddress1;
		}

		/**
		 * Create and setup QTextBox txtAddress2
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtAddress2_Create($strControlId = null) {
			$this->txtAddress2 = new QTextBox($this->objParentObject, $strControlId);
			$this->txtAddress2->Name = QApplication::Translate('Address 2');
			$this->txtAddress2->Text = $this->objAddress->Address2;
			$this->txtAddress2->MaxLength = Address::Address2MaxLength;
			return $this->txtAddress2;
		}

		/**
		 * Create and setup QLabel lblAddress2
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblAddress2_Create($strControlId = null) {
			$this->lblAddress2 = new QLabel($this->objParentObject, $strControlId);
			$this->lblAddress2->Name = QApplication::Translate('Address 2');
			$this->lblAddress2->Text = $this->objAddress->Address2;
			return $this->lblAddress2;
		}

		/**
		 * Create and setup QTextBox txtAddress3
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtAddress3_Create($strControlId = null) {
			$this->txtAddress3 = new QTextBox($this->objParentObject, $strControlId);
			$this->txtAddress3->Name = QApplication::Translate('Address 3');
			$this->txtAddress3->Text = $this->objAddress->Address3;
			$this->txtAddress3->MaxLength = Address::Address3MaxLength;
			return $this->txtAddress3;
		}

		/**
		 * Create and setup QLabel lblAddress3
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblAddress3_Create($strControlId = null) {
			$this->lblAddress3 = new QLabel($this->objParentObject, $strControlId);
			$this->lblAddress3->Name = QApplication::Translate('Address 3');
			$this->lblAddress3->Text = $this->objAddress->Address3;
			return $this->lblAddress3;
		}

		/**
		 * Create and setup QTextBox txtCity
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtCity_Create($strControlId = null) {
			$this->txtCity = new QTextBox($this->objParentObject, $strControlId);
			$this->txtCity->Name = QApplication::Translate('City');
			$this->txtCity->Text = $this->objAddress->City;
			$this->txtCity->MaxLength = Address::CityMaxLength;
			return $this->txtCity;
		}

		/**
		 * Create and setup QLabel lblCity
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblCity_Create($strControlId = null) {
			$this->lblCity = new QLabel($this->objParentObject, $strControlId);
			$this->lblCity->Name = QApplication::Translate('City');
			$this->lblCity->Text = $this->objAddress->City;
			return $this->lblCity;
		}

		/**
		 * Create and setup QTextBox txtState
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtState_Create($strControlId = null) {
			$this->txtState = new QTextBox($this->objParentObject, $strControlId);
			$this->txtState->Name = QApplication::Translate('State');
			$this->txtState->Text = $this->objAddress->State;
			$this->txtState->MaxLength = Address::StateMaxLength;
			return $this->txtState;
		}

		/**
		 * Create and setup QLabel lblState
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblState_Create($strControlId = null) {
			$this->lblState = new QLabel($this->objParentObject, $strControlId);
			$this->lblState->Name = QApplication::Translate('State');
			$this->lblState->Text = $this->objAddress->State;
			return $this->lblState;
		}

		/**
		 * Create and setup QTextBox txtZipcode
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtZipcode_Create($strControlId = null) {
			$this->txtZipcode = new QTextBox($this->objParentObject, $strControlId);
			$this->txtZipcode->Name = QApplication::Translate('Zipcode');
			$this->txtZipcode->Text = $this->objAddress->Zipcode;
			$this->txtZipcode->MaxLength = Address::ZipcodeMaxLength;
			return $this->txtZipcode;
		}

		/**
		 * Create and setup QLabel lblZipcode
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblZipcode_Create($strControlId = null) {
			$this->lblZipcode = new QLabel($this->objParentObject, $strControlId);
			$this->lblZipcode->Name = QApplication::Translate('Zipcode');
			$this->lblZipcode->Text = $this->objAddress->Zipcode;
			return $this->lblZipcode;
		}

		/**
		 * Create and setup QTextBox txtCountry
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtCountry_Create($strControlId = null) {
			$this->txtCountry = new QTextBox($this->objParentObject, $strControlId);
			$this->txtCountry->Name = QApplication::Translate('Country');
			$this->txtCountry->Text = $this->objAddress->Country;
			$this->txtCountry->MaxLength = Address::CountryMaxLength;
			return $this->txtCountry;
		}

		/**
		 * Create and setup QLabel lblCountry
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblCountry_Create($strControlId = null) {
			$this->lblCountry = new QLabel($this->objParentObject, $strControlId);
			$this->lblCountry->Name = QApplication::Translate('Country');
			$this->lblCountry->Text = $this->objAddress->Country;
			return $this->lblCountry;
		}

		/**
		 * Create and setup QListBox lstPerson
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstPerson_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstPerson = new QListBox($this->objParentObject, $strControlId);
			$this->lstPerson->Name = QApplication::Translate('Person');
			$this->lstPerson->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objPersonCursor = Person::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objPerson = Person::InstantiateCursor($objPersonCursor)) {
				$objListItem = new QListItem($objPerson->__toString(), $objPerson->VictimWitnessNum);
				if (($this->objAddress->Person) && ($this->objAddress->Person->VictimWitnessNum == $objPerson->VictimWitnessNum))
					$objListItem->Selected = true;
				$this->lstPerson->AddItem($objListItem);
			}

			// Return the QListBox
			return $this->lstPerson;
		}

		/**
		 * Create and setup QLabel lblPersonId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblPersonId_Create($strControlId = null) {
			$this->lblPersonId = new QLabel($this->objParentObject, $strControlId);
			$this->lblPersonId->Name = QApplication::Translate('Person');
			$this->lblPersonId->Text = ($this->objAddress->Person) ? $this->objAddress->Person->__toString() : null;
			return $this->lblPersonId;
		}



		/**
		 * Refresh this MetaControl with Data from the local Address object.
		 * @param boolean $blnReload reload Address from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objAddress->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objAddress->Id;

			if ($this->txtAddress1) $this->txtAddress1->Text = $this->objAddress->Address1;
			if ($this->lblAddress1) $this->lblAddress1->Text = $this->objAddress->Address1;

			if ($this->txtAddress2) $this->txtAddress2->Text = $this->objAddress->Address2;
			if ($this->lblAddress2) $this->lblAddress2->Text = $this->objAddress->Address2;

			if ($this->txtAddress3) $this->txtAddress3->Text = $this->objAddress->Address3;
			if ($this->lblAddress3) $this->lblAddress3->Text = $this->objAddress->Address3;

			if ($this->txtCity) $this->txtCity->Text = $this->objAddress->City;
			if ($this->lblCity) $this->lblCity->Text = $this->objAddress->City;

			if ($this->txtState) $this->txtState->Text = $this->objAddress->State;
			if ($this->lblState) $this->lblState->Text = $this->objAddress->State;

			if ($this->txtZipcode) $this->txtZipcode->Text = $this->objAddress->Zipcode;
			if ($this->lblZipcode) $this->lblZipcode->Text = $this->objAddress->Zipcode;

			if ($this->txtCountry) $this->txtCountry->Text = $this->objAddress->Country;
			if ($this->lblCountry) $this->lblCountry->Text = $this->objAddress->Country;

			if ($this->lstPerson) {
					$this->lstPerson->RemoveAllItems();
				$this->lstPerson->AddItem(QApplication::Translate('- Select One -'), null);
				$objPersonArray = Person::LoadAll();
				if ($objPersonArray) foreach ($objPersonArray as $objPerson) {
					$objListItem = new QListItem($objPerson->__toString(), $objPerson->VictimWitnessNum);
					if (($this->objAddress->Person) && ($this->objAddress->Person->VictimWitnessNum == $objPerson->VictimWitnessNum))
						$objListItem->Selected = true;
					$this->lstPerson->AddItem($objListItem);
				}
			}
			if ($this->lblPersonId) $this->lblPersonId->Text = ($this->objAddress->Person) ? $this->objAddress->Person->__toString() : null;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC ADDRESS OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Address instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveAddress() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtAddress1) $this->objAddress->Address1 = $this->txtAddress1->Text;
				if ($this->txtAddress2) $this->objAddress->Address2 = $this->txtAddress2->Text;
				if ($this->txtAddress3) $this->objAddress->Address3 = $this->txtAddress3->Text;
				if ($this->txtCity) $this->objAddress->City = $this->txtCity->Text;
				if ($this->txtState) $this->objAddress->State = $this->txtState->Text;
				if ($this->txtZipcode) $this->objAddress->Zipcode = $this->txtZipcode->Text;
				if ($this->txtCountry) $this->objAddress->Country = $this->txtCountry->Text;
				if ($this->lstPerson) $this->objAddress->PersonId = $this->lstPerson->SelectedValue;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Address object
				$this->objAddress->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Address instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteAddress() {
			$this->objAddress->Delete();
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
				case 'Address': return $this->objAddress;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Address fields -- will be created dynamically if not yet created
				case 'IdControl':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'IdLabel':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'Address1Control':
					if (!$this->txtAddress1) return $this->txtAddress1_Create();
					return $this->txtAddress1;
				case 'Address1Label':
					if (!$this->lblAddress1) return $this->lblAddress1_Create();
					return $this->lblAddress1;
				case 'Address2Control':
					if (!$this->txtAddress2) return $this->txtAddress2_Create();
					return $this->txtAddress2;
				case 'Address2Label':
					if (!$this->lblAddress2) return $this->lblAddress2_Create();
					return $this->lblAddress2;
				case 'Address3Control':
					if (!$this->txtAddress3) return $this->txtAddress3_Create();
					return $this->txtAddress3;
				case 'Address3Label':
					if (!$this->lblAddress3) return $this->lblAddress3_Create();
					return $this->lblAddress3;
				case 'CityControl':
					if (!$this->txtCity) return $this->txtCity_Create();
					return $this->txtCity;
				case 'CityLabel':
					if (!$this->lblCity) return $this->lblCity_Create();
					return $this->lblCity;
				case 'StateControl':
					if (!$this->txtState) return $this->txtState_Create();
					return $this->txtState;
				case 'StateLabel':
					if (!$this->lblState) return $this->lblState_Create();
					return $this->lblState;
				case 'ZipcodeControl':
					if (!$this->txtZipcode) return $this->txtZipcode_Create();
					return $this->txtZipcode;
				case 'ZipcodeLabel':
					if (!$this->lblZipcode) return $this->lblZipcode_Create();
					return $this->lblZipcode;
				case 'CountryControl':
					if (!$this->txtCountry) return $this->txtCountry_Create();
					return $this->txtCountry;
				case 'CountryLabel':
					if (!$this->lblCountry) return $this->lblCountry_Create();
					return $this->lblCountry;
				case 'PersonIdControl':
					if (!$this->lstPerson) return $this->lstPerson_Create();
					return $this->lstPerson;
				case 'PersonIdLabel':
					if (!$this->lblPersonId) return $this->lblPersonId_Create();
					return $this->lblPersonId;
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
					// Controls that point to Address fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'Address1Control':
						return ($this->txtAddress1 = QType::Cast($mixValue, 'QControl'));
					case 'Address2Control':
						return ($this->txtAddress2 = QType::Cast($mixValue, 'QControl'));
					case 'Address3Control':
						return ($this->txtAddress3 = QType::Cast($mixValue, 'QControl'));
					case 'CityControl':
						return ($this->txtCity = QType::Cast($mixValue, 'QControl'));
					case 'StateControl':
						return ($this->txtState = QType::Cast($mixValue, 'QControl'));
					case 'ZipcodeControl':
						return ($this->txtZipcode = QType::Cast($mixValue, 'QControl'));
					case 'CountryControl':
						return ($this->txtCountry = QType::Cast($mixValue, 'QControl'));
					case 'PersonIdControl':
						return ($this->lstPerson = QType::Cast($mixValue, 'QControl'));
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