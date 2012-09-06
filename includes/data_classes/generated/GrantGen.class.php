<?php
	/**
	 * The abstract GrantGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Grant subclass which
	 * extends this GrantGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Grant class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $Id the value for intId (Read-Only PK)
	 * @property string $Name the value for strName (Unique)
	 * @property Advocate $_Advocate the value for the private _objAdvocate (Read-Only) if set due to an expansion on the advocate.grant_id reverse relationship
	 * @property Advocate[] $_AdvocateArray the value for the private _objAdvocateArray (Read-Only) if set due to an ExpandAsArray on the advocate.grant_id reverse relationship
	 * @property boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class GrantGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column grant.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column grant.name
		 * @var string strName
		 */
		protected $strName;
		const NameMaxLength = 255;
		const NameDefault = null;


		/**
		 * Private member variable that stores a reference to a single Advocate object
		 * (of type Advocate), if this Grant object was restored with
		 * an expansion on the advocate association table.
		 * @var Advocate _objAdvocate;
		 */
		private $_objAdvocate;

		/**
		 * Private member variable that stores a reference to an array of Advocate objects
		 * (of type Advocate[]), if this Grant object was restored with
		 * an ExpandAsArray on the advocate association table.
		 * @var Advocate[] _objAdvocateArray;
		 */
		private $_objAdvocateArray = array();

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
		 * Load a Grant from PK Info
		 * @param integer $intId
		 * @return Grant
		 */
		public static function Load($intId) {
			// Use QuerySingle to Perform the Query
			return Grant::QuerySingle(
				QQ::Equal(QQN::Grant()->Id, $intId)
			);
		}

		/**
		 * Load all Grants
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Grant[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call Grant::QueryArray to perform the LoadAll query
			try {
				return Grant::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Grants
		 * @return int
		 */
		public static function CountAll() {
			// Call Grant::QueryCount to perform the CountAll query
			return Grant::QueryCount(QQ::All());
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
			$objDatabase = Grant::GetDatabase();

			// Create/Build out the QueryBuilder object with Grant-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'grant');
			Grant::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('grant');

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
		 * Static Qcodo Query method to query for a single Grant object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Grant the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Grant::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Instantiate a new Grant object and return it

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Grant::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Grant::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcodo Query method to query for an array of Grant objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Grant[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Grant::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Grant::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = Grant::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcodo Query method to query for a count of Grant objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Grant::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Grant::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'grant_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with Grant-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				Grant::GetSelectFields($objQueryBuilder);
				Grant::GetFromFields($objQueryBuilder);

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
			return Grant::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Grant
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'grant';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			$objBuilder->AddSelectItem($strTableName, 'name', $strAliasPrefix . 'name');
		}




		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Grant from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Grant::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $objPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Grant
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
					$strAliasPrefix = 'grant__';


				$strAlias = $strAliasPrefix . 'advocate__id';
				$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasName)))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objAdvocateArray)) {
						$objPreviousChildItem = $objPreviousItem->_objAdvocateArray[$intPreviousChildItemCount - 1];
						$objChildItem = Advocate::InstantiateDbRow($objDbRow, $strAliasPrefix . 'advocate__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
						if ($objChildItem)
							$objPreviousItem->_objAdvocateArray[] = $objChildItem;
					} else
						$objPreviousItem->_objAdvocateArray[] = Advocate::InstantiateDbRow($objDbRow, $strAliasPrefix . 'advocate__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
					$blnExpandedViaArray = true;
				}

				// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
				if ($blnExpandedViaArray)
					return false;
				else if ($strAliasPrefix == 'grant__')
					$strAliasPrefix = null;
			}

			// Create a new instance of the Grant object
			$objToReturn = new Grant();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'name', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'name'] : $strAliasPrefix . 'name';
			$objToReturn->strName = $objDbRow->GetColumn($strAliasName, 'VarChar');

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'grant__';




			// Check for Advocate Virtual Binding
			$strAlias = $strAliasPrefix . 'advocate__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objAdvocateArray[] = Advocate::InstantiateDbRow($objDbRow, $strAliasPrefix . 'advocate__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objAdvocate = Advocate::InstantiateDbRow($objDbRow, $strAliasPrefix . 'advocate__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of Grants from a Database Result
		 * @param QDatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Grant[]
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
					$objItem = Grant::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Grant::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate a single Grant object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Grant next row resulting from the query
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
			return Grant::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Grant object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @return Grant
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return Grant::QuerySingle(
				QQ::Equal(QQN::Grant()->Id, $intId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load a single Grant object,
		 * by Name Index(es)
		 * @param string $strName
		 * @return Grant
		*/
		public static function LoadByName($strName, $objOptionalClauses = null) {
			return Grant::QuerySingle(
				QQ::Equal(QQN::Grant()->Name, $strName)
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
		 * Save this Grant
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Grant::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `grant` (
							`name`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strName) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('grant', 'id');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('INSERT');

				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`grant`
						SET
							`name` = ' . $objDatabase->SqlVariable($this->strName) . '
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
		 * Delete this Grant
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Grant with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Grant::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`grant`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');

			// Journaling
			if ($objDatabase->JournalingDatabase) $this->Journal('DELETE');
		}

		/**
		 * Delete all Grants
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Grant::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`grant`');
		}

		/**
		 * Truncate grant table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Grant::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `grant`');
		}

		/**
		 * Reload this Grant from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Grant object.');

			// Reload the Object
			$objReloaded = Grant::Load($this->intId);

			// Update $this's local variables to match
			$this->strName = $objReloaded->strName;
		}

		/**
		 * Journals the current object into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function Journal($strJournalCommand) {
			$objDatabase = Grant::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `grant` (
					`id`,
					`name`,
					__sys_login_id,
					__sys_action,
					__sys_date
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($this->strName) . ',
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
		 * @return Grant[]
		 */
		public static function GetJournalForId($intId) {
			$objDatabase = Grant::GetDatabase()->JournalingDatabase;

			$objResult = $objDatabase->Query('SELECT * FROM grant WHERE id = ' .
				$objDatabase->SqlVariable($intId) . ' ORDER BY __sys_date');

			return Grant::InstantiateDbResult($objResult);
		}

		/**
		 * Gets the historical journal for this object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @return Grant[]
		 */
		public function GetJournal() {
			return Grant::GetJournalForId($this->intId);
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

				case 'Name':
					// Gets the value for strName (Unique)
					// @return string
					return $this->strName;


				///////////////////
				// Member Objects
				///////////////////

				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_Advocate':
					// Gets the value for the private _objAdvocate (Read-Only)
					// if set due to an expansion on the advocate.grant_id reverse relationship
					// @return Advocate
					return $this->_objAdvocate;

				case '_AdvocateArray':
					// Gets the value for the private _objAdvocateArray (Read-Only)
					// if set due to an ExpandAsArray on the advocate.grant_id reverse relationship
					// @return Advocate[]
					return (array) $this->_objAdvocateArray;


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
				case 'Name':
					// Sets the value for strName (Unique)
					// @param string $mixValue
					// @return string
					try {
						return ($this->strName = QType::Cast($mixValue, QType::String));
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

			
		
		// Related Objects' Methods for Advocate
		//-------------------------------------------------------------------

		/**
		 * Gets all associated Advocates as an array of Advocate objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Advocate[]
		*/ 
		public function GetAdvocateArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return Advocate::LoadArrayByGrantId($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated Advocates
		 * @return int
		*/ 
		public function CountAdvocates() {
			if ((is_null($this->intId)))
				return 0;

			return Advocate::CountByGrantId($this->intId);
		}

		/**
		 * Associates a Advocate
		 * @param Advocate $objAdvocate
		 * @return void
		*/ 
		public function AssociateAdvocate(Advocate $objAdvocate) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAdvocate on this unsaved Grant.');
			if ((is_null($objAdvocate->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAdvocate on this Grant with an unsaved Advocate.');

			// Get the Database Object for this Class
			$objDatabase = Grant::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`advocate`
				SET
					`grant_id` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objAdvocate->Id) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objAdvocate->GrantId = $this->intId;
				$objAdvocate->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates a Advocate
		 * @param Advocate $objAdvocate
		 * @return void
		*/ 
		public function UnassociateAdvocate(Advocate $objAdvocate) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAdvocate on this unsaved Grant.');
			if ((is_null($objAdvocate->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAdvocate on this Grant with an unsaved Advocate.');

			// Get the Database Object for this Class
			$objDatabase = Grant::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`advocate`
				SET
					`grant_id` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objAdvocate->Id) . ' AND
					`grant_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objAdvocate->GrantId = null;
				$objAdvocate->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates all Advocates
		 * @return void
		*/ 
		public function UnassociateAllAdvocates() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAdvocate on this unsaved Grant.');

			// Get the Database Object for this Class
			$objDatabase = Grant::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (Advocate::LoadArrayByGrantId($this->intId) as $objAdvocate) {
					$objAdvocate->GrantId = null;
					$objAdvocate->Journal('UPDATE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`advocate`
				SET
					`grant_id` = null
				WHERE
					`grant_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated Advocate
		 * @param Advocate $objAdvocate
		 * @return void
		*/ 
		public function DeleteAssociatedAdvocate(Advocate $objAdvocate) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAdvocate on this unsaved Grant.');
			if ((is_null($objAdvocate->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAdvocate on this Grant with an unsaved Advocate.');

			// Get the Database Object for this Class
			$objDatabase = Grant::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`advocate`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objAdvocate->Id) . ' AND
					`grant_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objAdvocate->Journal('DELETE');
			}
		}

		/**
		 * Deletes all associated Advocates
		 * @return void
		*/ 
		public function DeleteAllAdvocates() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAdvocate on this unsaved Grant.');

			// Get the Database Object for this Class
			$objDatabase = Grant::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (Advocate::LoadArrayByGrantId($this->intId) as $objAdvocate) {
					$objAdvocate->Journal('DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`advocate`
				WHERE
					`grant_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Grant"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="Name" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Grant', $strComplexTypeArray)) {
				$strComplexTypeArray['Grant'] = Grant::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Grant::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Grant();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if (property_exists($objSoapObject, 'Name'))
				$objToReturn->strName = $objSoapObject->Name;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Grant::GetSoapObjectFromObject($objObject, true));

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
	 * @property-read QQNode $Name
	 * @property-read QQReverseReferenceNodeAdvocate $Advocate
	 */
	class QQNodeGrant extends QQNode {
		protected $strTableName = 'grant';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'Grant';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'string', $this);
				case 'Advocate':
					return new QQReverseReferenceNodeAdvocate($this, 'advocate', 'reverse_reference', 'grant_id');

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
	 * @property-read QQNode $Name
	 * @property-read QQReverseReferenceNodeAdvocate $Advocate
	 * @property-read QQNode $_PrimaryKeyNode
	 */
	class QQReverseReferenceNodeGrant extends QQReverseReferenceNode {
		protected $strTableName = 'grant';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'Grant';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'string', $this);
				case 'Advocate':
					return new QQReverseReferenceNodeAdvocate($this, 'advocate', 'reverse_reference', 'grant_id');

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