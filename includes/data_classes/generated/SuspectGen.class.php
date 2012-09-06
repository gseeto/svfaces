<?php
	/**
	 * The abstract SuspectGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Suspect subclass which
	 * extends this SuspectGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Suspect class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $Id the value for intId (Read-Only PK)
	 * @property string $FirstName the value for strFirstName 
	 * @property string $LastName the value for strLastName 
	 * @property QDateTime $DateOfBirth the value for dttDateOfBirth 
	 * @property integer $Pfd the value for intPfd 
	 * @property string $Information the value for strInformation 
	 * @property Cases $_CasesAsCase the value for the private _objCasesAsCase (Read-Only) if set due to an expansion on the case_suspect_assn association table
	 * @property Cases[] $_CasesAsCaseArray the value for the private _objCasesAsCaseArray (Read-Only) if set due to an ExpandAsArray on the case_suspect_assn association table
	 * @property boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class SuspectGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column suspect.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column suspect.first_name
		 * @var string strFirstName
		 */
		protected $strFirstName;
		const FirstNameMaxLength = 255;
		const FirstNameDefault = null;


		/**
		 * Protected member variable that maps to the database column suspect.last_name
		 * @var string strLastName
		 */
		protected $strLastName;
		const LastNameMaxLength = 255;
		const LastNameDefault = null;


		/**
		 * Protected member variable that maps to the database column suspect.date_of_birth
		 * @var QDateTime dttDateOfBirth
		 */
		protected $dttDateOfBirth;
		const DateOfBirthDefault = null;


		/**
		 * Protected member variable that maps to the database column suspect.pfd
		 * @var integer intPfd
		 */
		protected $intPfd;
		const PfdDefault = null;


		/**
		 * Protected member variable that maps to the database column suspect.information
		 * @var string strInformation
		 */
		protected $strInformation;
		const InformationMaxLength = 1024;
		const InformationDefault = null;


		/**
		 * Private member variable that stores a reference to a single CasesAsCase object
		 * (of type Cases), if this Suspect object was restored with
		 * an expansion on the case_suspect_assn association table.
		 * @var Cases _objCasesAsCase;
		 */
		private $_objCasesAsCase;

		/**
		 * Private member variable that stores a reference to an array of CasesAsCase objects
		 * (of type Cases[]), if this Suspect object was restored with
		 * an ExpandAsArray on the case_suspect_assn association table.
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
		 * Load a Suspect from PK Info
		 * @param integer $intId
		 * @return Suspect
		 */
		public static function Load($intId) {
			// Use QuerySingle to Perform the Query
			return Suspect::QuerySingle(
				QQ::Equal(QQN::Suspect()->Id, $intId)
			);
		}

		/**
		 * Load all Suspects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Suspect[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call Suspect::QueryArray to perform the LoadAll query
			try {
				return Suspect::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Suspects
		 * @return int
		 */
		public static function CountAll() {
			// Call Suspect::QueryCount to perform the CountAll query
			return Suspect::QueryCount(QQ::All());
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
			$objDatabase = Suspect::GetDatabase();

			// Create/Build out the QueryBuilder object with Suspect-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'suspect');
			Suspect::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('suspect');

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
		 * Static Qcodo Query method to query for a single Suspect object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Suspect the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Suspect::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Instantiate a new Suspect object and return it

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Suspect::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Suspect::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcodo Query method to query for an array of Suspect objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Suspect[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Suspect::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Suspect::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = Suspect::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcodo Query method to query for a count of Suspect objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Suspect::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Suspect::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'suspect_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with Suspect-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				Suspect::GetSelectFields($objQueryBuilder);
				Suspect::GetFromFields($objQueryBuilder);

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
			return Suspect::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Suspect
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'suspect';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			$objBuilder->AddSelectItem($strTableName, 'first_name', $strAliasPrefix . 'first_name');
			$objBuilder->AddSelectItem($strTableName, 'last_name', $strAliasPrefix . 'last_name');
			$objBuilder->AddSelectItem($strTableName, 'date_of_birth', $strAliasPrefix . 'date_of_birth');
			$objBuilder->AddSelectItem($strTableName, 'pfd', $strAliasPrefix . 'pfd');
			$objBuilder->AddSelectItem($strTableName, 'information', $strAliasPrefix . 'information');
		}




		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Suspect from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Suspect::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $objPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Suspect
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
					$strAliasPrefix = 'suspect__';

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
				else if ($strAliasPrefix == 'suspect__')
					$strAliasPrefix = null;
			}

			// Create a new instance of the Suspect object
			$objToReturn = new Suspect();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'first_name', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'first_name'] : $strAliasPrefix . 'first_name';
			$objToReturn->strFirstName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'last_name', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'last_name'] : $strAliasPrefix . 'last_name';
			$objToReturn->strLastName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'date_of_birth', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'date_of_birth'] : $strAliasPrefix . 'date_of_birth';
			$objToReturn->dttDateOfBirth = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAliasName = array_key_exists($strAliasPrefix . 'pfd', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'pfd'] : $strAliasPrefix . 'pfd';
			$objToReturn->intPfd = $objDbRow->GetColumn($strAliasName, 'Integer');
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
				$strAliasPrefix = 'suspect__';



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
		 * Instantiate an array of Suspects from a Database Result
		 * @param QDatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Suspect[]
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
					$objItem = Suspect::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Suspect::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate a single Suspect object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Suspect next row resulting from the query
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
			return Suspect::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Suspect object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @return Suspect
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return Suspect::QuerySingle(
				QQ::Equal(QQN::Suspect()->Id, $intId)
			, $objOptionalClauses
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////
			/**
		 * Load an array of Cases objects for a given CasesAsCase
		 * via the case_suspect_assn table
		 * @param integer $intCaseId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Suspect[]
		*/
		public static function LoadArrayByCasesAsCase($intCaseId, $objOptionalClauses = null) {
			// Call Suspect::QueryArray to perform the LoadArrayByCasesAsCase query
			try {
				return Suspect::QueryArray(
					QQ::Equal(QQN::Suspect()->CasesAsCase->CaseId, $intCaseId),
					$objOptionalClauses
				);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Suspects for a given CasesAsCase
		 * via the case_suspect_assn table
		 * @param integer $intCaseId
		 * @return int
		*/
		public static function CountByCasesAsCase($intCaseId, $objOptionalClauses = null) {
			return Suspect::QueryCount(
				QQ::Equal(QQN::Suspect()->CasesAsCase->CaseId, $intCaseId),
				$objOptionalClauses
			);
		}




		//////////////////////////////////////
		// SAVE, DELETE, RELOAD and JOURNALING
		//////////////////////////////////////

		/**
		 * Save this Suspect
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Suspect::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `suspect` (
							`first_name`,
							`last_name`,
							`date_of_birth`,
							`pfd`,
							`information`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strFirstName) . ',
							' . $objDatabase->SqlVariable($this->strLastName) . ',
							' . $objDatabase->SqlVariable($this->dttDateOfBirth) . ',
							' . $objDatabase->SqlVariable($this->intPfd) . ',
							' . $objDatabase->SqlVariable($this->strInformation) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('suspect', 'id');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('INSERT');

				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`suspect`
						SET
							`first_name` = ' . $objDatabase->SqlVariable($this->strFirstName) . ',
							`last_name` = ' . $objDatabase->SqlVariable($this->strLastName) . ',
							`date_of_birth` = ' . $objDatabase->SqlVariable($this->dttDateOfBirth) . ',
							`pfd` = ' . $objDatabase->SqlVariable($this->intPfd) . ',
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
		 * Delete this Suspect
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Suspect with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Suspect::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`suspect`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');

			// Journaling
			if ($objDatabase->JournalingDatabase) $this->Journal('DELETE');
		}

		/**
		 * Delete all Suspects
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Suspect::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`suspect`');
		}

		/**
		 * Truncate suspect table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Suspect::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `suspect`');
		}

		/**
		 * Reload this Suspect from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Suspect object.');

			// Reload the Object
			$objReloaded = Suspect::Load($this->intId);

			// Update $this's local variables to match
			$this->strFirstName = $objReloaded->strFirstName;
			$this->strLastName = $objReloaded->strLastName;
			$this->dttDateOfBirth = $objReloaded->dttDateOfBirth;
			$this->intPfd = $objReloaded->intPfd;
			$this->strInformation = $objReloaded->strInformation;
		}

		/**
		 * Journals the current object into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function Journal($strJournalCommand) {
			$objDatabase = Suspect::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `suspect` (
					`id`,
					`first_name`,
					`last_name`,
					`date_of_birth`,
					`pfd`,
					`information`,
					__sys_login_id,
					__sys_action,
					__sys_date
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($this->strFirstName) . ',
					' . $objDatabase->SqlVariable($this->strLastName) . ',
					' . $objDatabase->SqlVariable($this->dttDateOfBirth) . ',
					' . $objDatabase->SqlVariable($this->intPfd) . ',
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
		 * @return Suspect[]
		 */
		public static function GetJournalForId($intId) {
			$objDatabase = Suspect::GetDatabase()->JournalingDatabase;

			$objResult = $objDatabase->Query('SELECT * FROM suspect WHERE id = ' .
				$objDatabase->SqlVariable($intId) . ' ORDER BY __sys_date');

			return Suspect::InstantiateDbResult($objResult);
		}

		/**
		 * Gets the historical journal for this object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @return Suspect[]
		 */
		public function GetJournal() {
			return Suspect::GetJournalForId($this->intId);
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

				case 'FirstName':
					// Gets the value for strFirstName 
					// @return string
					return $this->strFirstName;

				case 'LastName':
					// Gets the value for strLastName 
					// @return string
					return $this->strLastName;

				case 'DateOfBirth':
					// Gets the value for dttDateOfBirth 
					// @return QDateTime
					return $this->dttDateOfBirth;

				case 'Pfd':
					// Gets the value for intPfd 
					// @return integer
					return $this->intPfd;

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

				case '_CasesAsCase':
					// Gets the value for the private _objCasesAsCase (Read-Only)
					// if set due to an expansion on the case_suspect_assn association table
					// @return Cases
					return $this->_objCasesAsCase;

				case '_CasesAsCaseArray':
					// Gets the value for the private _objCasesAsCaseArray (Read-Only)
					// if set due to an ExpandAsArray on the case_suspect_assn association table
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
				case 'FirstName':
					// Sets the value for strFirstName 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strFirstName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'LastName':
					// Sets the value for strLastName 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strLastName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'DateOfBirth':
					// Sets the value for dttDateOfBirth 
					// @param QDateTime $mixValue
					// @return QDateTime
					try {
						return ($this->dttDateOfBirth = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Pfd':
					// Sets the value for intPfd 
					// @param integer $mixValue
					// @return integer
					try {
						return ($this->intPfd = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

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
				return Cases::LoadArrayBySuspectAsCase($this->intId, $objOptionalClauses);
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

			return Cases::CountBySuspectAsCase($this->intId);
		}

		/**
		 * Checks to see if an association exists with a specific CasesAsCase
		 * @param Cases $objCases
		 * @return bool
		*/
		public function IsCasesAsCaseAssociated(Cases $objCases) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsCasesAsCaseAssociated on this unsaved Suspect.');
			if ((is_null($objCases->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsCasesAsCaseAssociated on this Suspect with an unsaved Cases.');

			$intRowCount = Suspect::QueryCount(
				QQ::AndCondition(
					QQ::Equal(QQN::Suspect()->Id, $this->intId),
					QQ::Equal(QQN::Suspect()->CasesAsCase->CaseId, $objCases->Id)
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
			$objDatabase = Suspect::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `case_suspect_assn` (
					`suspect_id`,
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
			$objDatabase = Suspect::GetDatabase()->JournalingDatabase;

			return $objDatabase->Query('SELECT * FROM case_suspect_assn WHERE suspect_id = ' .
				$objDatabase->SqlVariable($intId) . ' ORDER BY __sys_date');
		}

		/**
		 * Gets the historical journal for this object's CasesAsCase relationship from the log database.
		 * @return QDatabaseResult $objResult
		 */
		public function GetJournalCasesAsCaseAssociation() {
			return Suspect::GetJournalCasesAsCaseAssociationForId($this->intId);
		}

		/**
		 * Associates a CasesAsCase
		 * @param Cases $objCases
		 * @return void
		*/ 
		public function AssociateCasesAsCase(Cases $objCases) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateCasesAsCase on this unsaved Suspect.');
			if ((is_null($objCases->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateCasesAsCase on this Suspect with an unsaved Cases.');

			// Get the Database Object for this Class
			$objDatabase = Suspect::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				INSERT INTO `case_suspect_assn` (
					`suspect_id`,
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
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCasesAsCase on this unsaved Suspect.');
			if ((is_null($objCases->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCasesAsCase on this Suspect with an unsaved Cases.');

			// Get the Database Object for this Class
			$objDatabase = Suspect::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`case_suspect_assn`
				WHERE
					`suspect_id` = ' . $objDatabase->SqlVariable($this->intId) . ' AND
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
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAllCasesAsCaseArray on this unsaved Suspect.');

			// Get the Database Object for this Class
			$objDatabase = Suspect::GetDatabase();

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objResult = $objDatabase->Query('SELECT `case_id` AS associated_id FROM `case_suspect_assn` WHERE `suspect_id` = ' . $objDatabase->SqlVariable($this->intId));
				while ($objRow = $objResult->GetNextRow()) {
					$this->JournalCasesAsCaseAssociation($objRow->GetColumn('associated_id'), 'DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`case_suspect_assn`
				WHERE
					`suspect_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}




		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Suspect"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="FirstName" type="xsd:string"/>';
			$strToReturn .= '<element name="LastName" type="xsd:string"/>';
			$strToReturn .= '<element name="DateOfBirth" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="Pfd" type="xsd:int"/>';
			$strToReturn .= '<element name="Information" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Suspect', $strComplexTypeArray)) {
				$strComplexTypeArray['Suspect'] = Suspect::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Suspect::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Suspect();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if (property_exists($objSoapObject, 'FirstName'))
				$objToReturn->strFirstName = $objSoapObject->FirstName;
			if (property_exists($objSoapObject, 'LastName'))
				$objToReturn->strLastName = $objSoapObject->LastName;
			if (property_exists($objSoapObject, 'DateOfBirth'))
				$objToReturn->dttDateOfBirth = new QDateTime($objSoapObject->DateOfBirth);
			if (property_exists($objSoapObject, 'Pfd'))
				$objToReturn->intPfd = $objSoapObject->Pfd;
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
				array_push($objArrayToReturn, Suspect::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->dttDateOfBirth)
				$objObject->dttDateOfBirth = $objObject->dttDateOfBirth->__toString(QDateTime::FormatSoap);
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
	class QQNodeSuspectCasesAsCase extends QQAssociationNode {
		protected $strType = 'association';
		protected $strName = 'casesascase';

		protected $strTableName = 'case_suspect_assn';
		protected $strPrimaryKey = 'suspect_id';
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
	 * @property-read QQNode $FirstName
	 * @property-read QQNode $LastName
	 * @property-read QQNode $DateOfBirth
	 * @property-read QQNode $Pfd
	 * @property-read QQNode $Information
	 * @property-read QQNodeSuspectCasesAsCase $CasesAsCase
	 */
	class QQNodeSuspect extends QQNode {
		protected $strTableName = 'suspect';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'Suspect';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'FirstName':
					return new QQNode('first_name', 'FirstName', 'string', $this);
				case 'LastName':
					return new QQNode('last_name', 'LastName', 'string', $this);
				case 'DateOfBirth':
					return new QQNode('date_of_birth', 'DateOfBirth', 'QDateTime', $this);
				case 'Pfd':
					return new QQNode('pfd', 'Pfd', 'integer', $this);
				case 'Information':
					return new QQNode('information', 'Information', 'string', $this);
				case 'CasesAsCase':
					return new QQNodeSuspectCasesAsCase($this);

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
	 * @property-read QQNode $FirstName
	 * @property-read QQNode $LastName
	 * @property-read QQNode $DateOfBirth
	 * @property-read QQNode $Pfd
	 * @property-read QQNode $Information
	 * @property-read QQNodeSuspectCasesAsCase $CasesAsCase
	 * @property-read QQNode $_PrimaryKeyNode
	 */
	class QQReverseReferenceNodeSuspect extends QQReverseReferenceNode {
		protected $strTableName = 'suspect';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'Suspect';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'FirstName':
					return new QQNode('first_name', 'FirstName', 'string', $this);
				case 'LastName':
					return new QQNode('last_name', 'LastName', 'string', $this);
				case 'DateOfBirth':
					return new QQNode('date_of_birth', 'DateOfBirth', 'QDateTime', $this);
				case 'Pfd':
					return new QQNode('pfd', 'Pfd', 'integer', $this);
				case 'Information':
					return new QQNode('information', 'Information', 'string', $this);
				case 'CasesAsCase':
					return new QQNodeSuspectCasesAsCase($this);

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