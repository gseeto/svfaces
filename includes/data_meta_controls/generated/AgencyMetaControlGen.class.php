<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Agency class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Agency object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a AgencyMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read Agency $Agency the actual Agency data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QTextBox $NameControl
	 * property-read QLabel $NameLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class AgencyMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var Agency objAgency
		 * @access protected
		 */
		protected $objAgency;

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

		// Controls that allow the editing of Agency's individual data fields
        /**
         * @var QLabel lblId;
         * @access protected
         */
		protected $lblId;

        /**
         * @var QTextBox txtName;
         * @access protected
         */
		protected $txtName;


		// Controls that allow the viewing of Agency's individual data fields
        /**
         * @var QLabel lblName
         * @access protected
         */
		protected $lblName;


		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * AgencyMetaControl to edit a single Agency object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Agency object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this AgencyMetaControl
		 * @param Agency $objAgency new or existing Agency object
		 */
		 public function __construct($objParentObject, Agency $objAgency) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this AgencyMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Agency object
			$this->objAgency = $objAgency;

			// Figure out if we're Editing or Creating New
			if ($this->objAgency->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this AgencyMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Agency object creation - defaults to CreateOrEdit
 		 * @return AgencyMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objAgency = Agency::Load($intId);

				// Agency was found -- return it!
				if ($objAgency)
					return new AgencyMetaControl($objParentObject, $objAgency);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Agency object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new AgencyMetaControl($objParentObject, new Agency());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this AgencyMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Agency object creation - defaults to CreateOrEdit
		 * @return AgencyMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return AgencyMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this AgencyMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Agency object creation - defaults to CreateOrEdit
		 * @return AgencyMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return AgencyMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objAgency->Id;
			else
				$this->lblId->Text = 'N/A';
			return $this->lblId;
		}

		/**
		 * Create and setup QTextBox txtName
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtName_Create($strControlId = null) {
			$this->txtName = new QTextBox($this->objParentObject, $strControlId);
			$this->txtName->Name = QApplication::Translate('Name');
			$this->txtName->Text = $this->objAgency->Name;
			$this->txtName->MaxLength = Agency::NameMaxLength;
			return $this->txtName;
		}

		/**
		 * Create and setup QLabel lblName
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblName_Create($strControlId = null) {
			$this->lblName = new QLabel($this->objParentObject, $strControlId);
			$this->lblName->Name = QApplication::Translate('Name');
			$this->lblName->Text = $this->objAgency->Name;
			return $this->lblName;
		}



		/**
		 * Refresh this MetaControl with Data from the local Agency object.
		 * @param boolean $blnReload reload Agency from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objAgency->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objAgency->Id;

			if ($this->txtName) $this->txtName->Text = $this->objAgency->Name;
			if ($this->lblName) $this->lblName->Text = $this->objAgency->Name;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC AGENCY OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Agency instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveAgency() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtName) $this->objAgency->Name = $this->txtName->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Agency object
				$this->objAgency->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Agency instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteAgency() {
			$this->objAgency->Delete();
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
				case 'Agency': return $this->objAgency;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Agency fields -- will be created dynamically if not yet created
				case 'IdControl':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'IdLabel':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'NameControl':
					if (!$this->txtName) return $this->txtName_Create();
					return $this->txtName;
				case 'NameLabel':
					if (!$this->lblName) return $this->lblName_Create();
					return $this->lblName;
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
					// Controls that point to Agency fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'NameControl':
						return ($this->txtName = QType::Cast($mixValue, 'QControl'));
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