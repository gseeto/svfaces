<?php
	/**
	 * The abstract AddressGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Address subclass which
	 * extends this AddressGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Address class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $Id the value for intId (Read-Only PK)
	 * @property string $Address1 the value for strAddress1 
	 * @property string $Address2 the value for strAddress2 
	 * @property string $Address3 the value for strAddress3 
	 * @property string $City the value for strCity 
	 * @property string $State the value for strState 
	 * @property string $Zipcode the value for strZipcode 
	 * @property string $Country the value for strCountry 
	 * @property integer $PersonId the value for intPersonId 
	 * @property Person $Person the value for the Person object referenced by intPersonId 
	 * @property boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class AddressGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column address.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column address.address_1
		 * @var string strAddress1
		 */
		protected $strAddress1;
		const Address1MaxLength = 255;
		const Address1Default = null;


		/**
		 * Protected member variable that maps to the database column address.address_2
		 * @var string strAddress2
		 */
		protected $strAddress2;
		const Address2MaxLength = 255;
		const Address2Default = null;


		/**
		 * Protected member variable that maps to the database column address.address_3
		 * @var string strAddress3
		 */
		protected $strAddress3;
		const Address3MaxLength = 255;
		const Address3Default = null;


		/**
		 * Protected member variable that maps to the database column address.city
		 * @var string strCity
		 */
		protected $strCity;
		const CityMaxLength = 255;
		const CityDefault = null;


		/**
		 * Protected member variable that maps to the database column address.state
		 * @var string strState
		 */
		protected $strState;
		const StateMaxLength = 255;
		const StateDefault = null;


		/**
		 * Protected member variable that maps to the database column address.zipcode
		 * @var string strZipcode
		 */
		protected $strZipcode;
		const ZipcodeMaxLength = 10;
		const ZipcodeDefault = null;


		/**
		 * Protected member variable that maps to the database column address.country
		 * @var string strCountry
		 */
		protected $strCountry;
		const CountryMaxLength = 255;
		const CountryDefault = null;


		/**
		 * Protected member variable that maps to the database column address.person_id
		 * @var integer intPersonId
		 */
		protected $intPersonId;
		const PersonIdDefault = null;


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
		 * in the database column address.person_id.
		 *
		 * NOTE: Always use the Person property getter to correctly retrieve this Person object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Person objPerson
		 */
		protected $objPerson;





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
		 * Load a Address from PK Info
		 * @param integer $intId
		 * @return Address
		 */
		public static function Load($intId) {
			// Use QuerySingle to Perform the Query
			return Address::QuerySingle(
				QQ::Equal(QQN::Address()->Id, $intId)
			);
		}

		/**
		 * Load all Addresses
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Address[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call Address::QueryArray to perform the LoadAll query
			try {
				return Address::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Addresses
		 * @return int
		 */
		public static function CountAll() {
			// Call Address::QueryCount to perform the CountAll query
			return Address::QueryCount(QQ::All());
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
			$objDatabase = Address::GetDatabase();

			// Create/Build out the QueryBuilder object with Address-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'address');
			Address::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('address');

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
		 * Static Qcodo Query method to query for a single Address object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Address the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Address::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Instantiate a new Address object and return it

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Address::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Address::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcodo Query method to query for an array of Address objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Address[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Address::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Address::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = Address::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcodo Query method to query for a count of Address objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Address::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Address::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'address_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with Address-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				Address::GetSelectFields($objQueryBuilder);
				Address::GetFromFields($objQueryBuilder);

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
			return Address::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Address
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'address';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			$objBuilder->AddSelectItem($strTableName, 'address_1', $strAliasPrefix . 'address_1');
			$objBuilder->AddSelectItem($strTableName, 'address_2', $strAliasPrefix . 'address_2');
			$objBuilder->AddSelectItem($strTableName, 'address_3', $strAliasPrefix . 'address_3');
			$objBuilder->AddSelectItem($strTableName, 'city', $strAliasPrefix . 'city');
			$objBuilder->AddSelectItem($strTableName, 'state', $strAliasPrefix . 'state');
			$objBuilder->AddSelectItem($strTableName, 'zipcode', $strAliasPrefix . 'zipcode');
			$objBuilder->AddSelectItem($strTableName, 'country', $strAliasPrefix . 'country');
			$objBuilder->AddSelectItem($strTableName, 'person_id', $strAliasPrefix . 'person_id');
		}




		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Address from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Address::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $objPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Address
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $objPreviousItem = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow)
				return null;


			// Create a new instance of the Address object
			$objToReturn = new Address();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'address_1', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'address_1'] : $strAliasPrefix . 'address_1';
			$objToReturn->strAddress1 = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'address_2', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'address_2'] : $strAliasPrefix . 'address_2';
			$objToReturn->strAddress2 = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'address_3', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'address_3'] : $strAliasPrefix . 'address_3';
			$objToReturn->strAddress3 = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'city', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'city'] : $strAliasPrefix . 'city';
			$objToReturn->strCity = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'state', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'state'] : $strAliasPrefix . 'state';
			$objToReturn->strState = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'zipcode', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'zipcode'] : $strAliasPrefix . 'zipcode';
			$objToReturn->strZipcode = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'country', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'country'] : $strAliasPrefix . 'country';
			$objToReturn->strCountry = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'person_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'person_id'] : $strAliasPrefix . 'person_id';
			$objToReturn->intPersonId = $objDbRow->GetColumn($strAliasName, 'Integer');

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'address__';

			// Check for Person Early Binding
			$strAlias = $strAliasPrefix . 'person_id__victim_witness_num';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objPerson = Person::InstantiateDbRow($objDbRow, $strAliasPrefix . 'person_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of Addresses from a Database Result
		 * @param QDatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Address[]
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
					$objItem = Address::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Address::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate a single Address object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Address next row resulting from the query
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
			return Address::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Address object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @return Address
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return Address::QuerySingle(
				QQ::Equal(QQN::Address()->Id, $intId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of Address objects,
		 * by PersonId Index(es)
		 * @param integer $intPersonId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Address[]
		*/
		public static function LoadArrayByPersonId($intPersonId, $objOptionalClauses = null) {
			// Call Address::QueryArray to perform the LoadArrayByPersonId query
			try {
				return Address::QueryArray(
					QQ::Equal(QQN::Address()->PersonId, $intPersonId),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Addresses
		 * by PersonId Index(es)
		 * @param integer $intPersonId
		 * @return int
		*/
		public static function CountByPersonId($intPersonId, $objOptionalClauses = null) {
			// Call Address::QueryCount to perform the CountByPersonId query
			return Address::QueryCount(
				QQ::Equal(QQN::Address()->PersonId, $intPersonId)
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
		 * Save this Address
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Address::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `address` (
							`address_1`,
							`address_2`,
							`address_3`,
							`city`,
							`state`,
							`zipcode`,
							`country`,
							`person_id`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strAddress1) . ',
							' . $objDatabase->SqlVariable($this->strAddress2) . ',
							' . $objDatabase->SqlVariable($this->strAddress3) . ',
							' . $objDatabase->SqlVariable($this->strCity) . ',
							' . $objDatabase->SqlVariable($this->strState) . ',
							' . $objDatabase->SqlVariable($this->strZipcode) . ',
							' . $objDatabase->SqlVariable($this->strCountry) . ',
							' . $objDatabase->SqlVariable($this->intPersonId) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('address', 'id');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('INSERT');

				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`address`
						SET
							`address_1` = ' . $objDatabase->SqlVariable($this->strAddress1) . ',
							`address_2` = ' . $objDatabase->SqlVariable($this->strAddress2) . ',
							`address_3` = ' . $objDatabase->SqlVariable($this->strAddress3) . ',
							`city` = ' . $objDatabase->SqlVariable($this->strCity) . ',
							`state` = ' . $objDatabase->SqlVariable($this->strState) . ',
							`zipcode` = ' . $objDatabase->SqlVariable($this->strZipcode) . ',
							`country` = ' . $objDatabase->SqlVariable($this->strCountry) . ',
							`person_id` = ' . $objDatabase->SqlVariable($this->intPersonId) . '
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
		 * Delete this Address
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Address with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Address::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`address`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');

			// Journaling
			if ($objDatabase->JournalingDatabase) $this->Journal('DELETE');
		}

		/**
		 * Delete all Addresses
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Address::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`address`');
		}

		/**
		 * Truncate address table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Address::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `address`');
		}

		/**
		 * Reload this Address from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Address object.');

			// Reload the Object
			$objReloaded = Address::Load($this->intId);

			// Update $this's local variables to match
			$this->strAddress1 = $objReloaded->strAddress1;
			$this->strAddress2 = $objReloaded->strAddress2;
			$this->strAddress3 = $objReloaded->strAddress3;
			$this->strCity = $objReloaded->strCity;
			$this->strState = $objReloaded->strState;
			$this->strZipcode = $objReloaded->strZipcode;
			$this->strCountry = $objReloaded->strCountry;
			$this->PersonId = $objReloaded->PersonId;
		}

		/**
		 * Journals the current object into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function Journal($strJournalCommand) {
			$objDatabase = Address::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `address` (
					`id`,
					`address_1`,
					`address_2`,
					`address_3`,
					`city`,
					`state`,
					`zipcode`,
					`country`,
					`person_id`,
					__sys_login_id,
					__sys_action,
					__sys_date
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($this->strAddress1) . ',
					' . $objDatabase->SqlVariable($this->strAddress2) . ',
					' . $objDatabase->SqlVariable($this->strAddress3) . ',
					' . $objDatabase->SqlVariable($this->strCity) . ',
					' . $objDatabase->SqlVariable($this->strState) . ',
					' . $objDatabase->SqlVariable($this->strZipcode) . ',
					' . $objDatabase->SqlVariable($this->strCountry) . ',
					' . $objDatabase->SqlVariable($this->intPersonId) . ',
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
		 * @return Address[]
		 */
		public static function GetJournalForId($intId) {
			$objDatabase = Address::GetDatabase()->JournalingDatabase;

			$objResult = $objDatabase->Query('SELECT * FROM address WHERE id = ' .
				$objDatabase->SqlVariable($intId) . ' ORDER BY __sys_date');

			return Address::InstantiateDbResult($objResult);
		}

		/**
		 * Gets the historical journal for this object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @return Address[]
		 */
		public function GetJournal() {
			return Address::GetJournalForId($this->intId);
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

				case 'Address1':
					// Gets the value for strAddress1 
					// @return string
					return $this->strAddress1;

				case 'Address2':
					// Gets the value for strAddress2 
					// @return string
					return $this->strAddress2;

				case 'Address3':
					// Gets the value for strAddress3 
					// @return string
					return $this->strAddress3;

				case 'City':
					// Gets the value for strCity 
					// @return string
					return $this->strCity;

				case 'State':
					// Gets the value for strState 
					// @return string
					return $this->strState;

				case 'Zipcode':
					// Gets the value for strZipcode 
					// @return string
					return $this->strZipcode;

				case 'Country':
					// Gets the value for strCountry 
					// @return string
					return $this->strCountry;

				case 'PersonId':
					// Gets the value for intPersonId 
					// @return integer
					return $this->intPersonId;


				///////////////////
				// Member Objects
				///////////////////
				case 'Person':
					// Gets the value for the Person object referenced by intPersonId 
					// @return Person
					try {
						if ((!$this->objPerson) && (!is_null($this->intPersonId)))
							$this->objPerson = Person::Load($this->intPersonId);
						return $this->objPerson;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////


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
				case 'Address1':
					// Sets the value for strAddress1 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strAddress1 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Address2':
					// Sets the value for strAddress2 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strAddress2 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Address3':
					// Sets the value for strAddress3 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strAddress3 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'City':
					// Sets the value for strCity 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strCity = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'State':
					// Sets the value for strState 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strState = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Zipcode':
					// Sets the value for strZipcode 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strZipcode = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Country':
					// Sets the value for strCountry 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strCountry = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PersonId':
					// Sets the value for intPersonId 
					// @param integer $mixValue
					// @return integer
					try {
						$this->objPerson = null;
						return ($this->intPersonId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'Person':
					// Sets the value for the Person object referenced by intPersonId 
					// @param Person $mixValue
					// @return Person
					if (is_null($mixValue)) {
						$this->intPersonId = null;
						$this->objPerson = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Person object
						try {
							$mixValue = QType::Cast($mixValue, 'Person');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Person object
						if (is_null($mixValue->VictimWitnessNum))
							throw new QCallerException('Unable to set an unsaved Person for this Address');

						// Update Local Member Variables
						$this->objPerson = $mixValue;
						$this->intPersonId = $mixValue->VictimWitnessNum;

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





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Address"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="Address1" type="xsd:string"/>';
			$strToReturn .= '<element name="Address2" type="xsd:string"/>';
			$strToReturn .= '<element name="Address3" type="xsd:string"/>';
			$strToReturn .= '<element name="City" type="xsd:string"/>';
			$strToReturn .= '<element name="State" type="xsd:string"/>';
			$strToReturn .= '<element name="Zipcode" type="xsd:string"/>';
			$strToReturn .= '<element name="Country" type="xsd:string"/>';
			$strToReturn .= '<element name="Person" type="xsd1:Person"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Address', $strComplexTypeArray)) {
				$strComplexTypeArray['Address'] = Address::GetSoapComplexTypeXml();
				Person::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Address::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Address();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if (property_exists($objSoapObject, 'Address1'))
				$objToReturn->strAddress1 = $objSoapObject->Address1;
			if (property_exists($objSoapObject, 'Address2'))
				$objToReturn->strAddress2 = $objSoapObject->Address2;
			if (property_exists($objSoapObject, 'Address3'))
				$objToReturn->strAddress3 = $objSoapObject->Address3;
			if (property_exists($objSoapObject, 'City'))
				$objToReturn->strCity = $objSoapObject->City;
			if (property_exists($objSoapObject, 'State'))
				$objToReturn->strState = $objSoapObject->State;
			if (property_exists($objSoapObject, 'Zipcode'))
				$objToReturn->strZipcode = $objSoapObject->Zipcode;
			if (property_exists($objSoapObject, 'Country'))
				$objToReturn->strCountry = $objSoapObject->Country;
			if ((property_exists($objSoapObject, 'Person')) &&
				($objSoapObject->Person))
				$objToReturn->Person = Person::GetObjectFromSoapObject($objSoapObject->Person);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Address::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objPerson)
				$objObject->objPerson = Person::GetSoapObjectFromObject($objObject->objPerson, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intPersonId = null;
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCODO QUERY
	/////////////////////////////////////

	/**
	 * @property-read QQNode $Id
	 * @property-read QQNode $Address1
	 * @property-read QQNode $Address2
	 * @property-read QQNode $Address3
	 * @property-read QQNode $City
	 * @property-read QQNode $State
	 * @property-read QQNode $Zipcode
	 * @property-read QQNode $Country
	 * @property-read QQNode $PersonId
	 * @property-read QQNodePerson $Person
	 */
	class QQNodeAddress extends QQNode {
		protected $strTableName = 'address';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'Address';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'Address1':
					return new QQNode('address_1', 'Address1', 'string', $this);
				case 'Address2':
					return new QQNode('address_2', 'Address2', 'string', $this);
				case 'Address3':
					return new QQNode('address_3', 'Address3', 'string', $this);
				case 'City':
					return new QQNode('city', 'City', 'string', $this);
				case 'State':
					return new QQNode('state', 'State', 'string', $this);
				case 'Zipcode':
					return new QQNode('zipcode', 'Zipcode', 'string', $this);
				case 'Country':
					return new QQNode('country', 'Country', 'string', $this);
				case 'PersonId':
					return new QQNode('person_id', 'PersonId', 'integer', $this);
				case 'Person':
					return new QQNodePerson('person_id', 'Person', 'integer', $this);

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
	 * @property-read QQNode $Address1
	 * @property-read QQNode $Address2
	 * @property-read QQNode $Address3
	 * @property-read QQNode $City
	 * @property-read QQNode $State
	 * @property-read QQNode $Zipcode
	 * @property-read QQNode $Country
	 * @property-read QQNode $PersonId
	 * @property-read QQNodePerson $Person
	 * @property-read QQNode $_PrimaryKeyNode
	 */
	class QQReverseReferenceNodeAddress extends QQReverseReferenceNode {
		protected $strTableName = 'address';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'Address';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'Address1':
					return new QQNode('address_1', 'Address1', 'string', $this);
				case 'Address2':
					return new QQNode('address_2', 'Address2', 'string', $this);
				case 'Address3':
					return new QQNode('address_3', 'Address3', 'string', $this);
				case 'City':
					return new QQNode('city', 'City', 'string', $this);
				case 'State':
					return new QQNode('state', 'State', 'string', $this);
				case 'Zipcode':
					return new QQNode('zipcode', 'Zipcode', 'string', $this);
				case 'Country':
					return new QQNode('country', 'Country', 'string', $this);
				case 'PersonId':
					return new QQNode('person_id', 'PersonId', 'integer', $this);
				case 'Person':
					return new QQNodePerson('person_id', 'Person', 'integer', $this);

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