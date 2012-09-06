<?php
	/**
	 * The abstract AdvocateGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Advocate subclass which
	 * extends this AdvocateGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Advocate class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $Id the value for intId (Read-Only PK)
	 * @property integer $LoginId the value for intLoginId 
	 * @property integer $GrantId the value for intGrantId 
	 * @property Login $Login the value for the Login object referenced by intLoginId 
	 * @property Grant $Grant the value for the Grant object referenced by intGrantId 
	 * @property Cases $_CasesAsCase the value for the private _objCasesAsCase (Read-Only) if set due to an expansion on the advocate_case_assn association table
	 * @property Cases[] $_CasesAsCaseArray the value for the private _objCasesAsCaseArray (Read-Only) if set due to an ExpandAsArray on the advocate_case_assn association table
	 * @property boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class AdvocateGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column advocate.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column advocate.login_id
		 * @var integer intLoginId
		 */
		protected $intLoginId;
		const LoginIdDefault = null;


		/**
		 * Protected member variable that maps to the database column advocate.grant_id
		 * @var integer intGrantId
		 */
		protected $intGrantId;
		const GrantIdDefault = null;


		/**
		 * Private member variable that stores a reference to a single CasesAsCase object
		 * (of type Cases), if this Advocate object was restored with
		 * an expansion on the advocate_case_assn association table.
		 * @var Cases _objCasesAsCase;
		 */
		private $_objCasesAsCase;

		/**
		 * Private member variable that stores a reference to an array of CasesAsCase objects
		 * (of type Cases[]), if this Advocate object was restored with
		 * an ExpandAsArray on the advocate_case_assn association table.
		 * @var Cases[] _objCasesAsCaseArray;
		 */
		private $_objCasesAsCaseArray = array();

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

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column advocate.login_id.
		 *
		 * NOTE: Always use the Login property getter to correctly retrieve this Login object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Login objLogin
		 */
		protected $objLogin;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column advocate.grant_id.
		 *
		 * NOTE: Always use the Grant property getter to correctly retrieve this Grant object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Grant objGrant
		 */
		protected $objGrant;





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
		 * Load a Advocate from PK Info
		 * @param integer $intId
		 * @return Advocate
		 */
		public static function Load($intId) {
			// Use QuerySingle to Perform the Query
			return Advocate::QuerySingle(
				QQ::Equal(QQN::Advocate()->Id, $intId)
			);
		}

		/**
		 * Load all Advocates
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Advocate[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call Advocate::QueryArray to perform the LoadAll query
			try {
				return Advocate::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Advocates
		 * @return int
		 */
		public static function CountAll() {
			// Call Advocate::QueryCount to perform the CountAll query
			return Advocate::QueryCount(QQ::All());
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
			$objDatabase = Advocate::GetDatabase();

			// Create/Build out the QueryBuilder object with Advocate-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'advocate');
			Advocate::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('advocate');

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
		 * Static Qcodo Query method to query for a single Advocate object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Advocate the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Advocate::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Instantiate a new Advocate object and return it

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Advocate::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Advocate::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcodo Query method to query for an array of Advocate objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Advocate[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Advocate::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Advocate::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = Advocate::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcodo Query method to query for a count of Advocate objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Advocate::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Advocate::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'advocate_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with Advocate-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				Advocate::GetSelectFields($objQueryBuilder);
				Advocate::GetFromFields($objQueryBuilder);

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
			return Advocate::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Advocate
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'advocate';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			$objBuilder->AddSelectItem($strTableName, 'login_id', $strAliasPrefix . 'login_id');
			$objBuilder->AddSelectItem($strTableName, 'grant_id', $strAliasPrefix . 'grant_id');
		}




		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Advocate from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Advocate::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $objPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Advocate
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
					$strAliasPrefix = 'advocate__';

				$strAlias = $strAliasPrefix . 'casesascase__case_id__id';
				$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasName)))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objCasesAsCaseArray)) {
						$objPreviousChildItem = $objPreviousItem->_objCasesAsCaseArray[$intPreviousChildItemCount - 1];
						$objChildItem = Cases::InstantiateDbRow($objDbRow, $strAliasPrefix . 'casesascase__case_id__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
						if ($objChildItem)
							$objPreviousItem->_objCasesAsCaseArray[] = $objChildItem;
					} else
						$objPreviousItem->_objCasesAsCaseArray[] = Cases::InstantiateDbRow($objDbRow, $strAliasPrefix . 'casesascase__case_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
					$blnExpandedViaArray = true;
				}


				// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
				if ($blnExpandedViaArray)
					return false;
				else if ($strAliasPrefix == 'advocate__')
					$strAliasPrefix = null;
			}

			// Create a new instance of the Advocate object
			$objToReturn = new Advocate();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'login_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'login_id'] : $strAliasPrefix . 'login_id';
			$objToReturn->intLoginId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'grant_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'grant_id'] : $strAliasPrefix . 'grant_id';
			$objToReturn->intGrantId = $objDbRow->GetColumn($strAliasName, 'Integer');

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'advocate__';

			// Check for Login Early Binding
			$strAlias = $strAliasPrefix . 'login_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objLogin = Login::InstantiateDbRow($objDbRow, $strAliasPrefix . 'login_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for Grant Early Binding
			$strAlias = $strAliasPrefix . 'grant_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objGrant = Grant::InstantiateDbRow($objDbRow, $strAliasPrefix . 'grant_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);



			// Check for CasesAsCase Virtual Binding
			$strAlias = $strAliasPrefix . 'casesascase__case_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objCasesAsCaseArray[] = Cases::InstantiateDbRow($objDbRow, $strAliasPrefix . 'casesascase__case_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objCasesAsCase = Cases::InstantiateDbRow($objDbRow, $strAliasPrefix . 'casesascase__case_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}


			return $objToReturn;
		}

		/**
		 * Instantiate an array of Advocates from a Database Result
		 * @param QDatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Advocate[]
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
					$objItem = Advocate::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Advocate::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate a single Advocate object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Advocate next row resulting from the query
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
			return Advocate::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Advocate object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @return Advocate
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return Advocate::QuerySingle(
				QQ::Equal(QQN::Advocate()->Id, $intId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of Advocate objects,
		 * by LoginId Index(es)
		 * @param integer $intLoginId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Advocate[]
		*/
		public static function LoadArrayByLoginId($intLoginId, $objOptionalClauses = null) {
			// Call Advocate::QueryArray to perform the LoadArrayByLoginId query
			try {
				return Advocate::QueryArray(
					QQ::Equal(QQN::Advocate()->LoginId, $intLoginId),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Advocates
		 * by LoginId Index(es)
		 * @param integer $intLoginId
		 * @return int
		*/
		public static function CountByLoginId($intLoginId, $objOptionalClauses = null) {
			// Call Advocate::QueryCount to perform the CountByLoginId query
			return Advocate::QueryCount(
				QQ::Equal(QQN::Advocate()->LoginId, $intLoginId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of Advocate objects,
		 * by GrantId Index(es)
		 * @param integer $intGrantId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Advocate[]
		*/
		public static function LoadArrayByGrantId($intGrantId, $objOptionalClauses = null) {
			// Call Advocate::QueryArray to perform the LoadArrayByGrantId query
			try {
				return Advocate::QueryArray(
					QQ::Equal(QQN::Advocate()->GrantId, $intGrantId),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Advocates
		 * by GrantId Index(es)
		 * @param integer $intGrantId
		 * @return int
		*/
		public static function CountByGrantId($intGrantId, $objOptionalClauses = null) {
			// Call Advocate::QueryCount to perform the CountByGrantId query
			return Advocate::QueryCount(
				QQ::Equal(QQN::Advocate()->GrantId, $intGrantId)
			, $objOptionalClauses
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////
			/**
		 * Load an array of Cases objects for a given CasesAsCase
		 * via the advocate_case_assn table
		 * @param integer $intCaseId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Advocate[]
		*/
		public static function LoadArrayByCasesAsCase($intCaseId, $objOptionalClauses = null) {
			// Call Advocate::QueryArray to perform the LoadArrayByCasesAsCase query
			try {
				return Advocate::QueryArray(
					QQ::Equal(QQN::Advocate()->CasesAsCase->CaseId, $intCaseId),
					$objOptionalClauses
				);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Advocates for a given CasesAsCase
		 * via the advocate_case_assn table
		 * @param integer $intCaseId
		 * @return int
		*/
		public static function CountByCasesAsCase($intCaseId, $objOptionalClauses = null) {
			return Advocate::QueryCount(
				QQ::Equal(QQN::Advocate()->CasesAsCase->CaseId, $intCaseId),
				$objOptionalClauses
			);
		}




		//////////////////////////////////////
		// SAVE, DELETE, RELOAD and JOURNALING
		//////////////////////////////////////

		/**
		 * Save this Advocate
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Advocate::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `advocate` (
							`login_id`,
							`grant_id`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intLoginId) . ',
							' . $objDatabase->SqlVariable($this->intGrantId) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('advocate', 'id');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('INSERT');

				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`advocate`
						SET
							`login_id` = ' . $objDatabase->SqlVariable($this->intLoginId) . ',
							`grant_id` = ' . $objDatabase->SqlVariable($this->intGrantId) . '
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
		 * Delete this Advocate
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Advocate with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Advocate::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`advocate`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');

			// Journaling
			if ($objDatabase->JournalingDatabase) $this->Journal('DELETE');
		}

		/**
		 * Delete all Advocates
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Advocate::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`advocate`');
		}

		/**
		 * Truncate advocate table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Advocate::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `advocate`');
		}

		/**
		 * Reload this Advocate from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Advocate object.');

			// Reload the Object
			$objReloaded = Advocate::Load($this->intId);

			// Update $this's local variables to match
			$this->LoginId = $objReloaded->LoginId;
			$this->GrantId = $objReloaded->GrantId;
		}

		/**
		 * Journals the current object into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function Journal($strJournalCommand) {
			$objDatabase = Advocate::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `advocate` (
					`id`,
					`login_id`,
					`grant_id`,
					__sys_login_id,
					__sys_action,
					__sys_date
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($this->intLoginId) . ',
					' . $objDatabase->SqlVariable($this->intGrantId) . ',
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
		 * @return Advocate[]
		 */
		public static function GetJournalForId($intId) {
			$objDatabase = Advocate::GetDatabase()->JournalingDatabase;

			$objResult = $objDatabase->Query('SELECT * FROM advocate WHERE id = ' .
				$objDatabase->SqlVariable($intId) . ' ORDER BY __sys_date');

			return Advocate::InstantiateDbResult($objResult);
		}

		/**
		 * Gets the historical journal for this object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @return Advocate[]
		 */
		public function GetJournal() {
			return Advocate::GetJournalForId($this->intId);
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

				case 'LoginId':
					// Gets the value for intLoginId 
					// @return integer
					return $this->intLoginId;

				case 'GrantId':
					// Gets the value for intGrantId 
					// @return integer
					return $this->intGrantId;


				///////////////////
				// Member Objects
				///////////////////
				case 'Login':
					// Gets the value for the Login object referenced by intLoginId 
					// @return Login
					try {
						if ((!$this->objLogin) && (!is_null($this->intLoginId)))
							$this->objLogin = Login::Load($this->intLoginId);
						return $this->objLogin;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Grant':
					// Gets the value for the Grant object referenced by intGrantId 
					// @return Grant
					try {
						if ((!$this->objGrant) && (!is_null($this->intGrantId)))
							$this->objGrant = Grant::Load($this->intGrantId);
						return $this->objGrant;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_CasesAsCase':
					// Gets the value for the private _objCasesAsCase (Read-Only)
					// if set due to an expansion on the advocate_case_assn association table
					// @return Cases
					return $this->_objCasesAsCase;

				case '_CasesAsCaseArray':
					// Gets the value for the private _objCasesAsCaseArray (Read-Only)
					// if set due to an ExpandAsArray on the advocate_case_assn association table
					// @return Cases[]
					return (array) $this->_objCasesAsCaseArray;


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
				case 'LoginId':
					// Sets the value for intLoginId 
					// @param integer $mixValue
					// @return integer
					try {
						$this->objLogin = null;
						return ($this->intLoginId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'GrantId':
					// Sets the value for intGrantId 
					// @param integer $mixValue
					// @return integer
					try {
						$this->objGrant = null;
						return ($this->intGrantId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'Login':
					// Sets the value for the Login object referenced by intLoginId 
					// @param Login $mixValue
					// @return Login
					if (is_null($mixValue)) {
						$this->intLoginId = null;
						$this->objLogin = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Login object
						try {
							$mixValue = QType::Cast($mixValue, 'Login');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Login object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved Login for this Advocate');

						// Update Local Member Variables
						$this->objLogin = $mixValue;
						$this->intLoginId = $mixValue->Id;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'Grant':
					// Sets the value for the Grant object referenced by intGrantId 
					// @param Grant $mixValue
					// @return Grant
					if (is_null($mixValue)) {
						$this->intGrantId = null;
						$this->objGrant = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Grant object
						try {
							$mixValue = QType::Cast($mixValue, 'Grant');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Grant object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved Grant for this Advocate');

						// Update Local Member Variables
						$this->objGrant = $mixValue;
						$this->intGrantId = $mixValue->Id;

						// Return $mixValue
						return $mixValue;
					}
					break;

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

			
		// Related Many-to-Many Objects' Methods for CasesAsCase
		//-------------------------------------------------------------------

		/**
		 * Gets all many-to-many associated CasesesAsCase as an array of Cases objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Cases[]
		*/ 
		public function GetCasesAsCaseArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return Cases::LoadArrayByAdvocateAsCase($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all many-to-many associated CasesesAsCase
		 * @return int
		*/ 
		public function CountCasesesAsCase() {
			if ((is_null($this->intId)))
				return 0;

			return Cases::CountByAdvocateAsCase($this->intId);
		}

		/**
		 * Checks to see if an association exists with a specific CasesAsCase
		 * @param Cases $objCases
		 * @return bool
		*/
		public function IsCasesAsCaseAssociated(Cases $objCases) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsCasesAsCaseAssociated on this unsaved Advocate.');
			if ((is_null($objCases->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsCasesAsCaseAssociated on this Advocate with an unsaved Cases.');

			$intRowCount = Advocate::QueryCount(
				QQ::AndCondition(
					QQ::Equal(QQN::Advocate()->Id, $this->intId),
					QQ::Equal(QQN::Advocate()->CasesAsCase->CaseId, $objCases->Id)
				)
			);

			return ($intRowCount > 0);
		}

		/**
		 * Journals the CasesAsCase relationship into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function JournalCasesAsCaseAssociation($intAssociatedId, $strJournalCommand) {
			$objDatabase = Advocate::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `advocate_case_assn` (
					`advocate_id`,
					`case_id`,
					__sys_login_id,
					__sys_action,
					__sys_date
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($intAssociatedId) . ',
					' . (($objDatabase->JournaledById) ? $objDatabase->JournaledById : 'NULL') . ',
					' . $objDatabase->SqlVariable($strJournalCommand) . ',
					NOW()
				);
			');
		}

		/**
		 * Gets the historical journal for an object's CasesAsCase relationship from the log database.
		 * @param integer intId
		 * @return QDatabaseResult $objResult
		 */
		public static function GetJournalCasesAsCaseAssociationForId($intId) {
			$objDatabase = Advocate::GetDatabase()->JournalingDatabase;

			return $objDatabase->Query('SELECT * FROM advocate_case_assn WHERE advocate_id = ' .
				$objDatabase->SqlVariable($intId) . ' ORDER BY __sys_date');
		}

		/**
		 * Gets the historical journal for this object's CasesAsCase relationship from the log database.
		 * @return QDatabaseResult $objResult
		 */
		public function GetJournalCasesAsCaseAssociation() {
			return Advocate::GetJournalCasesAsCaseAssociationForId($this->intId);
		}

		/**
		 * Associates a CasesAsCase
		 * @param Cases $objCases
		 * @return void
		*/ 
		public function AssociateCasesAsCase(Cases $objCases) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateCasesAsCase on this unsaved Advocate.');
			if ((is_null($objCases->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateCasesAsCase on this Advocate with an unsaved Cases.');

			// Get the Database Object for this Class
			$objDatabase = Advocate::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				INSERT INTO `advocate_case_assn` (
					`advocate_id`,
					`case_id`
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($objCases->Id) . '
				)
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase)
				$this->JournalCasesAsCaseAssociation($objCases->Id, 'INSERT');
		}

		/**
		 * Unassociates a CasesAsCase
		 * @param Cases $objCases
		 * @return void
		*/ 
		public function UnassociateCasesAsCase(Cases $objCases) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCasesAsCase on this unsaved Advocate.');
			if ((is_null($objCases->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCasesAsCase on this Advocate with an unsaved Cases.');

			// Get the Database Object for this Class
			$objDatabase = Advocate::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`advocate_case_assn`
				WHERE
					`advocate_id` = ' . $objDatabase->SqlVariable($this->intId) . ' AND
					`case_id` = ' . $objDatabase->SqlVariable($objCases->Id) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase)
				$this->JournalCasesAsCaseAssociation($objCases->Id, 'DELETE');
		}

		/**
		 * Unassociates all CasesesAsCase
		 * @return void
		*/ 
		public function UnassociateAllCasesesAsCase() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAllCasesAsCaseArray on this unsaved Advocate.');

			// Get the Database Object for this Class
			$objDatabase = Advocate::GetDatabase();

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objResult = $objDatabase->Query('SELECT `case_id` AS associated_id FROM `advocate_case_assn` WHERE `advocate_id` = ' . $objDatabase->SqlVariable($this->intId));
				while ($objRow = $objResult->GetNextRow()) {
					$this->JournalCasesAsCaseAssociation($objRow->GetColumn('associated_id'), 'DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`advocate_case_assn`
				WHERE
					`advocate_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}




		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Advocate"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="Login" type="xsd1:Login"/>';
			$strToReturn .= '<element name="Grant" type="xsd1:Grant"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Advocate', $strComplexTypeArray)) {
				$strComplexTypeArray['Advocate'] = Advocate::GetSoapComplexTypeXml();
				Login::AlterSoapComplexTypeArray($strComplexTypeArray);
				Grant::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Advocate::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Advocate();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if ((property_exists($objSoapObject, 'Login')) &&
				($objSoapObject->Login))
				$objToReturn->Login = Login::GetObjectFromSoapObject($objSoapObject->Login);
			if ((property_exists($objSoapObject, 'Grant')) &&
				($objSoapObject->Grant))
				$objToReturn->Grant = Grant::GetObjectFromSoapObject($objSoapObject->Grant);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Advocate::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objLogin)
				$objObject->objLogin = Login::GetSoapObjectFromObject($objObject->objLogin, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intLoginId = null;
			if ($objObject->objGrant)
				$objObject->objGrant = Grant::GetSoapObjectFromObject($objObject->objGrant, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intGrantId = null;
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCODO QUERY
	/////////////////////////////////////

	/**
	 * @property-read QQNode $CaseId
	 * @property-read QQNodeCases $Cases
	 * @property-read QQNodeCases $_ChildTableNode
	 */
	class QQNodeAdvocateCasesAsCase extends QQAssociationNode {
		protected $strType = 'association';
		protected $strName = 'casesascase';

		protected $strTableName = 'advocate_case_assn';
		protected $strPrimaryKey = 'advocate_id';
		protected $strClassName = 'Cases';

		public function __get($strName) {
			switch ($strName) {
				case 'CaseId':
					return new QQNode('case_id', 'CaseId', 'integer', $this);
				case 'Cases':
					return new QQNodeCases('case_id', 'CaseId', 'integer', $this);
				case '_ChildTableNode':
					return new QQNodeCases('case_id', 'CaseId', 'integer', $this);
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
	 * @property-read QQNode $LoginId
	 * @property-read QQNodeLogin $Login
	 * @property-read QQNode $GrantId
	 * @property-read QQNodeGrant $Grant
	 * @property-read QQNodeAdvocateCasesAsCase $CasesAsCase
	 */
	class QQNodeAdvocate extends QQNode {
		protected $strTableName = 'advocate';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'Advocate';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'LoginId':
					return new QQNode('login_id', 'LoginId', 'integer', $this);
				case 'Login':
					return new QQNodeLogin('login_id', 'Login', 'integer', $this);
				case 'GrantId':
					return new QQNode('grant_id', 'GrantId', 'integer', $this);
				case 'Grant':
					return new QQNodeGrant('grant_id', 'Grant', 'integer', $this);
				case 'CasesAsCase':
					return new QQNodeAdvocateCasesAsCase($this);

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
	 * @property-read QQNode $LoginId
	 * @property-read QQNodeLogin $Login
	 * @property-read QQNode $GrantId
	 * @property-read QQNodeGrant $Grant
	 * @property-read QQNodeAdvocateCasesAsCase $CasesAsCase
	 * @property-read QQNode $_PrimaryKeyNode
	 */
	class QQReverseReferenceNodeAdvocate extends QQReverseReferenceNode {
		protected $strTableName = 'advocate';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'Advocate';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'LoginId':
					return new QQNode('login_id', 'LoginId', 'integer', $this);
				case 'Login':
					return new QQNodeLogin('login_id', 'Login', 'integer', $this);
				case 'GrantId':
					return new QQNode('grant_id', 'GrantId', 'integer', $this);
				case 'Grant':
					return new QQNodeGrant('grant_id', 'Grant', 'integer', $this);
				case 'CasesAsCase':
					return new QQNodeAdvocateCasesAsCase($this);

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