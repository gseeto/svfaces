<?php
	/**
	 * The abstract CasesGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Cases subclass which
	 * extends this CasesGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Cases class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $Id the value for intId (Read-Only PK)
	 * @property integer $CrimeTypeId the value for intCrimeTypeId 
	 * @property QDateTime $CrimeDate the value for dttCrimeDate 
	 * @property integer $AgencyReportedToId the value for intAgencyReportedToId 
	 * @property integer $CrimeReportNumber the value for intCrimeReportNumber 
	 * @property integer $FamilyLawNumber the value for intFamilyLawNumber 
	 * @property integer $CourtId the value for intCourtId 
	 * @property integer $CaseStatusId the value for intCaseStatusId 
	 * @property integer $PrimaryPersonId the value for intPrimaryPersonId 
	 * @property Agency $AgencyReportedTo the value for the Agency object referenced by intAgencyReportedToId 
	 * @property CourtInformation $Court the value for the CourtInformation object referenced by intCourtId 
	 * @property CaseStatus $CaseStatus the value for the CaseStatus object referenced by intCaseStatusId 
	 * @property Advocate $_AdvocateAsCase the value for the private _objAdvocateAsCase (Read-Only) if set due to an expansion on the advocate_case_assn association table
	 * @property Advocate[] $_AdvocateAsCaseArray the value for the private _objAdvocateAsCaseArray (Read-Only) if set due to an ExpandAsArray on the advocate_case_assn association table
	 * @property Suspect $_SuspectAsCase the value for the private _objSuspectAsCase (Read-Only) if set due to an expansion on the case_suspect_assn association table
	 * @property Suspect[] $_SuspectAsCaseArray the value for the private _objSuspectAsCaseArray (Read-Only) if set due to an ExpandAsArray on the case_suspect_assn association table
	 * @property Person $_PersonAsCase the value for the private _objPersonAsCase (Read-Only) if set due to an expansion on the person_case_assn association table
	 * @property Person[] $_PersonAsCaseArray the value for the private _objPersonAsCaseArray (Read-Only) if set due to an ExpandAsArray on the person_case_assn association table
	 * @property boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class CasesGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column cases.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column cases.crime_type_id
		 * @var integer intCrimeTypeId
		 */
		protected $intCrimeTypeId;
		const CrimeTypeIdDefault = null;


		/**
		 * Protected member variable that maps to the database column cases.crime_date
		 * @var QDateTime dttCrimeDate
		 */
		protected $dttCrimeDate;
		const CrimeDateDefault = null;


		/**
		 * Protected member variable that maps to the database column cases.agency_reported_to_id
		 * @var integer intAgencyReportedToId
		 */
		protected $intAgencyReportedToId;
		const AgencyReportedToIdDefault = null;


		/**
		 * Protected member variable that maps to the database column cases.crime_report_number
		 * @var integer intCrimeReportNumber
		 */
		protected $intCrimeReportNumber;
		const CrimeReportNumberDefault = null;


		/**
		 * Protected member variable that maps to the database column cases.family_law_number
		 * @var integer intFamilyLawNumber
		 */
		protected $intFamilyLawNumber;
		const FamilyLawNumberDefault = null;


		/**
		 * Protected member variable that maps to the database column cases.court_id
		 * @var integer intCourtId
		 */
		protected $intCourtId;
		const CourtIdDefault = null;


		/**
		 * Protected member variable that maps to the database column cases.case_status_id
		 * @var integer intCaseStatusId
		 */
		protected $intCaseStatusId;
		const CaseStatusIdDefault = null;


		/**
		 * Protected member variable that maps to the database column cases.primary_person_id
		 * @var integer intPrimaryPersonId
		 */
		protected $intPrimaryPersonId;
		const PrimaryPersonIdDefault = null;


		/**
		 * Private member variable that stores a reference to a single AdvocateAsCase object
		 * (of type Advocate), if this Cases object was restored with
		 * an expansion on the advocate_case_assn association table.
		 * @var Advocate _objAdvocateAsCase;
		 */
		private $_objAdvocateAsCase;

		/**
		 * Private member variable that stores a reference to an array of AdvocateAsCase objects
		 * (of type Advocate[]), if this Cases object was restored with
		 * an ExpandAsArray on the advocate_case_assn association table.
		 * @var Advocate[] _objAdvocateAsCaseArray;
		 */
		private $_objAdvocateAsCaseArray = array();

		/**
		 * Private member variable that stores a reference to a single SuspectAsCase object
		 * (of type Suspect), if this Cases object was restored with
		 * an expansion on the case_suspect_assn association table.
		 * @var Suspect _objSuspectAsCase;
		 */
		private $_objSuspectAsCase;

		/**
		 * Private member variable that stores a reference to an array of SuspectAsCase objects
		 * (of type Suspect[]), if this Cases object was restored with
		 * an ExpandAsArray on the case_suspect_assn association table.
		 * @var Suspect[] _objSuspectAsCaseArray;
		 */
		private $_objSuspectAsCaseArray = array();

		/**
		 * Private member variable that stores a reference to a single PersonAsCase object
		 * (of type Person), if this Cases object was restored with
		 * an expansion on the person_case_assn association table.
		 * @var Person _objPersonAsCase;
		 */
		private $_objPersonAsCase;

		/**
		 * Private member variable that stores a reference to an array of PersonAsCase objects
		 * (of type Person[]), if this Cases object was restored with
		 * an ExpandAsArray on the person_case_assn association table.
		 * @var Person[] _objPersonAsCaseArray;
		 */
		private $_objPersonAsCaseArray = array();

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
		 * in the database column cases.agency_reported_to_id.
		 *
		 * NOTE: Always use the AgencyReportedTo property getter to correctly retrieve this Agency object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Agency objAgencyReportedTo
		 */
		protected $objAgencyReportedTo;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column cases.court_id.
		 *
		 * NOTE: Always use the Court property getter to correctly retrieve this CourtInformation object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var CourtInformation objCourt
		 */
		protected $objCourt;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column cases.case_status_id.
		 *
		 * NOTE: Always use the CaseStatus property getter to correctly retrieve this CaseStatus object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var CaseStatus objCaseStatus
		 */
		protected $objCaseStatus;





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
		 * Load a Cases from PK Info
		 * @param integer $intId
		 * @return Cases
		 */
		public static function Load($intId) {
			// Use QuerySingle to Perform the Query
			return Cases::QuerySingle(
				QQ::Equal(QQN::Cases()->Id, $intId)
			);
		}

		/**
		 * Load all Caseses
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Cases[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call Cases::QueryArray to perform the LoadAll query
			try {
				return Cases::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Caseses
		 * @return int
		 */
		public static function CountAll() {
			// Call Cases::QueryCount to perform the CountAll query
			return Cases::QueryCount(QQ::All());
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
			$objDatabase = Cases::GetDatabase();

			// Create/Build out the QueryBuilder object with Cases-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'cases');
			Cases::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('cases');

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
		 * Static Qcodo Query method to query for a single Cases object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Cases the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Cases::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Instantiate a new Cases object and return it

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Cases::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Cases::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcodo Query method to query for an array of Cases objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Cases[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Cases::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Cases::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = Cases::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcodo Query method to query for a count of Cases objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Cases::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Cases::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'cases_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with Cases-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				Cases::GetSelectFields($objQueryBuilder);
				Cases::GetFromFields($objQueryBuilder);

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
			return Cases::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Cases
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'cases';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			$objBuilder->AddSelectItem($strTableName, 'crime_type_id', $strAliasPrefix . 'crime_type_id');
			$objBuilder->AddSelectItem($strTableName, 'crime_date', $strAliasPrefix . 'crime_date');
			$objBuilder->AddSelectItem($strTableName, 'agency_reported_to_id', $strAliasPrefix . 'agency_reported_to_id');
			$objBuilder->AddSelectItem($strTableName, 'crime_report_number', $strAliasPrefix . 'crime_report_number');
			$objBuilder->AddSelectItem($strTableName, 'family_law_number', $strAliasPrefix . 'family_law_number');
			$objBuilder->AddSelectItem($strTableName, 'court_id', $strAliasPrefix . 'court_id');
			$objBuilder->AddSelectItem($strTableName, 'case_status_id', $strAliasPrefix . 'case_status_id');
			$objBuilder->AddSelectItem($strTableName, 'primary_person_id', $strAliasPrefix . 'primary_person_id');
		}




		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Cases from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Cases::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $objPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Cases
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
					$strAliasPrefix = 'cases__';

				$strAlias = $strAliasPrefix . 'advocateascase__advocate_id__id';
				$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasName)))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objAdvocateAsCaseArray)) {
						$objPreviousChildItem = $objPreviousItem->_objAdvocateAsCaseArray[$intPreviousChildItemCount - 1];
						$objChildItem = Advocate::InstantiateDbRow($objDbRow, $strAliasPrefix . 'advocateascase__advocate_id__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
						if ($objChildItem)
							$objPreviousItem->_objAdvocateAsCaseArray[] = $objChildItem;
					} else
						$objPreviousItem->_objAdvocateAsCaseArray[] = Advocate::InstantiateDbRow($objDbRow, $strAliasPrefix . 'advocateascase__advocate_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
					$blnExpandedViaArray = true;
				}

				$strAlias = $strAliasPrefix . 'suspectascase__suspect_id__id';
				$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasName)))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objSuspectAsCaseArray)) {
						$objPreviousChildItem = $objPreviousItem->_objSuspectAsCaseArray[$intPreviousChildItemCount - 1];
						$objChildItem = Suspect::InstantiateDbRow($objDbRow, $strAliasPrefix . 'suspectascase__suspect_id__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
						if ($objChildItem)
							$objPreviousItem->_objSuspectAsCaseArray[] = $objChildItem;
					} else
						$objPreviousItem->_objSuspectAsCaseArray[] = Suspect::InstantiateDbRow($objDbRow, $strAliasPrefix . 'suspectascase__suspect_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
					$blnExpandedViaArray = true;
				}

				$strAlias = $strAliasPrefix . 'personascase__person_id__victim_witness_num';
				$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasName)))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objPersonAsCaseArray)) {
						$objPreviousChildItem = $objPreviousItem->_objPersonAsCaseArray[$intPreviousChildItemCount - 1];
						$objChildItem = Person::InstantiateDbRow($objDbRow, $strAliasPrefix . 'personascase__person_id__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
						if ($objChildItem)
							$objPreviousItem->_objPersonAsCaseArray[] = $objChildItem;
					} else
						$objPreviousItem->_objPersonAsCaseArray[] = Person::InstantiateDbRow($objDbRow, $strAliasPrefix . 'personascase__person_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
					$blnExpandedViaArray = true;
				}


				// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
				if ($blnExpandedViaArray)
					return false;
				else if ($strAliasPrefix == 'cases__')
					$strAliasPrefix = null;
			}

			// Create a new instance of the Cases object
			$objToReturn = new Cases();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'id'] : $strAliasPrefix . 'id';
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'crime_type_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'crime_type_id'] : $strAliasPrefix . 'crime_type_id';
			$objToReturn->intCrimeTypeId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'crime_date', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'crime_date'] : $strAliasPrefix . 'crime_date';
			$objToReturn->dttCrimeDate = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAliasName = array_key_exists($strAliasPrefix . 'agency_reported_to_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'agency_reported_to_id'] : $strAliasPrefix . 'agency_reported_to_id';
			$objToReturn->intAgencyReportedToId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'crime_report_number', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'crime_report_number'] : $strAliasPrefix . 'crime_report_number';
			$objToReturn->intCrimeReportNumber = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'family_law_number', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'family_law_number'] : $strAliasPrefix . 'family_law_number';
			$objToReturn->intFamilyLawNumber = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'court_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'court_id'] : $strAliasPrefix . 'court_id';
			$objToReturn->intCourtId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'case_status_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'case_status_id'] : $strAliasPrefix . 'case_status_id';
			$objToReturn->intCaseStatusId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'primary_person_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'primary_person_id'] : $strAliasPrefix . 'primary_person_id';
			$objToReturn->intPrimaryPersonId = $objDbRow->GetColumn($strAliasName, 'Integer');

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'cases__';

			// Check for AgencyReportedTo Early Binding
			$strAlias = $strAliasPrefix . 'agency_reported_to_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objAgencyReportedTo = Agency::InstantiateDbRow($objDbRow, $strAliasPrefix . 'agency_reported_to_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for Court Early Binding
			$strAlias = $strAliasPrefix . 'court_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objCourt = CourtInformation::InstantiateDbRow($objDbRow, $strAliasPrefix . 'court_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for CaseStatus Early Binding
			$strAlias = $strAliasPrefix . 'case_status_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objCaseStatus = CaseStatus::InstantiateDbRow($objDbRow, $strAliasPrefix . 'case_status_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);



			// Check for AdvocateAsCase Virtual Binding
			$strAlias = $strAliasPrefix . 'advocateascase__advocate_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objAdvocateAsCaseArray[] = Advocate::InstantiateDbRow($objDbRow, $strAliasPrefix . 'advocateascase__advocate_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objAdvocateAsCase = Advocate::InstantiateDbRow($objDbRow, $strAliasPrefix . 'advocateascase__advocate_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for SuspectAsCase Virtual Binding
			$strAlias = $strAliasPrefix . 'suspectascase__suspect_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objSuspectAsCaseArray[] = Suspect::InstantiateDbRow($objDbRow, $strAliasPrefix . 'suspectascase__suspect_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objSuspectAsCase = Suspect::InstantiateDbRow($objDbRow, $strAliasPrefix . 'suspectascase__suspect_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for PersonAsCase Virtual Binding
			$strAlias = $strAliasPrefix . 'personascase__person_id__victim_witness_num';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objPersonAsCaseArray[] = Person::InstantiateDbRow($objDbRow, $strAliasPrefix . 'personascase__person_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objPersonAsCase = Person::InstantiateDbRow($objDbRow, $strAliasPrefix . 'personascase__person_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}


			return $objToReturn;
		}

		/**
		 * Instantiate an array of Caseses from a Database Result
		 * @param QDatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Cases[]
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
					$objItem = Cases::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Cases::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate a single Cases object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Cases next row resulting from the query
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
			return Cases::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Cases object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @return Cases
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return Cases::QuerySingle(
				QQ::Equal(QQN::Cases()->Id, $intId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of Cases objects,
		 * by CrimeTypeId Index(es)
		 * @param integer $intCrimeTypeId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Cases[]
		*/
		public static function LoadArrayByCrimeTypeId($intCrimeTypeId, $objOptionalClauses = null) {
			// Call Cases::QueryArray to perform the LoadArrayByCrimeTypeId query
			try {
				return Cases::QueryArray(
					QQ::Equal(QQN::Cases()->CrimeTypeId, $intCrimeTypeId),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Caseses
		 * by CrimeTypeId Index(es)
		 * @param integer $intCrimeTypeId
		 * @return int
		*/
		public static function CountByCrimeTypeId($intCrimeTypeId, $objOptionalClauses = null) {
			// Call Cases::QueryCount to perform the CountByCrimeTypeId query
			return Cases::QueryCount(
				QQ::Equal(QQN::Cases()->CrimeTypeId, $intCrimeTypeId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of Cases objects,
		 * by AgencyReportedToId Index(es)
		 * @param integer $intAgencyReportedToId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Cases[]
		*/
		public static function LoadArrayByAgencyReportedToId($intAgencyReportedToId, $objOptionalClauses = null) {
			// Call Cases::QueryArray to perform the LoadArrayByAgencyReportedToId query
			try {
				return Cases::QueryArray(
					QQ::Equal(QQN::Cases()->AgencyReportedToId, $intAgencyReportedToId),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Caseses
		 * by AgencyReportedToId Index(es)
		 * @param integer $intAgencyReportedToId
		 * @return int
		*/
		public static function CountByAgencyReportedToId($intAgencyReportedToId, $objOptionalClauses = null) {
			// Call Cases::QueryCount to perform the CountByAgencyReportedToId query
			return Cases::QueryCount(
				QQ::Equal(QQN::Cases()->AgencyReportedToId, $intAgencyReportedToId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of Cases objects,
		 * by CourtId Index(es)
		 * @param integer $intCourtId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Cases[]
		*/
		public static function LoadArrayByCourtId($intCourtId, $objOptionalClauses = null) {
			// Call Cases::QueryArray to perform the LoadArrayByCourtId query
			try {
				return Cases::QueryArray(
					QQ::Equal(QQN::Cases()->CourtId, $intCourtId),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Caseses
		 * by CourtId Index(es)
		 * @param integer $intCourtId
		 * @return int
		*/
		public static function CountByCourtId($intCourtId, $objOptionalClauses = null) {
			// Call Cases::QueryCount to perform the CountByCourtId query
			return Cases::QueryCount(
				QQ::Equal(QQN::Cases()->CourtId, $intCourtId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of Cases objects,
		 * by CaseStatusId Index(es)
		 * @param integer $intCaseStatusId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Cases[]
		*/
		public static function LoadArrayByCaseStatusId($intCaseStatusId, $objOptionalClauses = null) {
			// Call Cases::QueryArray to perform the LoadArrayByCaseStatusId query
			try {
				return Cases::QueryArray(
					QQ::Equal(QQN::Cases()->CaseStatusId, $intCaseStatusId),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Caseses
		 * by CaseStatusId Index(es)
		 * @param integer $intCaseStatusId
		 * @return int
		*/
		public static function CountByCaseStatusId($intCaseStatusId, $objOptionalClauses = null) {
			// Call Cases::QueryCount to perform the CountByCaseStatusId query
			return Cases::QueryCount(
				QQ::Equal(QQN::Cases()->CaseStatusId, $intCaseStatusId)
			, $objOptionalClauses
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////
			/**
		 * Load an array of Advocate objects for a given AdvocateAsCase
		 * via the advocate_case_assn table
		 * @param integer $intAdvocateId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Cases[]
		*/
		public static function LoadArrayByAdvocateAsCase($intAdvocateId, $objOptionalClauses = null) {
			// Call Cases::QueryArray to perform the LoadArrayByAdvocateAsCase query
			try {
				return Cases::QueryArray(
					QQ::Equal(QQN::Cases()->AdvocateAsCase->AdvocateId, $intAdvocateId),
					$objOptionalClauses
				);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Caseses for a given AdvocateAsCase
		 * via the advocate_case_assn table
		 * @param integer $intAdvocateId
		 * @return int
		*/
		public static function CountByAdvocateAsCase($intAdvocateId, $objOptionalClauses = null) {
			return Cases::QueryCount(
				QQ::Equal(QQN::Cases()->AdvocateAsCase->AdvocateId, $intAdvocateId),
				$objOptionalClauses
			);
		}
			/**
		 * Load an array of Suspect objects for a given SuspectAsCase
		 * via the case_suspect_assn table
		 * @param integer $intSuspectId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Cases[]
		*/
		public static function LoadArrayBySuspectAsCase($intSuspectId, $objOptionalClauses = null) {
			// Call Cases::QueryArray to perform the LoadArrayBySuspectAsCase query
			try {
				return Cases::QueryArray(
					QQ::Equal(QQN::Cases()->SuspectAsCase->SuspectId, $intSuspectId),
					$objOptionalClauses
				);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Caseses for a given SuspectAsCase
		 * via the case_suspect_assn table
		 * @param integer $intSuspectId
		 * @return int
		*/
		public static function CountBySuspectAsCase($intSuspectId, $objOptionalClauses = null) {
			return Cases::QueryCount(
				QQ::Equal(QQN::Cases()->SuspectAsCase->SuspectId, $intSuspectId),
				$objOptionalClauses
			);
		}
			/**
		 * Load an array of Person objects for a given PersonAsCase
		 * via the person_case_assn table
		 * @param integer $intPersonId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Cases[]
		*/
		public static function LoadArrayByPersonAsCase($intPersonId, $objOptionalClauses = null) {
			// Call Cases::QueryArray to perform the LoadArrayByPersonAsCase query
			try {
				return Cases::QueryArray(
					QQ::Equal(QQN::Cases()->PersonAsCase->PersonId, $intPersonId),
					$objOptionalClauses
				);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Caseses for a given PersonAsCase
		 * via the person_case_assn table
		 * @param integer $intPersonId
		 * @return int
		*/
		public static function CountByPersonAsCase($intPersonId, $objOptionalClauses = null) {
			return Cases::QueryCount(
				QQ::Equal(QQN::Cases()->PersonAsCase->PersonId, $intPersonId),
				$objOptionalClauses
			);
		}




		//////////////////////////////////////
		// SAVE, DELETE, RELOAD and JOURNALING
		//////////////////////////////////////

		/**
		 * Save this Cases
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Cases::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `cases` (
							`crime_type_id`,
							`crime_date`,
							`agency_reported_to_id`,
							`crime_report_number`,
							`family_law_number`,
							`court_id`,
							`case_status_id`,
							`primary_person_id`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intCrimeTypeId) . ',
							' . $objDatabase->SqlVariable($this->dttCrimeDate) . ',
							' . $objDatabase->SqlVariable($this->intAgencyReportedToId) . ',
							' . $objDatabase->SqlVariable($this->intCrimeReportNumber) . ',
							' . $objDatabase->SqlVariable($this->intFamilyLawNumber) . ',
							' . $objDatabase->SqlVariable($this->intCourtId) . ',
							' . $objDatabase->SqlVariable($this->intCaseStatusId) . ',
							' . $objDatabase->SqlVariable($this->intPrimaryPersonId) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('cases', 'id');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('INSERT');

				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`cases`
						SET
							`crime_type_id` = ' . $objDatabase->SqlVariable($this->intCrimeTypeId) . ',
							`crime_date` = ' . $objDatabase->SqlVariable($this->dttCrimeDate) . ',
							`agency_reported_to_id` = ' . $objDatabase->SqlVariable($this->intAgencyReportedToId) . ',
							`crime_report_number` = ' . $objDatabase->SqlVariable($this->intCrimeReportNumber) . ',
							`family_law_number` = ' . $objDatabase->SqlVariable($this->intFamilyLawNumber) . ',
							`court_id` = ' . $objDatabase->SqlVariable($this->intCourtId) . ',
							`case_status_id` = ' . $objDatabase->SqlVariable($this->intCaseStatusId) . ',
							`primary_person_id` = ' . $objDatabase->SqlVariable($this->intPrimaryPersonId) . '
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
		 * Delete this Cases
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Cases with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Cases::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`cases`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');

			// Journaling
			if ($objDatabase->JournalingDatabase) $this->Journal('DELETE');
		}

		/**
		 * Delete all Caseses
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Cases::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`cases`');
		}

		/**
		 * Truncate cases table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Cases::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `cases`');
		}

		/**
		 * Reload this Cases from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Cases object.');

			// Reload the Object
			$objReloaded = Cases::Load($this->intId);

			// Update $this's local variables to match
			$this->CrimeTypeId = $objReloaded->CrimeTypeId;
			$this->dttCrimeDate = $objReloaded->dttCrimeDate;
			$this->AgencyReportedToId = $objReloaded->AgencyReportedToId;
			$this->intCrimeReportNumber = $objReloaded->intCrimeReportNumber;
			$this->intFamilyLawNumber = $objReloaded->intFamilyLawNumber;
			$this->CourtId = $objReloaded->CourtId;
			$this->CaseStatusId = $objReloaded->CaseStatusId;
			$this->intPrimaryPersonId = $objReloaded->intPrimaryPersonId;
		}

		/**
		 * Journals the current object into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function Journal($strJournalCommand) {
			$objDatabase = Cases::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `cases` (
					`id`,
					`crime_type_id`,
					`crime_date`,
					`agency_reported_to_id`,
					`crime_report_number`,
					`family_law_number`,
					`court_id`,
					`case_status_id`,
					`primary_person_id`,
					__sys_login_id,
					__sys_action,
					__sys_date
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($this->intCrimeTypeId) . ',
					' . $objDatabase->SqlVariable($this->dttCrimeDate) . ',
					' . $objDatabase->SqlVariable($this->intAgencyReportedToId) . ',
					' . $objDatabase->SqlVariable($this->intCrimeReportNumber) . ',
					' . $objDatabase->SqlVariable($this->intFamilyLawNumber) . ',
					' . $objDatabase->SqlVariable($this->intCourtId) . ',
					' . $objDatabase->SqlVariable($this->intCaseStatusId) . ',
					' . $objDatabase->SqlVariable($this->intPrimaryPersonId) . ',
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
		 * @return Cases[]
		 */
		public static function GetJournalForId($intId) {
			$objDatabase = Cases::GetDatabase()->JournalingDatabase;

			$objResult = $objDatabase->Query('SELECT * FROM cases WHERE id = ' .
				$objDatabase->SqlVariable($intId) . ' ORDER BY __sys_date');

			return Cases::InstantiateDbResult($objResult);
		}

		/**
		 * Gets the historical journal for this object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @return Cases[]
		 */
		public function GetJournal() {
			return Cases::GetJournalForId($this->intId);
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

				case 'CrimeTypeId':
					// Gets the value for intCrimeTypeId 
					// @return integer
					return $this->intCrimeTypeId;

				case 'CrimeDate':
					// Gets the value for dttCrimeDate 
					// @return QDateTime
					return $this->dttCrimeDate;

				case 'AgencyReportedToId':
					// Gets the value for intAgencyReportedToId 
					// @return integer
					return $this->intAgencyReportedToId;

				case 'CrimeReportNumber':
					// Gets the value for intCrimeReportNumber 
					// @return integer
					return $this->intCrimeReportNumber;

				case 'FamilyLawNumber':
					// Gets the value for intFamilyLawNumber 
					// @return integer
					return $this->intFamilyLawNumber;

				case 'CourtId':
					// Gets the value for intCourtId 
					// @return integer
					return $this->intCourtId;

				case 'CaseStatusId':
					// Gets the value for intCaseStatusId 
					// @return integer
					return $this->intCaseStatusId;

				case 'PrimaryPersonId':
					// Gets the value for intPrimaryPersonId 
					// @return integer
					return $this->intPrimaryPersonId;


				///////////////////
				// Member Objects
				///////////////////
				case 'AgencyReportedTo':
					// Gets the value for the Agency object referenced by intAgencyReportedToId 
					// @return Agency
					try {
						if ((!$this->objAgencyReportedTo) && (!is_null($this->intAgencyReportedToId)))
							$this->objAgencyReportedTo = Agency::Load($this->intAgencyReportedToId);
						return $this->objAgencyReportedTo;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Court':
					// Gets the value for the CourtInformation object referenced by intCourtId 
					// @return CourtInformation
					try {
						if ((!$this->objCourt) && (!is_null($this->intCourtId)))
							$this->objCourt = CourtInformation::Load($this->intCourtId);
						return $this->objCourt;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CaseStatus':
					// Gets the value for the CaseStatus object referenced by intCaseStatusId 
					// @return CaseStatus
					try {
						if ((!$this->objCaseStatus) && (!is_null($this->intCaseStatusId)))
							$this->objCaseStatus = CaseStatus::Load($this->intCaseStatusId);
						return $this->objCaseStatus;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_AdvocateAsCase':
					// Gets the value for the private _objAdvocateAsCase (Read-Only)
					// if set due to an expansion on the advocate_case_assn association table
					// @return Advocate
					return $this->_objAdvocateAsCase;

				case '_AdvocateAsCaseArray':
					// Gets the value for the private _objAdvocateAsCaseArray (Read-Only)
					// if set due to an ExpandAsArray on the advocate_case_assn association table
					// @return Advocate[]
					return (array) $this->_objAdvocateAsCaseArray;

				case '_SuspectAsCase':
					// Gets the value for the private _objSuspectAsCase (Read-Only)
					// if set due to an expansion on the case_suspect_assn association table
					// @return Suspect
					return $this->_objSuspectAsCase;

				case '_SuspectAsCaseArray':
					// Gets the value for the private _objSuspectAsCaseArray (Read-Only)
					// if set due to an ExpandAsArray on the case_suspect_assn association table
					// @return Suspect[]
					return (array) $this->_objSuspectAsCaseArray;

				case '_PersonAsCase':
					// Gets the value for the private _objPersonAsCase (Read-Only)
					// if set due to an expansion on the person_case_assn association table
					// @return Person
					return $this->_objPersonAsCase;

				case '_PersonAsCaseArray':
					// Gets the value for the private _objPersonAsCaseArray (Read-Only)
					// if set due to an ExpandAsArray on the person_case_assn association table
					// @return Person[]
					return (array) $this->_objPersonAsCaseArray;


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
				case 'CrimeTypeId':
					// Sets the value for intCrimeTypeId 
					// @param integer $mixValue
					// @return integer
					try {
						return ($this->intCrimeTypeId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CrimeDate':
					// Sets the value for dttCrimeDate 
					// @param QDateTime $mixValue
					// @return QDateTime
					try {
						return ($this->dttCrimeDate = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AgencyReportedToId':
					// Sets the value for intAgencyReportedToId 
					// @param integer $mixValue
					// @return integer
					try {
						$this->objAgencyReportedTo = null;
						return ($this->intAgencyReportedToId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CrimeReportNumber':
					// Sets the value for intCrimeReportNumber 
					// @param integer $mixValue
					// @return integer
					try {
						return ($this->intCrimeReportNumber = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FamilyLawNumber':
					// Sets the value for intFamilyLawNumber 
					// @param integer $mixValue
					// @return integer
					try {
						return ($this->intFamilyLawNumber = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CourtId':
					// Sets the value for intCourtId 
					// @param integer $mixValue
					// @return integer
					try {
						$this->objCourt = null;
						return ($this->intCourtId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CaseStatusId':
					// Sets the value for intCaseStatusId 
					// @param integer $mixValue
					// @return integer
					try {
						$this->objCaseStatus = null;
						return ($this->intCaseStatusId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PrimaryPersonId':
					// Sets the value for intPrimaryPersonId 
					// @param integer $mixValue
					// @return integer
					try {
						return ($this->intPrimaryPersonId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'AgencyReportedTo':
					// Sets the value for the Agency object referenced by intAgencyReportedToId 
					// @param Agency $mixValue
					// @return Agency
					if (is_null($mixValue)) {
						$this->intAgencyReportedToId = null;
						$this->objAgencyReportedTo = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Agency object
						try {
							$mixValue = QType::Cast($mixValue, 'Agency');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Agency object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved AgencyReportedTo for this Cases');

						// Update Local Member Variables
						$this->objAgencyReportedTo = $mixValue;
						$this->intAgencyReportedToId = $mixValue->Id;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'Court':
					// Sets the value for the CourtInformation object referenced by intCourtId 
					// @param CourtInformation $mixValue
					// @return CourtInformation
					if (is_null($mixValue)) {
						$this->intCourtId = null;
						$this->objCourt = null;
						return null;
					} else {
						// Make sure $mixValue actually is a CourtInformation object
						try {
							$mixValue = QType::Cast($mixValue, 'CourtInformation');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED CourtInformation object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved Court for this Cases');

						// Update Local Member Variables
						$this->objCourt = $mixValue;
						$this->intCourtId = $mixValue->Id;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'CaseStatus':
					// Sets the value for the CaseStatus object referenced by intCaseStatusId 
					// @param CaseStatus $mixValue
					// @return CaseStatus
					if (is_null($mixValue)) {
						$this->intCaseStatusId = null;
						$this->objCaseStatus = null;
						return null;
					} else {
						// Make sure $mixValue actually is a CaseStatus object
						try {
							$mixValue = QType::Cast($mixValue, 'CaseStatus');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED CaseStatus object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved CaseStatus for this Cases');

						// Update Local Member Variables
						$this->objCaseStatus = $mixValue;
						$this->intCaseStatusId = $mixValue->Id;

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

			
		// Related Many-to-Many Objects' Methods for AdvocateAsCase
		//-------------------------------------------------------------------

		/**
		 * Gets all many-to-many associated AdvocatesAsCase as an array of Advocate objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Advocate[]
		*/ 
		public function GetAdvocateAsCaseArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return Advocate::LoadArrayByCasesAsCase($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all many-to-many associated AdvocatesAsCase
		 * @return int
		*/ 
		public function CountAdvocatesAsCase() {
			if ((is_null($this->intId)))
				return 0;

			return Advocate::CountByCasesAsCase($this->intId);
		}

		/**
		 * Checks to see if an association exists with a specific AdvocateAsCase
		 * @param Advocate $objAdvocate
		 * @return bool
		*/
		public function IsAdvocateAsCaseAssociated(Advocate $objAdvocate) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsAdvocateAsCaseAssociated on this unsaved Cases.');
			if ((is_null($objAdvocate->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsAdvocateAsCaseAssociated on this Cases with an unsaved Advocate.');

			$intRowCount = Cases::QueryCount(
				QQ::AndCondition(
					QQ::Equal(QQN::Cases()->Id, $this->intId),
					QQ::Equal(QQN::Cases()->AdvocateAsCase->AdvocateId, $objAdvocate->Id)
				)
			);

			return ($intRowCount > 0);
		}

		/**
		 * Journals the AdvocateAsCase relationship into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function JournalAdvocateAsCaseAssociation($intAssociatedId, $strJournalCommand) {
			$objDatabase = Cases::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `advocate_case_assn` (
					`case_id`,
					`advocate_id`,
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
		 * Gets the historical journal for an object's AdvocateAsCase relationship from the log database.
		 * @param integer intId
		 * @return QDatabaseResult $objResult
		 */
		public static function GetJournalAdvocateAsCaseAssociationForId($intId) {
			$objDatabase = Cases::GetDatabase()->JournalingDatabase;

			return $objDatabase->Query('SELECT * FROM advocate_case_assn WHERE case_id = ' .
				$objDatabase->SqlVariable($intId) . ' ORDER BY __sys_date');
		}

		/**
		 * Gets the historical journal for this object's AdvocateAsCase relationship from the log database.
		 * @return QDatabaseResult $objResult
		 */
		public function GetJournalAdvocateAsCaseAssociation() {
			return Cases::GetJournalAdvocateAsCaseAssociationForId($this->intId);
		}

		/**
		 * Associates a AdvocateAsCase
		 * @param Advocate $objAdvocate
		 * @return void
		*/ 
		public function AssociateAdvocateAsCase(Advocate $objAdvocate) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAdvocateAsCase on this unsaved Cases.');
			if ((is_null($objAdvocate->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAdvocateAsCase on this Cases with an unsaved Advocate.');

			// Get the Database Object for this Class
			$objDatabase = Cases::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				INSERT INTO `advocate_case_assn` (
					`case_id`,
					`advocate_id`
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($objAdvocate->Id) . '
				)
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase)
				$this->JournalAdvocateAsCaseAssociation($objAdvocate->Id, 'INSERT');
		}

		/**
		 * Unassociates a AdvocateAsCase
		 * @param Advocate $objAdvocate
		 * @return void
		*/ 
		public function UnassociateAdvocateAsCase(Advocate $objAdvocate) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAdvocateAsCase on this unsaved Cases.');
			if ((is_null($objAdvocate->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAdvocateAsCase on this Cases with an unsaved Advocate.');

			// Get the Database Object for this Class
			$objDatabase = Cases::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`advocate_case_assn`
				WHERE
					`case_id` = ' . $objDatabase->SqlVariable($this->intId) . ' AND
					`advocate_id` = ' . $objDatabase->SqlVariable($objAdvocate->Id) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase)
				$this->JournalAdvocateAsCaseAssociation($objAdvocate->Id, 'DELETE');
		}

		/**
		 * Unassociates all AdvocatesAsCase
		 * @return void
		*/ 
		public function UnassociateAllAdvocatesAsCase() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAllAdvocateAsCaseArray on this unsaved Cases.');

			// Get the Database Object for this Class
			$objDatabase = Cases::GetDatabase();

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objResult = $objDatabase->Query('SELECT `advocate_id` AS associated_id FROM `advocate_case_assn` WHERE `case_id` = ' . $objDatabase->SqlVariable($this->intId));
				while ($objRow = $objResult->GetNextRow()) {
					$this->JournalAdvocateAsCaseAssociation($objRow->GetColumn('associated_id'), 'DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`advocate_case_assn`
				WHERE
					`case_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}
			
		// Related Many-to-Many Objects' Methods for SuspectAsCase
		//-------------------------------------------------------------------

		/**
		 * Gets all many-to-many associated SuspectsAsCase as an array of Suspect objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Suspect[]
		*/ 
		public function GetSuspectAsCaseArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return Suspect::LoadArrayByCasesAsCase($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all many-to-many associated SuspectsAsCase
		 * @return int
		*/ 
		public function CountSuspectsAsCase() {
			if ((is_null($this->intId)))
				return 0;

			return Suspect::CountByCasesAsCase($this->intId);
		}

		/**
		 * Checks to see if an association exists with a specific SuspectAsCase
		 * @param Suspect $objSuspect
		 * @return bool
		*/
		public function IsSuspectAsCaseAssociated(Suspect $objSuspect) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsSuspectAsCaseAssociated on this unsaved Cases.');
			if ((is_null($objSuspect->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsSuspectAsCaseAssociated on this Cases with an unsaved Suspect.');

			$intRowCount = Cases::QueryCount(
				QQ::AndCondition(
					QQ::Equal(QQN::Cases()->Id, $this->intId),
					QQ::Equal(QQN::Cases()->SuspectAsCase->SuspectId, $objSuspect->Id)
				)
			);

			return ($intRowCount > 0);
		}

		/**
		 * Journals the SuspectAsCase relationship into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function JournalSuspectAsCaseAssociation($intAssociatedId, $strJournalCommand) {
			$objDatabase = Cases::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `case_suspect_assn` (
					`case_id`,
					`suspect_id`,
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
		 * Gets the historical journal for an object's SuspectAsCase relationship from the log database.
		 * @param integer intId
		 * @return QDatabaseResult $objResult
		 */
		public static function GetJournalSuspectAsCaseAssociationForId($intId) {
			$objDatabase = Cases::GetDatabase()->JournalingDatabase;

			return $objDatabase->Query('SELECT * FROM case_suspect_assn WHERE case_id = ' .
				$objDatabase->SqlVariable($intId) . ' ORDER BY __sys_date');
		}

		/**
		 * Gets the historical journal for this object's SuspectAsCase relationship from the log database.
		 * @return QDatabaseResult $objResult
		 */
		public function GetJournalSuspectAsCaseAssociation() {
			return Cases::GetJournalSuspectAsCaseAssociationForId($this->intId);
		}

		/**
		 * Associates a SuspectAsCase
		 * @param Suspect $objSuspect
		 * @return void
		*/ 
		public function AssociateSuspectAsCase(Suspect $objSuspect) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateSuspectAsCase on this unsaved Cases.');
			if ((is_null($objSuspect->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateSuspectAsCase on this Cases with an unsaved Suspect.');

			// Get the Database Object for this Class
			$objDatabase = Cases::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				INSERT INTO `case_suspect_assn` (
					`case_id`,
					`suspect_id`
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($objSuspect->Id) . '
				)
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase)
				$this->JournalSuspectAsCaseAssociation($objSuspect->Id, 'INSERT');
		}

		/**
		 * Unassociates a SuspectAsCase
		 * @param Suspect $objSuspect
		 * @return void
		*/ 
		public function UnassociateSuspectAsCase(Suspect $objSuspect) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSuspectAsCase on this unsaved Cases.');
			if ((is_null($objSuspect->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSuspectAsCase on this Cases with an unsaved Suspect.');

			// Get the Database Object for this Class
			$objDatabase = Cases::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`case_suspect_assn`
				WHERE
					`case_id` = ' . $objDatabase->SqlVariable($this->intId) . ' AND
					`suspect_id` = ' . $objDatabase->SqlVariable($objSuspect->Id) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase)
				$this->JournalSuspectAsCaseAssociation($objSuspect->Id, 'DELETE');
		}

		/**
		 * Unassociates all SuspectsAsCase
		 * @return void
		*/ 
		public function UnassociateAllSuspectsAsCase() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAllSuspectAsCaseArray on this unsaved Cases.');

			// Get the Database Object for this Class
			$objDatabase = Cases::GetDatabase();

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objResult = $objDatabase->Query('SELECT `suspect_id` AS associated_id FROM `case_suspect_assn` WHERE `case_id` = ' . $objDatabase->SqlVariable($this->intId));
				while ($objRow = $objResult->GetNextRow()) {
					$this->JournalSuspectAsCaseAssociation($objRow->GetColumn('associated_id'), 'DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`case_suspect_assn`
				WHERE
					`case_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}
			
		// Related Many-to-Many Objects' Methods for PersonAsCase
		//-------------------------------------------------------------------

		/**
		 * Gets all many-to-many associated PeopleAsCase as an array of Person objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Person[]
		*/ 
		public function GetPersonAsCaseArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return Person::LoadArrayByCasesAsCase($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all many-to-many associated PeopleAsCase
		 * @return int
		*/ 
		public function CountPeopleAsCase() {
			if ((is_null($this->intId)))
				return 0;

			return Person::CountByCasesAsCase($this->intId);
		}

		/**
		 * Checks to see if an association exists with a specific PersonAsCase
		 * @param Person $objPerson
		 * @return bool
		*/
		public function IsPersonAsCaseAssociated(Person $objPerson) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsPersonAsCaseAssociated on this unsaved Cases.');
			if ((is_null($objPerson->VictimWitnessNum)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsPersonAsCaseAssociated on this Cases with an unsaved Person.');

			$intRowCount = Cases::QueryCount(
				QQ::AndCondition(
					QQ::Equal(QQN::Cases()->Id, $this->intId),
					QQ::Equal(QQN::Cases()->PersonAsCase->PersonId, $objPerson->VictimWitnessNum)
				)
			);

			return ($intRowCount > 0);
		}

		/**
		 * Journals the PersonAsCase relationship into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function JournalPersonAsCaseAssociation($intAssociatedId, $strJournalCommand) {
			$objDatabase = Cases::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `person_case_assn` (
					`case_id`,
					`person_id`,
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
		 * Gets the historical journal for an object's PersonAsCase relationship from the log database.
		 * @param integer intId
		 * @return QDatabaseResult $objResult
		 */
		public static function GetJournalPersonAsCaseAssociationForId($intId) {
			$objDatabase = Cases::GetDatabase()->JournalingDatabase;

			return $objDatabase->Query('SELECT * FROM person_case_assn WHERE case_id = ' .
				$objDatabase->SqlVariable($intId) . ' ORDER BY __sys_date');
		}

		/**
		 * Gets the historical journal for this object's PersonAsCase relationship from the log database.
		 * @return QDatabaseResult $objResult
		 */
		public function GetJournalPersonAsCaseAssociation() {
			return Cases::GetJournalPersonAsCaseAssociationForId($this->intId);
		}

		/**
		 * Associates a PersonAsCase
		 * @param Person $objPerson
		 * @return void
		*/ 
		public function AssociatePersonAsCase(Person $objPerson) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociatePersonAsCase on this unsaved Cases.');
			if ((is_null($objPerson->VictimWitnessNum)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociatePersonAsCase on this Cases with an unsaved Person.');

			// Get the Database Object for this Class
			$objDatabase = Cases::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				INSERT INTO `person_case_assn` (
					`case_id`,
					`person_id`
				) VALUES (
					' . $objDatabase->SqlVariable($this->intId) . ',
					' . $objDatabase->SqlVariable($objPerson->VictimWitnessNum) . '
				)
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase)
				$this->JournalPersonAsCaseAssociation($objPerson->VictimWitnessNum, 'INSERT');
		}

		/**
		 * Unassociates a PersonAsCase
		 * @param Person $objPerson
		 * @return void
		*/ 
		public function UnassociatePersonAsCase(Person $objPerson) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePersonAsCase on this unsaved Cases.');
			if ((is_null($objPerson->VictimWitnessNum)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePersonAsCase on this Cases with an unsaved Person.');

			// Get the Database Object for this Class
			$objDatabase = Cases::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`person_case_assn`
				WHERE
					`case_id` = ' . $objDatabase->SqlVariable($this->intId) . ' AND
					`person_id` = ' . $objDatabase->SqlVariable($objPerson->VictimWitnessNum) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase)
				$this->JournalPersonAsCaseAssociation($objPerson->VictimWitnessNum, 'DELETE');
		}

		/**
		 * Unassociates all PeopleAsCase
		 * @return void
		*/ 
		public function UnassociateAllPeopleAsCase() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAllPersonAsCaseArray on this unsaved Cases.');

			// Get the Database Object for this Class
			$objDatabase = Cases::GetDatabase();

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objResult = $objDatabase->Query('SELECT `person_id` AS associated_id FROM `person_case_assn` WHERE `case_id` = ' . $objDatabase->SqlVariable($this->intId));
				while ($objRow = $objResult->GetNextRow()) {
					$this->JournalPersonAsCaseAssociation($objRow->GetColumn('associated_id'), 'DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`person_case_assn`
				WHERE
					`case_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}




		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Cases"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="CrimeTypeId" type="xsd:int"/>';
			$strToReturn .= '<element name="CrimeDate" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="AgencyReportedTo" type="xsd1:Agency"/>';
			$strToReturn .= '<element name="CrimeReportNumber" type="xsd:int"/>';
			$strToReturn .= '<element name="FamilyLawNumber" type="xsd:int"/>';
			$strToReturn .= '<element name="Court" type="xsd1:CourtInformation"/>';
			$strToReturn .= '<element name="CaseStatus" type="xsd1:CaseStatus"/>';
			$strToReturn .= '<element name="PrimaryPersonId" type="xsd:int"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Cases', $strComplexTypeArray)) {
				$strComplexTypeArray['Cases'] = Cases::GetSoapComplexTypeXml();
				Agency::AlterSoapComplexTypeArray($strComplexTypeArray);
				CourtInformation::AlterSoapComplexTypeArray($strComplexTypeArray);
				CaseStatus::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Cases::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Cases();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if (property_exists($objSoapObject, 'CrimeTypeId'))
				$objToReturn->intCrimeTypeId = $objSoapObject->CrimeTypeId;
			if (property_exists($objSoapObject, 'CrimeDate'))
				$objToReturn->dttCrimeDate = new QDateTime($objSoapObject->CrimeDate);
			if ((property_exists($objSoapObject, 'AgencyReportedTo')) &&
				($objSoapObject->AgencyReportedTo))
				$objToReturn->AgencyReportedTo = Agency::GetObjectFromSoapObject($objSoapObject->AgencyReportedTo);
			if (property_exists($objSoapObject, 'CrimeReportNumber'))
				$objToReturn->intCrimeReportNumber = $objSoapObject->CrimeReportNumber;
			if (property_exists($objSoapObject, 'FamilyLawNumber'))
				$objToReturn->intFamilyLawNumber = $objSoapObject->FamilyLawNumber;
			if ((property_exists($objSoapObject, 'Court')) &&
				($objSoapObject->Court))
				$objToReturn->Court = CourtInformation::GetObjectFromSoapObject($objSoapObject->Court);
			if ((property_exists($objSoapObject, 'CaseStatus')) &&
				($objSoapObject->CaseStatus))
				$objToReturn->CaseStatus = CaseStatus::GetObjectFromSoapObject($objSoapObject->CaseStatus);
			if (property_exists($objSoapObject, 'PrimaryPersonId'))
				$objToReturn->intPrimaryPersonId = $objSoapObject->PrimaryPersonId;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Cases::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->dttCrimeDate)
				$objObject->dttCrimeDate = $objObject->dttCrimeDate->__toString(QDateTime::FormatSoap);
			if ($objObject->objAgencyReportedTo)
				$objObject->objAgencyReportedTo = Agency::GetSoapObjectFromObject($objObject->objAgencyReportedTo, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intAgencyReportedToId = null;
			if ($objObject->objCourt)
				$objObject->objCourt = CourtInformation::GetSoapObjectFromObject($objObject->objCourt, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intCourtId = null;
			if ($objObject->objCaseStatus)
				$objObject->objCaseStatus = CaseStatus::GetSoapObjectFromObject($objObject->objCaseStatus, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intCaseStatusId = null;
			return $objObject;
		}




	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCODO QUERY
	/////////////////////////////////////

	/**
	 * @property-read QQNode $AdvocateId
	 * @property-read QQNodeAdvocate $Advocate
	 * @property-read QQNodeAdvocate $_ChildTableNode
	 */
	class QQNodeCasesAdvocateAsCase extends QQAssociationNode {
		protected $strType = 'association';
		protected $strName = 'advocateascase';

		protected $strTableName = 'advocate_case_assn';
		protected $strPrimaryKey = 'case_id';
		protected $strClassName = 'Advocate';

		public function __get($strName) {
			switch ($strName) {
				case 'AdvocateId':
					return new QQNode('advocate_id', 'AdvocateId', 'integer', $this);
				case 'Advocate':
					return new QQNodeAdvocate('advocate_id', 'AdvocateId', 'integer', $this);
				case '_ChildTableNode':
					return new QQNodeAdvocate('advocate_id', 'AdvocateId', 'integer', $this);
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
	 * @property-read QQNode $SuspectId
	 * @property-read QQNodeSuspect $Suspect
	 * @property-read QQNodeSuspect $_ChildTableNode
	 */
	class QQNodeCasesSuspectAsCase extends QQAssociationNode {
		protected $strType = 'association';
		protected $strName = 'suspectascase';

		protected $strTableName = 'case_suspect_assn';
		protected $strPrimaryKey = 'case_id';
		protected $strClassName = 'Suspect';

		public function __get($strName) {
			switch ($strName) {
				case 'SuspectId':
					return new QQNode('suspect_id', 'SuspectId', 'integer', $this);
				case 'Suspect':
					return new QQNodeSuspect('suspect_id', 'SuspectId', 'integer', $this);
				case '_ChildTableNode':
					return new QQNodeSuspect('suspect_id', 'SuspectId', 'integer', $this);
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
	 * @property-read QQNode $PersonId
	 * @property-read QQNodePerson $Person
	 * @property-read QQNodePerson $_ChildTableNode
	 */
	class QQNodeCasesPersonAsCase extends QQAssociationNode {
		protected $strType = 'association';
		protected $strName = 'personascase';

		protected $strTableName = 'person_case_assn';
		protected $strPrimaryKey = 'case_id';
		protected $strClassName = 'Person';

		public function __get($strName) {
			switch ($strName) {
				case 'PersonId':
					return new QQNode('person_id', 'PersonId', 'integer', $this);
				case 'Person':
					return new QQNodePerson('person_id', 'PersonId', 'integer', $this);
				case '_ChildTableNode':
					return new QQNodePerson('person_id', 'PersonId', 'integer', $this);
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
	 * @property-read QQNode $CrimeTypeId
	 * @property-read QQNode $CrimeDate
	 * @property-read QQNode $AgencyReportedToId
	 * @property-read QQNodeAgency $AgencyReportedTo
	 * @property-read QQNode $CrimeReportNumber
	 * @property-read QQNode $FamilyLawNumber
	 * @property-read QQNode $CourtId
	 * @property-read QQNodeCourtInformation $Court
	 * @property-read QQNode $CaseStatusId
	 * @property-read QQNodeCaseStatus $CaseStatus
	 * @property-read QQNode $PrimaryPersonId
	 * @property-read QQNodeCasesAdvocateAsCase $AdvocateAsCase
	 * @property-read QQNodeCasesSuspectAsCase $SuspectAsCase
	 * @property-read QQNodeCasesPersonAsCase $PersonAsCase
	 */
	class QQNodeCases extends QQNode {
		protected $strTableName = 'cases';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'Cases';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'CrimeTypeId':
					return new QQNode('crime_type_id', 'CrimeTypeId', 'integer', $this);
				case 'CrimeDate':
					return new QQNode('crime_date', 'CrimeDate', 'QDateTime', $this);
				case 'AgencyReportedToId':
					return new QQNode('agency_reported_to_id', 'AgencyReportedToId', 'integer', $this);
				case 'AgencyReportedTo':
					return new QQNodeAgency('agency_reported_to_id', 'AgencyReportedTo', 'integer', $this);
				case 'CrimeReportNumber':
					return new QQNode('crime_report_number', 'CrimeReportNumber', 'integer', $this);
				case 'FamilyLawNumber':
					return new QQNode('family_law_number', 'FamilyLawNumber', 'integer', $this);
				case 'CourtId':
					return new QQNode('court_id', 'CourtId', 'integer', $this);
				case 'Court':
					return new QQNodeCourtInformation('court_id', 'Court', 'integer', $this);
				case 'CaseStatusId':
					return new QQNode('case_status_id', 'CaseStatusId', 'integer', $this);
				case 'CaseStatus':
					return new QQNodeCaseStatus('case_status_id', 'CaseStatus', 'integer', $this);
				case 'PrimaryPersonId':
					return new QQNode('primary_person_id', 'PrimaryPersonId', 'integer', $this);
				case 'AdvocateAsCase':
					return new QQNodeCasesAdvocateAsCase($this);
				case 'SuspectAsCase':
					return new QQNodeCasesSuspectAsCase($this);
				case 'PersonAsCase':
					return new QQNodeCasesPersonAsCase($this);

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
	 * @property-read QQNode $CrimeTypeId
	 * @property-read QQNode $CrimeDate
	 * @property-read QQNode $AgencyReportedToId
	 * @property-read QQNodeAgency $AgencyReportedTo
	 * @property-read QQNode $CrimeReportNumber
	 * @property-read QQNode $FamilyLawNumber
	 * @property-read QQNode $CourtId
	 * @property-read QQNodeCourtInformation $Court
	 * @property-read QQNode $CaseStatusId
	 * @property-read QQNodeCaseStatus $CaseStatus
	 * @property-read QQNode $PrimaryPersonId
	 * @property-read QQNodeCasesAdvocateAsCase $AdvocateAsCase
	 * @property-read QQNodeCasesSuspectAsCase $SuspectAsCase
	 * @property-read QQNodeCasesPersonAsCase $PersonAsCase
	 * @property-read QQNode $_PrimaryKeyNode
	 */
	class QQReverseReferenceNodeCases extends QQReverseReferenceNode {
		protected $strTableName = 'cases';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'Cases';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'CrimeTypeId':
					return new QQNode('crime_type_id', 'CrimeTypeId', 'integer', $this);
				case 'CrimeDate':
					return new QQNode('crime_date', 'CrimeDate', 'QDateTime', $this);
				case 'AgencyReportedToId':
					return new QQNode('agency_reported_to_id', 'AgencyReportedToId', 'integer', $this);
				case 'AgencyReportedTo':
					return new QQNodeAgency('agency_reported_to_id', 'AgencyReportedTo', 'integer', $this);
				case 'CrimeReportNumber':
					return new QQNode('crime_report_number', 'CrimeReportNumber', 'integer', $this);
				case 'FamilyLawNumber':
					return new QQNode('family_law_number', 'FamilyLawNumber', 'integer', $this);
				case 'CourtId':
					return new QQNode('court_id', 'CourtId', 'integer', $this);
				case 'Court':
					return new QQNodeCourtInformation('court_id', 'Court', 'integer', $this);
				case 'CaseStatusId':
					return new QQNode('case_status_id', 'CaseStatusId', 'integer', $this);
				case 'CaseStatus':
					return new QQNodeCaseStatus('case_status_id', 'CaseStatus', 'integer', $this);
				case 'PrimaryPersonId':
					return new QQNode('primary_person_id', 'PrimaryPersonId', 'integer', $this);
				case 'AdvocateAsCase':
					return new QQNodeCasesAdvocateAsCase($this);
				case 'SuspectAsCase':
					return new QQNodeCasesSuspectAsCase($this);
				case 'PersonAsCase':
					return new QQNodeCasesPersonAsCase($this);

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