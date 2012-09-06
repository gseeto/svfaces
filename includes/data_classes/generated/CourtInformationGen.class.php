<?php
	/**
	 * The abstract CourtInformationGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the CourtInformation subclass which
	 * extends this CourtInformationGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the CourtInformation class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $Id the value for intId (Read-Only PK)
	 * @property string $Information the value for strInformation 
	 * @property Cases $_CasesAsCourt the value for the private _objCasesAsCourt (Read-Only) if set due to an expansion on the cases.court_id reverse relationship
	 * @property Cases[] $_CasesAsCourtArray the value for the private _objCasesAsCourtArray (Read-Only) if set due to an ExpandAsArray on the cases.court_id reverse relationship
	 * @property boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class CourtInformationGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column court_information.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column court_information.information
		 * @var string strInformation
		 */
		protected $strInformation;
		const InformationMaxLength = 1024;
		const InformationDefault = null;


		/**
		 * Private member variable that stores a reference to a single CasesAsCourt object
		 * (of type Cases), if this CourtInformation object was restored with
		 * an expansion on the cases association table.
		 * @var Cases _objCasesAsCourt;
		 */
		private $_objCasesAsCourt;

		/**
		 * Private member variable that stores a reference to an array of CasesAsCourt objects
		 * (of type Cases[]), if this CourtInformation object was restored with
		 * an ExpandAsArray on the cases association table.
		 * @var Cases[] _objCasesAsCourtArray;
		 */
		private $_objCasesAsCourtArray = array();

		/**
		 * Protected array of virtual attributes for this object (e.g. extra/other calculated and/or non-object bound
		 * columns from the run-time database query result for this object).  Used by InstantiateDbRow and
		 * GetVirtualAttribute.
		 * @var string[] $__strVirtualAttributeArray
		 */
		protected $__strVirtualAttributeArray = array();

		/**
		 * Protected internal member variable that specifies whether or not this object is Restored from the database.
		 * Used by Save() to determine if Save() should perform a db UPDATE or INSERT.
		 * @var bool __blnRestored;
		 */
		protected $__blnRestored;




		///////////////////////////////
		// PROTECTED MEMBER OBJECTS
		///////////////////////////////





		///////////////////////////////
		// CLASS-WIDE LOAD AND COUNT METHODS
		///////////////////////////////

		/**
		 * Static method to retrieve the Database object that owns this class.
		 * @return QDatabaseBase reference to the Database object that can query this class
		 */
		public static function GetDatabase() {
			return QApplication::$Database[1];
		}

		/**
		 * Load a CourtInformation from PK Info
		 * @param integer $intId
		 * @return CourtInformation
		 */
		public static function Load($intId) {
			// Use QuerySingle to Perform the Query
			return CourtInformation::QuerySingle(
				QQ::Equal(QQN::CourtInformation()->Id, $intId)
			);
		}

		/**
		 * Load all CourtInformations
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CourtInformation[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call CourtInformation::QueryArray to perform the LoadAll query
			try {
				return CourtInformation::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all CourtInformations
		 * @return int
		 */
		public static function CountAll() {
			// Call CourtInformation::QueryCount to perform the CountAll query
			return CourtInformation::QueryCount(QQ::All());
		}




		///////////////////////////////
		// QCODO QUERY-RELATED METHODS
		///////////////////////////////

		/**
		 * Internally called method to assist with calling Qcodo Query for this class
		 * on load methods.
		 * @param QQueryBuilder &$objQueryBuilder the QueryBuilder object that will be created
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause object or array of QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with (sending in null will skip the PrepareStatement step)
		 * @param boolean $blnCountOnly only select a rowcount
		 * @return string the query statement
		 */
		protected static function BuildQueryStatement(&$objQueryBuilder, QQCondition $objConditions, $objOptionalClauses, $mixParameterArray, $blnCountOnly) {
			// Get the Database Object for this Class
			$objDatabase = CourtInformation::GetDatabase();

			// Create/Build out the QueryBuilder object with CourtInformation-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'court_information');
			CourtInformation::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('court_information');

			// Set "CountOnly" option (if applicable)
			if ($blnCountOnly)
				$objQueryBuilder->SetCountOnlyFlag();

			// Apply Any Conditions
			if ($objConditions)
				try {
					$objConditions->UpdateQueryBuilder($objQueryBuilder);
				} catch (QCallerException $objExc) {
					$objExc->IncrementOffset();
					throw $objExc;
				}

			// Iterate through all the Optional Clauses (if any) and perform accordingly
			if ($objOptionalClauses) {
				if ($objOptionalClauses instanceof QQClause)
					$objOptionalClauses->UpdateQueryBuilder($objQueryBuilder);
				else if (is_array($objOptionalClauses))
					foreach ($objOptionalClauses as $objClause)
						$objClause->UpdateQueryBuilder($objQueryBuilder);
				else
					throw new QCallerException('Optional Clauses must be a QQClause object or an array of QQClause objects');
			}

			// Get the SQL Statement
			$strQuery = $objQueryBuilder->GetStatement();

			// Prepare the Statement with the Query Parameters (if applicable)
			if ($mixParameterArray) {
				if (is_array($mixParameterArray)) {
					if (count($mixParameterArray))
						$strQuery = $objDatabase->PrepareStatement($strQuery, $mixParameterArray);

					// Ensure that there are no other Unresolved Named Parameters
					if (strpos($strQuery, chr(QQNamedValue::DelimiterCode) . '{') !== false)
						throw new QCallerException('Unresolved named parameters in the query');
				} else
					throw new QCallerException('Parameter Array must be an array of name-value parameter pairs');
			}

			// Return the Objects
			return $strQuery;
		}

		/**
		 * Static Qcodo Query method to query for a single CourtInformation object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return CourtInformation the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = CourtInformation::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Instantiate a new CourtInformation object and return it

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = CourtInformation::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
					if ($objItem) $objToReturn[] = $objItem;
				}

				if (count($objToReturn)) {
					// Since we only want the object to return, lets return the object and not the array.
					return $objToReturn[0];
				} else {
					return null;
				}
			} else {
				// No expands just return the first row
				$objDbRow = $objDbResult->GetNextRow();
				if (is_null($objDbRow)) return null;
				return CourtInformation::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcodo Query method to query for an array of CourtInformation objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return CourtInformation[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = CourtInformation::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return CourtInformation::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcodo query method to issue a query and get a cursor to progressively fetch its results.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return QDatabaseResultBase the cursor resource instance
		 */
		public static function QueryCursor(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the query statement
			try {
				$strQuery = CourtInformation::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
		
			// Return the results cursor
			$objDbResult->QueryBuilder = $objQueryBuilder;
			return $objDbResult;
		}

		/**
		 * Static Qcodo Query method to query for a count of CourtInformation objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = CourtInformation::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and return the row_count
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Figure out if the query is using GroupBy
			$blnGrouped = false;

			if ($objOptionalClauses) foreach ($objOptionalClauses as $objClause) {
				if ($objClause instanceof QQGroupBy) {
					$blnGrouped = true;
					break;
				}
			}

			if ($blnGrouped)
				// Groups in this query - return the count of Groups (which is the count of all rows)
				return $objDbResult->CountRows();
			else {
				// No Groups - return the sql-calculated count(*) value
				$strDbRow = $objDbResult->FetchRow();
				return QType::Cast($strDbRow[0], QType::Integer);
			}
		}

/*		public static function QueryArrayCached($strConditions, $mixParameterArray = null) {
			// Get the Database Object for this Class
			$objDatabase = CourtInformation::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'court_information_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with CourtInformation-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				CourtInformation::GetSelectFields($objQueryBuilder);
				CourtInformation::GetFromFields($objQueryBuilder);

				// Ensure the Passed-in Conditions is a string
				try {
					$strConditions = QType::Cast($strConditions, QType::String);
				} catch (QCallerException $objExc) {
					$objExc->IncrementOffset();
					throw $objExc;
				}

				// Create the Conditions object, and apply it
				$objConditions = eval('return ' . $strConditions . ';');

				// Apply Any Conditions
				if ($objConditions)
					$objConditions->UpdateQueryBuilder($objQueryBuilder);

				// Get the SQL Statement
				$strQuery = $objQueryBuilder->GetStatement();

				// Save the SQL Statement in the Cache
				$objCache->SaveData($strQuery);
			}

			// Prepare the Statement with the Parameters
			if ($mixParameterArray)
				$strQuery = $objDatabase->PrepareStatement($strQuery, $mixParameterArray);

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objDatabase->Query($strQuery);
			return CourtInformation::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this CourtInformation
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'court_information';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			$objBuilder->AddSelectItem($strTableName, 'information', $strAliasPrefix . 'information');
		}




		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a CourtInformation from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this CourtInformation::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $objPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return CourtInformation
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $objPreviousItem = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow)
				return null;

			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && ($objPreviousItem) &&
				($objPreviousItem->intId == $objDbRow->GetColumn($strAliasName, 'Integer'))) {

				// We are.  Now, prepare to check for ExpandAsArray clauses
				$blnExpandedViaArray = false;
				if (!$strAliasPrefix)
					$strAliasPrefix = 'court_information__';


				$strAlias = $strAliasPrefix . 'casesascourt__id';
				$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasName)))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objCasesAsCourtArray)) {
						$objPreviousChildItem = $objPreviousItem->_objCasesAsCourtArray[$intPreviousChildItemCount - 1];
						$objChildItem = Cases::InstantiateDbRow($objDbRow, $strAliasPrefix . 'casesascourt__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
						if ($objChildItem)
							$objPreviousItem->_objCasesAsCourtArray[] = $objChildItem;
					} else
						$objPreviousItem->_objCasesAsCourtArray[] = Cases::InstantiateDbRow($objDbRow, $strAliasPrefix . 'casesascourt__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
					$blnExpandedViaArray = true;
				}

				// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
				if ($blnExpandedViaArray)
					return false;
				else if ($strAliasPrefix == 'court_information__')
					$strAliasPrefix = null;
			}

			// Create a new instance of the CourtInformation object
			$objToReturn = new CourtInformation();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'information', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'information'] : $strAliasPrefix . 'information';
			$objToReturn->strInformation = $objDbRow->GetColumn($strAliasName, 'VarChar');

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'court_information__';




			// Check for CasesAsCourt Virtual Binding
			$strAlias = $strAliasPrefix . 'casesascourt__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objCasesAsCourtArray[] = Cases::InstantiateDbRow($objDbRow, $strAliasPrefix . 'casesascourt__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objCasesAsCourt = Cases::InstantiateDbRow($objDbRow, $strAliasPrefix . 'casesascourt__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of CourtInformations from a Database Result
		 * @param QDatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return CourtInformation[]
		 */
		public static function InstantiateDbResult(QDatabaseResultBase $objDbResult, $strExpandAsArrayNodes = null, $strColumnAliasArray = null) {
			$objToReturn = array();
			
			if (!$strColumnAliasArray)
				$strColumnAliasArray = array();

			// If blank resultset, then return empty array
			if (!$objDbResult)
				return $objToReturn;

			// Load up the return array with each row
			if ($strExpandAsArrayNodes) {
				$objLastRowItem = null;
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = CourtInformation::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = CourtInformation::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate a single CourtInformation object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return CourtInformation next row resulting from the query
		 */
		public static function InstantiateCursor(QDatabaseResultBase $objDbResult) {
			// If blank resultset, then return empty result
			if (!$objDbResult) return null;

			// If empty resultset, then return empty result
			$objDbRow = $objDbResult->GetNextRow();
			if (!$objDbRow) return null;

			// We need the Column Aliases
			$strColumnAliasArray = $objDbResult->QueryBuilder->ColumnAliasArray;
			if (!$strColumnAliasArray) $strColumnAliasArray = array();

			// Pull Expansions (if applicable)
			$strExpandAsArrayNodes = $objDbResult->QueryBuilder->ExpandAsArrayNodes;

			// Load up the return result with a row and return it
			return CourtInformation::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single CourtInformation object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @return CourtInformation
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return CourtInformation::QuerySingle(
				QQ::Equal(QQN::CourtInformation()->Id, $intId)
			, $objOptionalClauses
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////////////////
		// SAVE, DELETE, RELOAD and JOURNALING
		//////////////////////////////////////

		/**
		 * Save this CourtInformation
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = CourtInformation::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `court_information` (
							`information`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strInformation) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('court_information', 'id');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('INSERT');

				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`court_information`
						SET
							`information` = ' . $objDatabase->SqlVariable($this->strInformation) . '
						WHERE
							`id` = ' . $objDatabase->SqlVariable($this->intId) . '
					');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('UPDATE');
				}

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Update __blnRestored and any Non-Identity PK Columns (if applicable)
			$this->__blnRestored = true;


			// Return 
			return $mixToReturn;
		}

		/**
		 * Delete this CourtInformation
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this CourtInformation with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = CourtInformation::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`court_information`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');

			// Journaling
			if ($objDatabase->JournalingDatabase) $this->Journal('DELETE');
		}

		/**
		 * Delete all CourtInformations
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = CourtInformation::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`court_information`');
		}

		/**
		 * Truncate court_information table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = CourtInformation::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `court_information`');
		}

		/**
		 * Reload this CourtInformation from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved CourtInformation object.');

			// Reload the Object
			$objReloaded = CourtInformation::Load($this->intId);

			// Update $this's local variables to match
			$this->strInformation = $objReloaded->strInformation;
		}

		/**
		 * Journals the current object into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function Journal($strJournalCommand) {
			$objDatabase = CourtInformation::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `court_information` (
					`id`,
					`information`,
					__sys_login_id,
					__sys_action,
					__sys_date
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($this->strInformation) . ',
					' . (($objDatabase->JournaledById) ? $objDatabase->JournaledById : 'NULL') . ',
					' . $objDatabase->SqlVariable($strJournalCommand) . ',
					NOW()
				);
			');
		}

		/**
		 * Gets the historical journal for an object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @param integer intId
		 * @return CourtInformation[]
		 */
		public static function GetJournalForId($intId) {
			$objDatabase = CourtInformation::GetDatabase()->JournalingDatabase;

			$objResult = $objDatabase->Query('SELECT * FROM court_information WHERE id = ' .
				$objDatabase->SqlVariable($intId) . ' ORDER BY __sys_date');

			return CourtInformation::InstantiateDbResult($objResult);
		}

		/**
		 * Gets the historical journal for this object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @return CourtInformation[]
		 */
		public function GetJournal() {
			return CourtInformation::GetJournalForId($this->intId);
		}




		////////////////////
		// PUBLIC OVERRIDERS
		////////////////////

				/**
		 * Override method to perform a property "Get"
		 * This will get the value of $strName
		 *
		 * @param string $strName Name of the property to get
		 * @return mixed
		 */
		public function __get($strName) {
			switch ($strName) {
				///////////////////
				// Member Variables
				///////////////////
				case 'Id':
					// Gets the value for intId (Read-Only PK)
					// @return integer
					return $this->intId;

				case 'Information':
					// Gets the value for strInformation 
					// @return string
					return $this->strInformation;


				///////////////////
				// Member Objects
				///////////////////

				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_CasesAsCourt':
					// Gets the value for the private _objCasesAsCourt (Read-Only)
					// if set due to an expansion on the cases.court_id reverse relationship
					// @return Cases
					return $this->_objCasesAsCourt;

				case '_CasesAsCourtArray':
					// Gets the value for the private _objCasesAsCourtArray (Read-Only)
					// if set due to an ExpandAsArray on the cases.court_id reverse relationship
					// @return Cases[]
					return (array) $this->_objCasesAsCourtArray;


				case '__Restored':
					return $this->__blnRestored;

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
			switch ($strName) {
				///////////////////
				// Member Variables
				///////////////////
				case 'Information':
					// Sets the value for strInformation 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strInformation = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				default:
					try {
						return parent::__set($strName, $mixValue);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

		/**
		 * Lookup a VirtualAttribute value (if applicable).  Returns NULL if none found.
		 * @param string $strName
		 * @return string
		 */
		public function GetVirtualAttribute($strName) {
			if (array_key_exists($strName, $this->__strVirtualAttributeArray))
				return $this->__strVirtualAttributeArray[$strName];
			return null;
		}



		///////////////////////////////
		// ASSOCIATED OBJECTS' METHODS
		///////////////////////////////

			
		
		// Related Objects' Methods for CasesAsCourt
		//-------------------------------------------------------------------

		/**
		 * Gets all associated CasesesAsCourt as an array of Cases objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Cases[]
		*/ 
		public function GetCasesAsCourtArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return Cases::LoadArrayByCourtId($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated CasesesAsCourt
		 * @return int
		*/ 
		public function CountCasesesAsCourt() {
			if ((is_null($this->intId)))
				return 0;

			return Cases::CountByCourtId($this->intId);
		}

		/**
		 * Associates a CasesAsCourt
		 * @param Cases $objCases
		 * @return void
		*/ 
		public function AssociateCasesAsCourt(Cases $objCases) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateCasesAsCourt on this unsaved CourtInformation.');
			if ((is_null($objCases->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateCasesAsCourt on this CourtInformation with an unsaved Cases.');

			// Get the Database Object for this Class
			$objDatabase = CourtInformation::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`cases`
				SET
					`court_id` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objCases->Id) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objCases->CourtId = $this->intId;
				$objCases->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates a CasesAsCourt
		 * @param Cases $objCases
		 * @return void
		*/ 
		public function UnassociateCasesAsCourt(Cases $objCases) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCasesAsCourt on this unsaved CourtInformation.');
			if ((is_null($objCases->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCasesAsCourt on this CourtInformation with an unsaved Cases.');

			// Get the Database Object for this Class
			$objDatabase = CourtInformation::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`cases`
				SET
					`court_id` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objCases->Id) . ' AND
					`court_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objCases->CourtId = null;
				$objCases->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates all CasesesAsCourt
		 * @return void
		*/ 
		public function UnassociateAllCasesesAsCourt() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCasesAsCourt on this unsaved CourtInformation.');

			// Get the Database Object for this Class
			$objDatabase = CourtInformation::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (Cases::LoadArrayByCourtId($this->intId) as $objCases) {
					$objCases->CourtId = null;
					$objCases->Journal('UPDATE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`cases`
				SET
					`court_id` = null
				WHERE
					`court_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated CasesAsCourt
		 * @param Cases $objCases
		 * @return void
		*/ 
		public function DeleteAssociatedCasesAsCourt(Cases $objCases) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCasesAsCourt on this unsaved CourtInformation.');
			if ((is_null($objCases->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCasesAsCourt on this CourtInformation with an unsaved Cases.');

			// Get the Database Object for this Class
			$objDatabase = CourtInformation::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`cases`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objCases->Id) . ' AND
					`court_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objCases->Journal('DELETE');
			}
		}

		/**
		 * Deletes all associated CasesesAsCourt
		 * @return void
		*/ 
		public function DeleteAllCasesesAsCourt() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCasesAsCourt on this unsaved CourtInformation.');

			// Get the Database Object for this Class
			$objDatabase = CourtInformation::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (Cases::LoadArrayByCourtId($this->intId) as $objCases) {
					$objCases->Journal('DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`cases`
				WHERE
					`court_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="CourtInformation"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="Information" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('CourtInformation', $strComplexTypeArray)) {
				$strComplexTypeArray['CourtInformation'] = CourtInformation::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, CourtInformation::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new CourtInformation();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if (property_exists($objSoapObject, 'Information'))
				$objToReturn->strInformation = $objSoapObject->Information;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, CourtInformation::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCODO QUERY
	/////////////////////////////////////

	/**
	 * @property-read QQNode $Id
	 * @property-read QQNode $Information
	 * @property-read QQReverseReferenceNodeCases $CasesAsCourt
	 */
	class QQNodeCourtInformation extends QQNode {
		protected $strTableName = 'court_information';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'CourtInformation';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'Information':
					return new QQNode('information', 'Information', 'string', $this);
				case 'CasesAsCourt':
					return new QQReverseReferenceNodeCases($this, 'casesascourt', 'reverse_reference', 'court_id');

				case '_PrimaryKeyNode':
					return new QQNode('id', 'Id', 'integer', $this);
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
	}
	
	/**
	 * @property-read QQNode $Id
	 * @property-read QQNode $Information
	 * @property-read QQReverseReferenceNodeCases $CasesAsCourt
	 * @property-read QQNode $_PrimaryKeyNode
	 */
	class QQReverseReferenceNodeCourtInformation extends QQReverseReferenceNode {
		protected $strTableName = 'court_information';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'CourtInformation';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'Information':
					return new QQNode('information', 'Information', 'string', $this);
				case 'CasesAsCourt':
					return new QQReverseReferenceNodeCases($this, 'casesascourt', 'reverse_reference', 'court_id');

				case '_PrimaryKeyNode':
					return new QQNode('id', 'Id', 'integer', $this);
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
	}

?>