<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the CourtInformation class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single CourtInformation object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a CourtInformationMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read CourtInformation $CourtInformation the actual CourtInformation data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QTextBox $InformationControl
	 * property-read QLabel $InformationLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class CourtInformationMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var CourtInformation objCourtInformation
		 * @access protected
		 */
		protected $objCourtInformation;

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

		// Controls that allow the editing of CourtInformation's individual data fields
        /**
         * @var QLabel lblId;
         * @access protected
         */
		protected $lblId;

        /**
         * @var QTextBox txtInformation;
         * @access protected
         */
		protected $txtInformation;


		// Controls that allow the viewing of CourtInformation's individual data fields
        /**
         * @var QLabel lblInformation
         * @access protected
         */
		protected $lblInformation;


		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * CourtInformationMetaControl to edit a single CourtInformation object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single CourtInformation object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this CourtInformationMetaControl
		 * @param CourtInformation $objCourtInformation new or existing CourtInformation object
		 */
		 public function __construct($objParentObject, CourtInformation $objCourtInformation) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this CourtInformationMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked CourtInformation object
			$this->objCourtInformation = $objCourtInformation;

			// Figure out if we're Editing or Creating New
			if ($this->objCourtInformation->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this CourtInformationMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing CourtInformation object creation - defaults to CreateOrEdit
 		 * @return CourtInformationMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objCourtInformation = CourtInformation::Load($intId);

				// CourtInformation was found -- return it!
				if ($objCourtInformation)
					return new CourtInformationMetaControl($objParentObject, $objCourtInformation);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a CourtInformation object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new CourtInformationMetaControl($objParentObject, new CourtInformation());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this CourtInformationMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing CourtInformation object creation - defaults to CreateOrEdit
		 * @return CourtInformationMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return CourtInformationMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this CourtInformationMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing CourtInformation object creation - defaults to CreateOrEdit
		 * @return CourtInformationMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return CourtInformationMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objCourtInformation->Id;
			else
				$this->lblId->Text = 'N/A';
			return $this->lblId;
		}

		/**
		 * Create and setup QTextBox txtInformation
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtInformation_Create($strControlId = null) {
			$this->txtInformation = new QTextBox($this->objParentObject, $strControlId);
			$this->txtInformation->Name = QApplication::Translate('Information');
			$this->txtInformation->Text = $this->objCourtInformation->Information;
			$this->txtInformation->MaxLength = CourtInformation::InformationMaxLength;
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
			$this->lblInformation->Text = $this->objCourtInformation->Information;
			return $this->lblInformation;
		}



		/**
		 * Refresh this MetaControl with Data from the local CourtInformation object.
		 * @param boolean $blnReload reload CourtInformation from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objCourtInformation->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objCourtInformation->Id;

			if ($this->txtInformation) $this->txtInformation->Text = $this->objCourtInformation->Information;
			if ($this->lblInformation) $this->lblInformation->Text = $this->objCourtInformation->Information;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC COURTINFORMATION OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's CourtInformation instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveCourtInformation() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtInformation) $this->objCourtInformation->Information = $this->txtInformation->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the CourtInformation object
				$this->objCourtInformation->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's CourtInformation instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteCourtInformation() {
			$this->objCourtInformation->Delete();
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
				case 'CourtInformation': return $this->objCourtInformation;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to CourtInformation fields -- will be created dynamically if not yet created
				case 'IdControl':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'IdLabel':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'InformationControl':
					if (!$this->txtInformation) return $this->txtInformation_Create();
					return $this->txtInformation;
				case 'InformationLabel':
					if (!$this->lblInformation) return $this->lblInformation_Create();
					return $this->lblInformation;
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
					// Controls that point to CourtInformation fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'InformationControl':
						return ($this->txtInformation = QType::Cast($mixValue, 'QControl'));
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