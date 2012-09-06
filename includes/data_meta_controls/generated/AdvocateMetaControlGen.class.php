<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Advocate class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Advocate object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a AdvocateMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My Application
	 * @subpackage MetaControls
	 * property-read Advocate $Advocate the actual Advocate data class being edited
	 * property QLabel $IdControl
	 * property-read QLabel $IdLabel
	 * property QListBox $LoginIdControl
	 * property-read QLabel $LoginIdLabel
	 * property QListBox $GrantIdControl
	 * property-read QLabel $GrantIdLabel
	 * property QListBox $CasesAsCaseControl
	 * property-read QLabel $CasesAsCaseLabel
	 * property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class AdvocateMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var Advocate objAdvocate
		 * @access protected
		 */
		protected $objAdvocate;

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

		// Controls that allow the editing of Advocate's individual data fields
        /**
         * @var QLabel lblId;
         * @access protected
         */
		protected $lblId;

        /**
         * @var QListBox lstLogin;
         * @access protected
         */
		protected $lstLogin;

        /**
         * @var QListBox lstGrant;
         * @access protected
         */
		protected $lstGrant;


		// Controls that allow the viewing of Advocate's individual data fields
        /**
         * @var QLabel lblLoginId
         * @access protected
         */
		protected $lblLoginId;

        /**
         * @var QLabel lblGrantId
         * @access protected
         */
		protected $lblGrantId;


		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References
		protected $lstCasesesAsCase;


		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References
		protected $lblCasesesAsCase;



		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * AdvocateMetaControl to edit a single Advocate object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Advocate object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this AdvocateMetaControl
		 * @param Advocate $objAdvocate new or existing Advocate object
		 */
		 public function __construct($objParentObject, Advocate $objAdvocate) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this AdvocateMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Advocate object
			$this->objAdvocate = $objAdvocate;

			// Figure out if we're Editing or Creating New
			if ($this->objAdvocate->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this AdvocateMetaControl
		 * @param integer $intId primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Advocate object creation - defaults to CreateOrEdit
 		 * @return AdvocateMetaControl
		 */
		public static function Create($objParentObject, $intId = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intId)) {
				$objAdvocate = Advocate::Load($intId);

				// Advocate was found -- return it!
				if ($objAdvocate)
					return new AdvocateMetaControl($objParentObject, $objAdvocate);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Advocate object with PK arguments: ' . $intId);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new AdvocateMetaControl($objParentObject, new Advocate());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this AdvocateMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Advocate object creation - defaults to CreateOrEdit
		 * @return AdvocateMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::PathInfo(0);
			return AdvocateMetaControl::Create($objParentObject, $intId, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this AdvocateMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Advocate object creation - defaults to CreateOrEdit
		 * @return AdvocateMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intId = QApplication::QueryString('intId');
			return AdvocateMetaControl::Create($objParentObject, $intId, $intCreateType);
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
				$this->lblId->Text = $this->objAdvocate->Id;
			else
				$this->lblId->Text = 'N/A';
			return $this->lblId;
		}

		/**
		 * Create and setup QListBox lstLogin
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstLogin_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstLogin = new QListBox($this->objParentObject, $strControlId);
			$this->lstLogin->Name = QApplication::Translate('Login');
			$this->lstLogin->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objLoginCursor = Login::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objLogin = Login::InstantiateCursor($objLoginCursor)) {
				$objListItem = new QListItem($objLogin->__toString(), $objLogin->Id);
				if (($this->objAdvocate->Login) && ($this->objAdvocate->Login->Id == $objLogin->Id))
					$objListItem->Selected = true;
				$this->lstLogin->AddItem($objListItem);
			}

			// Return the QListBox
			return $this->lstLogin;
		}

		/**
		 * Create and setup QLabel lblLoginId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblLoginId_Create($strControlId = null) {
			$this->lblLoginId = new QLabel($this->objParentObject, $strControlId);
			$this->lblLoginId->Name = QApplication::Translate('Login');
			$this->lblLoginId->Text = ($this->objAdvocate->Login) ? $this->objAdvocate->Login->__toString() : null;
			return $this->lblLoginId;
		}

		/**
		 * Create and setup QListBox lstGrant
		 * @param string $strControlId optional ControlId to use
		 * @param QQCondition $objConditions override the default condition of QQ::All() to the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for the query
		 * @return QListBox
		 */
		public function lstGrant_Create($strControlId = null, QQCondition $objCondition = null, $objOptionalClauses = null) {
			$this->lstGrant = new QListBox($this->objParentObject, $strControlId);
			$this->lstGrant->Name = QApplication::Translate('Grant');
			$this->lstGrant->AddItem(QApplication::Translate('- Select One -'), null);

			// Setup and perform the Query
			if (is_null($objCondition)) $objCondition = QQ::All();
			$objGrantCursor = Grant::QueryCursor($objCondition, $objOptionalClauses);

			// Iterate through the Cursor
			while ($objGrant = Grant::InstantiateCursor($objGrantCursor)) {
				$objListItem = new QListItem($objGrant->__toString(), $objGrant->Id);
				if (($this->objAdvocate->Grant) && ($this->objAdvocate->Grant->Id == $objGrant->Id))
					$objListItem->Selected = true;
				$this->lstGrant->AddItem($objListItem);
			}

			// Return the QListBox
			return $this->lstGrant;
		}

		/**
		 * Create and setup QLabel lblGrantId
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblGrantId_Create($strControlId = null) {
			$this->lblGrantId = new QLabel($this->objParentObject, $strControlId);
			$this->lblGrantId->Name = QApplication::Translate('Grant');
			$this->lblGrantId->Text = ($this->objAdvocate->Grant) ? $this->objAdvocate->Grant->__toString() : null;
			return $this->lblGrantId;
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
			$objAssociatedArray = $this->objAdvocate->GetCasesAsCaseArray();

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
			
			$objAssociatedArray = $this->objAdvocate->GetCasesAsCaseArray();
			$strItems = array();
			foreach ($objAssociatedArray as $objAssociated)
				$strItems[] = $objAssociated->__toString();
			$this->lblCasesesAsCase->Text = implode($strGlue, $strItems);
			return $this->lblCasesesAsCase;
		}



		/**
		 * Refresh this MetaControl with Data from the local Advocate object.
		 * @param boolean $blnReload reload Advocate from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objAdvocate->Reload();

			if ($this->lblId) if ($this->blnEditMode) $this->lblId->Text = $this->objAdvocate->Id;

			if ($this->lstLogin) {
					$this->lstLogin->RemoveAllItems();
				$this->lstLogin->AddItem(QApplication::Translate('- Select One -'), null);
				$objLoginArray = Login::LoadAll();
				if ($objLoginArray) foreach ($objLoginArray as $objLogin) {
					$objListItem = new QListItem($objLogin->__toString(), $objLogin->Id);
					if (($this->objAdvocate->Login) && ($this->objAdvocate->Login->Id == $objLogin->Id))
						$objListItem->Selected = true;
					$this->lstLogin->AddItem($objListItem);
				}
			}
			if ($this->lblLoginId) $this->lblLoginId->Text = ($this->objAdvocate->Login) ? $this->objAdvocate->Login->__toString() : null;

			if ($this->lstGrant) {
					$this->lstGrant->RemoveAllItems();
				$this->lstGrant->AddItem(QApplication::Translate('- Select One -'), null);
				$objGrantArray = Grant::LoadAll();
				if ($objGrantArray) foreach ($objGrantArray as $objGrant) {
					$objListItem = new QListItem($objGrant->__toString(), $objGrant->Id);
					if (($this->objAdvocate->Grant) && ($this->objAdvocate->Grant->Id == $objGrant->Id))
						$objListItem->Selected = true;
					$this->lstGrant->AddItem($objListItem);
				}
			}
			if ($this->lblGrantId) $this->lblGrantId->Text = ($this->objAdvocate->Grant) ? $this->objAdvocate->Grant->__toString() : null;

			if ($this->lstCasesesAsCase) {
				$this->lstCasesesAsCase->RemoveAllItems();
				$objAssociatedArray = $this->objAdvocate->GetCasesAsCaseArray();
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
				$objAssociatedArray = $this->objAdvocate->GetCasesAsCaseArray();
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
				$this->objAdvocate->UnassociateAllCasesesAsCase();
				$objSelectedListItems = $this->lstCasesesAsCase->SelectedItems;
				if ($objSelectedListItems) foreach ($objSelectedListItems as $objListItem) {
					$this->objAdvocate->AssociateCasesAsCase(Cases::Load($objListItem->Value));
				}
			}
		}





		///////////////////////////////////////////////
		// PUBLIC ADVOCATE OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Advocate instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveAdvocate() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstLogin) $this->objAdvocate->LoginId = $this->lstLogin->SelectedValue;
				if ($this->lstGrant) $this->objAdvocate->GrantId = $this->lstGrant->SelectedValue;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Advocate object
				$this->objAdvocate->Save();

				// Finally, update any ManyToManyReferences (if any)
				$this->lstCasesesAsCase_Update();
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Advocate instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteAdvocate() {
			$this->objAdvocate->UnassociateAllCasesesAsCase();
			$this->objAdvocate->Delete();
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
				case 'Advocate': return $this->objAdvocate;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Advocate fields -- will be created dynamically if not yet created
				case 'IdControl':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'IdLabel':
					if (!$this->lblId) return $this->lblId_Create();
					return $this->lblId;
				case 'LoginIdControl':
					if (!$this->lstLogin) return $this->lstLogin_Create();
					return $this->lstLogin;
				case 'LoginIdLabel':
					if (!$this->lblLoginId) return $this->lblLoginId_Create();
					return $this->lblLoginId;
				case 'GrantIdControl':
					if (!$this->lstGrant) return $this->lstGrant_Create();
					return $this->lstGrant;
				case 'GrantIdLabel':
					if (!$this->lblGrantId) return $this->lblGrantId_Create();
					return $this->lblGrantId;
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
					// Controls that point to Advocate fields
					case 'IdControl':
						return ($this->lblId = QType::Cast($mixValue, 'QControl'));
					case 'LoginIdControl':
						return ($this->lstLogin = QType::Cast($mixValue, 'QControl'));
					case 'GrantIdControl':
						return ($this->lstGrant = QType::Cast($mixValue, 'QControl'));
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