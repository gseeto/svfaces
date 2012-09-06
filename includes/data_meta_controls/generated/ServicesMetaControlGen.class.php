<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Services class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Services object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a ServicesMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read Services $Services the actual Services data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QListBox $ServicesTypeIdControl
	 * property-read QLabel $ServicesTypeIdLabel
	 * property QListBox $PersonIdControl
	 * property-read QLabel $PersonIdLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class ServicesMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var Services objServices
		 * @access protected
		 */
		protected $objServices;

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

		// Controls that allow the editing of Services's individual data fields
        /**
         * @var QLabel lblId;
         * @access protected
         */
		protected $lblId;

        /**
         * @var QListBox lstServicesType;
         * @access protected
         */
		protected $lstServicesType;

        /**
         * @var QListBox lstPerson;
         * @access protected
         */
		protected $lstPerson;


		// Controls that allow the viewing of Services's individual data fields
        /**
         * @var QLabel lblServicesTypeId
         * @access protected
         */
		protected $lblServicesTypeId;

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
		 * ServicesMetaControl to edit a single Services object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Services object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ServicesMetaControl
		 * @param Services $objServices new or existing Services object
		 */
		 public function __construct($objParentObject, Services $objServices) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this ServicesMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Services object
			$this->objServices = $objServices;

			// Figure out if we're Editing or Creating New
			if ($this->objServices->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this ServicesMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Services object creation - defaults to CreateOrEdit
 		 * @return ServicesMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objServices = Services::Load($intId);

				// Services was found -- return it!
				if ($objServices)
					return new ServicesMetaControl($objParentObject, $objServices);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Services object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new ServicesMetaControl($objParentObject, new Services());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ServicesMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Services object creation - defaults to CreateOrEdit
		 * @return ServicesMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return ServicesMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ServicesMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Services object creation - defaults to CreateOrEdit
		 * @return ServicesMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return ServicesMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objServices->Id;
			else
				$this->lblId->Text = 'N/A';
			return $this->lblId;
		}

		/**
		 * Create and setup QListBox lstServicesType
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstServicesType_Create($strControlId = null) {
			$this->lstServicesType = new QListBox($this->objParentObject, $strControlId);
			$this->lstServicesType->Name = QApplication::Translate('Services Type');
			$this->lstServicesType->AddItem(QApplication::Translate('- Select One -'), null);

			$this->lstServicesType->AddItems(ServiceType::$NameArray, $this->objServices->ServicesTypeId);
			return $this->lstServicesType;
		}

		/**
		 * Create and setup QLabel lblServicesTypeId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblServicesTypeId_Create($strControlId = null) {
			$this->lblServicesTypeId = new QLabel($this->objParentObject, $strControlId);
			$this->lblServicesTypeId->Name = QApplication::Translate('Services Type');
			$this->lblServicesTypeId->Text = ($this->objServices->ServicesTypeId) ? ServiceType::$NameArray[$this->objServices->ServicesTypeId] : null;
			return $this->lblServicesTypeId;
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
				if (($this->objServices->Person) && ($this->objServices->Person->VictimWitnessNum == $objPerson->VictimWitnessNum))
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
			$this->lblPersonId->Text = ($this->objServices->Person) ? $this->objServices->Person->__toString() : null;
			return $this->lblPersonId;
		}



		/**
		 * Refresh this MetaControl with Data from the local Services object.
		 * @param boolean $blnReload reload Services from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objServices->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objServices->Id;

			if ($this->lstServicesType) $this->lstServicesType->SelectedValue = $this->objServices->ServicesTypeId;
			if ($this->lblServicesTypeId) $this->lblServicesTypeId->Text = ($this->objServices->ServicesTypeId) ? ServiceType::$NameArray[$this->objServices->ServicesTypeId] : null;

			if ($this->lstPerson) {
					$this->lstPerson->RemoveAllItems();
				$this->lstPerson->AddItem(QApplication::Translate('- Select One -'), null);
				$objPersonArray = Person::LoadAll();
				if ($objPersonArray) foreach ($objPersonArray as $objPerson) {
					$objListItem = new QListItem($objPerson->__toString(), $objPerson->VictimWitnessNum);
					if (($this->objServices->Person) && ($this->objServices->Person->VictimWitnessNum == $objPerson->VictimWitnessNum))
						$objListItem->Selected = true;
					$this->lstPerson->AddItem($objListItem);
				}
			}
			if ($this->lblPersonId) $this->lblPersonId->Text = ($this->objServices->Person) ? $this->objServices->Person->__toString() : null;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC SERVICES OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Services instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveServices() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstServicesType) $this->objServices->ServicesTypeId = $this->lstServicesType->SelectedValue;
				if ($this->lstPerson) $this->objServices->PersonId = $this->lstPerson->SelectedValue;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Services object
				$this->objServices->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Services instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteServices() {
			$this->objServices->Delete();
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
				case 'Services': return $this->objServices;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Services fields -- will be created dynamically if not yet created
				case 'IdControl':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'IdLabel':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'ServicesTypeIdControl':
					if (!$this->lstServicesType) return $this->lstServicesType_Create();
					return $this->lstServicesType;
				case 'ServicesTypeIdLabel':
					if (!$this->lblServicesTypeId) return $this->lblServicesTypeId_Create();
					return $this->lblServicesTypeId;
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
					// Controls that point to Services fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'ServicesTypeIdControl':
						return ($this->lstServicesType = QType::Cast($mixValue, 'QControl'));
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