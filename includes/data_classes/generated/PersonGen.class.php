<?php
	/**
	 * The abstract PersonGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Person subclass which
	 * extends this PersonGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Person class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $VictimWitnessNum the value for intVictimWitnessNum (Read-Only PK)
	 * @property string $FirstName the value for strFirstName 
	 * @property string $LastName the value for strLastName 
	 * @property QDateTime $DateOfBirth the value for dttDateOfBirth 
	 * @property integer $SocialSecurityNumber the value for intSocialSecurityNumber 
	 * @property string $Phone the value for strPhone 
	 * @property string $Email the value for strEmail 
	 * @property string $Notes the value for strNotes 
	 * @property boolean $Gender the value for blnGender 
	 * @property integer $EthnicityId the value for intEthnicityId 
	 * @property integer $Age the value for intAge 
	 * @property integer $PrimaryLanguageId the value for intPrimaryLanguageId 
	 * @property boolean $Disabled the value for blnDisabled 
	 * @property boolean $Elderly the value for blnElderly 
	 * @property integer $AgencyReferredId the value for intAgencyReferredId 
	 * @property Ethnicity $Ethnicity the value for the Ethnicity object referenced by intEthnicityId 
	 * @property Language $PrimaryLanguage the value for the Language object referenced by intPrimaryLanguageId 
	 * @property Agency $AgencyReferred the value for the Agency object referenced by intAgencyReferredId 
	 * @property Cases $_CasesAsCase the value for the private _objCasesAsCase (Read-Only) if set due to an expansion on the person_case_assn association table
	 * @property Cases[] $_CasesAsCaseArray the value for the private _objCasesAsCaseArray (Read-Only) if set due to an ExpandAsArray on the person_case_assn association table
	 * @property Address $_Address the value for the private _objAddress (Read-Only) if set due to an expansion on the address.person_id reverse relationship
	 * @property Address[] $_AddressArray the value for the private _objAddressArray (Read-Only) if set due to an ExpandAsArray on the address.person_id reverse relationship
	 * @property Relationship $_Relationship the value for the private _objRelationship (Read-Only) if set due to an expansion on the relationship.person_id reverse relationship
	 * @property Relationship[] $_RelationshipArray the value for the private _objRelationshipArray (Read-Only) if set due to an ExpandAsArray on the relationship.person_id reverse relationship
	 * @property Relationship $_RelationshipAsRelatedTo the value for the private _objRelationshipAsRelatedTo (Read-Only) if set due to an expansion on the relationship.related_to_person_id reverse relationship
	 * @property Relationship[] $_RelationshipAsRelatedToArray the value for the private _objRelationshipAsRelatedToArray (Read-Only) if set due to an ExpandAsArray on the relationship.related_to_person_id reverse relationship
	 * @property Services $_Services the value for the private _objServices (Read-Only) if set due to an expansion on the services.person_id reverse relationship
	 * @property Services[] $_ServicesArray the value for the private _objServicesArray (Read-Only) if set due to an ExpandAsArray on the services.person_id reverse relationship
	 * @property boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class PersonGen extends QBaseClass {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column person.victim_witness_num
		 * @var integer intVictimWitnessNum
		 */
		protected $intVictimWitnessNum;
		const VictimWitnessNumDefault = null;


		/**
		 * Protected member variable that maps to the database column person.first_name
		 * @var string strFirstName
		 */
		protected $strFirstName;
		const FirstNameMaxLength = 255;
		const FirstNameDefault = null;


		/**
		 * Protected member variable that maps to the database column person.last_name
		 * @var string strLastName
		 */
		protected $strLastName;
		const LastNameMaxLength = 255;
		const LastNameDefault = null;


		/**
		 * Protected member variable that maps to the database column person.date_of_birth
		 * @var QDateTime dttDateOfBirth
		 */
		protected $dttDateOfBirth;
		const DateOfBirthDefault = null;


		/**
		 * Protected member variable that maps to the database column person.social_security_number
		 * @var integer intSocialSecurityNumber
		 */
		protected $intSocialSecurityNumber;
		const SocialSecurityNumberDefault = null;


		/**
		 * Protected member variable that maps to the database column person.phone
		 * @var string strPhone
		 */
		protected $strPhone;
		const PhoneMaxLength = 12;
		const PhoneDefault = null;


		/**
		 * Protected member variable that maps to the database column person.email
		 * @var string strEmail
		 */
		protected $strEmail;
		const EmailMaxLength = 255;
		const EmailDefault = null;


		/**
		 * Protected member variable that maps to the database column person.notes
		 * @var string strNotes
		 */
		protected $strNotes;
		const NotesMaxLength = 255;
		const NotesDefault = null;


		/**
		 * Protected member variable that maps to the database column person.gender
		 * @var boolean blnGender
		 */
		protected $blnGender;
		const GenderDefault = null;


		/**
		 * Protected member variable that maps to the database column person.ethnicity_id
		 * @var integer intEthnicityId
		 */
		protected $intEthnicityId;
		const EthnicityIdDefault = null;


		/**
		 * Protected member variable that maps to the database column person.age
		 * @var integer intAge
		 */
		protected $intAge;
		const AgeDefault = null;


		/**
		 * Protected member variable that maps to the database column person.primary_language_id
		 * @var integer intPrimaryLanguageId
		 */
		protected $intPrimaryLanguageId;
		const PrimaryLanguageIdDefault = null;


		/**
		 * Protected member variable that maps to the database column person.disabled
		 * @var boolean blnDisabled
		 */
		protected $blnDisabled;
		const DisabledDefault = null;


		/**
		 * Protected member variable that maps to the database column person.elderly
		 * @var boolean blnElderly
		 */
		protected $blnElderly;
		const ElderlyDefault = null;


		/**
		 * Protected member variable that maps to the database column person.agency_referred_id
		 * @var integer intAgencyReferredId
		 */
		protected $intAgencyReferredId;
		const AgencyReferredIdDefault = null;


		/**
		 * Private member variable that stores a reference to a single CasesAsCase object
		 * (of type Cases), if this Person object was restored with
		 * an expansion on the person_case_assn association table.
		 * @var Cases _objCasesAsCase;
		 */
		private $_objCasesAsCase;

		/**
		 * Private member variable that stores a reference to an array of CasesAsCase objects
		 * (of type Cases[]), if this Person object was restored with
		 * an ExpandAsArray on the person_case_assn association table.
		 * @var Cases[] _objCasesAsCaseArray;
		 */
		private $_objCasesAsCaseArray = array();

		/**
		 * Private member variable that stores a reference to a single Address object
		 * (of type Address), if this Person object was restored with
		 * an expansion on the address association table.
		 * @var Address _objAddress;
		 */
		private $_objAddress;

		/**
		 * Private member variable that stores a reference to an array of Address objects
		 * (of type Address[]), if this Person object was restored with
		 * an ExpandAsArray on the address association table.
		 * @var Address[] _objAddressArray;
		 */
		private $_objAddressArray = array();

		/**
		 * Private member variable that stores a reference to a single Relationship object
		 * (of type Relationship), if this Person object was restored with
		 * an expansion on the relationship association table.
		 * @var Relationship _objRelationship;
		 */
		private $_objRelationship;

		/**
		 * Private member variable that stores a reference to an array of Relationship objects
		 * (of type Relationship[]), if this Person object was restored with
		 * an ExpandAsArray on the relationship association table.
		 * @var Relationship[] _objRelationshipArray;
		 */
		private $_objRelationshipArray = array();

		/**
		 * Private member variable that stores a reference to a single RelationshipAsRelatedTo object
		 * (of type Relationship), if this Person object was restored with
		 * an expansion on the relationship association table.
		 * @var Relationship _objRelationshipAsRelatedTo;
		 */
		private $_objRelationshipAsRelatedTo;

		/**
		 * Private member variable that stores a reference to an array of RelationshipAsRelatedTo objects
		 * (of type Relationship[]), if this Person object was restored with
		 * an ExpandAsArray on the relationship association table.
		 * @var Relationship[] _objRelationshipAsRelatedToArray;
		 */
		private $_objRelationshipAsRelatedToArray = array();

		/**
		 * Private member variable that stores a reference to a single Services object
		 * (of type Services), if this Person object was restored with
		 * an expansion on the services association table.
		 * @var Services _objServices;
		 */
		private $_objServices;

		/**
		 * Private member variable that stores a reference to an array of Services objects
		 * (of type Services[]), if this Person object was restored with
		 * an ExpandAsArray on the services association table.
		 * @var Services[] _objServicesArray;
		 */
		private $_objServicesArray = array();

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
		 * in the database column person.ethnicity_id.
		 *
		 * NOTE: Always use the Ethnicity property getter to correctly retrieve this Ethnicity object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Ethnicity objEthnicity
		 */
		protected $objEthnicity;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column person.primary_language_id.
		 *
		 * NOTE: Always use the PrimaryLanguage property getter to correctly retrieve this Language object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Language objPrimaryLanguage
		 */
		protected $objPrimaryLanguage;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column person.agency_referred_id.
		 *
		 * NOTE: Always use the AgencyReferred property getter to correctly retrieve this Agency object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Agency objAgencyReferred
		 */
		protected $objAgencyReferred;





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
		 * Load a Person from PK Info
		 * @param integer $intVictimWitnessNum
		 * @return Person
		 */
		public static function Load($intVictimWitnessNum) {
			// Use QuerySingle to Perform the Query
			return Person::QuerySingle(
				QQ::Equal(QQN::Person()->VictimWitnessNum, $intVictimWitnessNum)
			);
		}

		/**
		 * Load all People
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Person[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			// Call Person::QueryArray to perform the LoadAll query
			try {
				return Person::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all People
		 * @return int
		 */
		public static function CountAll() {
			// Call Person::QueryCount to perform the CountAll query
			return Person::QueryCount(QQ::All());
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
			$objDatabase = Person::GetDatabase();

			// Create/Build out the QueryBuilder object with Person-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'person');
			Person::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('person');

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
		 * Static Qcodo Query method to query for a single Person object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Person the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Person::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Instantiate a new Person object and return it

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Person::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Person::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcodo Query method to query for an array of Person objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Person[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Person::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Person::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = Person::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcodo Query method to query for a count of Person objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Person::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Person::GetDatabase();

			// Lookup the QCache for This Query Statement
			$objCache = new QCache('query', 'person_' . serialize($strConditions));
			if (!($strQuery = $objCache->GetData())) {
				// Not Found -- Go ahead and Create/Build out a new QueryBuilder object with Person-specific fields
				$objQueryBuilder = new QQueryBuilder($objDatabase);
				Person::GetSelectFields($objQueryBuilder);
				Person::GetFromFields($objQueryBuilder);

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
			return Person::InstantiateDbResult($objDbResult);
		}*/

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Person
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'person';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'victim_witness_num', $strAliasPrefix . 'victim_witness_num');
			$objBuilder->AddSelectItem($strTableName, 'first_name', $strAliasPrefix . 'first_name');
			$objBuilder->AddSelectItem($strTableName, 'last_name', $strAliasPrefix . 'last_name');
			$objBuilder->AddSelectItem($strTableName, 'date_of_birth', $strAliasPrefix . 'date_of_birth');
			$objBuilder->AddSelectItem($strTableName, 'social_security_number', $strAliasPrefix . 'social_security_number');
			$objBuilder->AddSelectItem($strTableName, 'phone', $strAliasPrefix . 'phone');
			$objBuilder->AddSelectItem($strTableName, 'email', $strAliasPrefix . 'email');
			$objBuilder->AddSelectItem($strTableName, 'notes', $strAliasPrefix . 'notes');
			$objBuilder->AddSelectItem($strTableName, 'gender', $strAliasPrefix . 'gender');
			$objBuilder->AddSelectItem($strTableName, 'ethnicity_id', $strAliasPrefix . 'ethnicity_id');
			$objBuilder->AddSelectItem($strTableName, 'age', $strAliasPrefix . 'age');
			$objBuilder->AddSelectItem($strTableName, 'primary_language_id', $strAliasPrefix . 'primary_language_id');
			$objBuilder->AddSelectItem($strTableName, 'disabled', $strAliasPrefix . 'disabled');
			$objBuilder->AddSelectItem($strTableName, 'elderly', $strAliasPrefix . 'elderly');
			$objBuilder->AddSelectItem($strTableName, 'agency_referred_id', $strAliasPrefix . 'agency_referred_id');
		}




		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Person from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Person::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param QDatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $objPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Person
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $objPreviousItem = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow)
				return null;

			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'victim_witness_num';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && ($objPreviousItem) &&
				($objPreviousItem->intVictimWitnessNum == $objDbRow->GetColumn($strAliasName, 'Integer'))) {

				// We are.  Now, prepare to check for ExpandAsArray clauses
				$blnExpandedViaArray = false;
				if (!$strAliasPrefix)
					$strAliasPrefix = 'person__';

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


				$strAlias = $strAliasPrefix . 'address__id';
				$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasName)))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objAddressArray)) {
						$objPreviousChildItem = $objPreviousItem->_objAddressArray[$intPreviousChildItemCount - 1];
						$objChildItem = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'address__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
						if ($objChildItem)
							$objPreviousItem->_objAddressArray[] = $objChildItem;
					} else
						$objPreviousItem->_objAddressArray[] = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'address__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
					$blnExpandedViaArray = true;
				}

				$strAlias = $strAliasPrefix . 'relationship__id';
				$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasName)))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objRelationshipArray)) {
						$objPreviousChildItem = $objPreviousItem->_objRelationshipArray[$intPreviousChildItemCount - 1];
						$objChildItem = Relationship::InstantiateDbRow($objDbRow, $strAliasPrefix . 'relationship__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
						if ($objChildItem)
							$objPreviousItem->_objRelationshipArray[] = $objChildItem;
					} else
						$objPreviousItem->_objRelationshipArray[] = Relationship::InstantiateDbRow($objDbRow, $strAliasPrefix . 'relationship__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
					$blnExpandedViaArray = true;
				}

				$strAlias = $strAliasPrefix . 'relationshipasrelatedto__id';
				$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasName)))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objRelationshipAsRelatedToArray)) {
						$objPreviousChildItem = $objPreviousItem->_objRelationshipAsRelatedToArray[$intPreviousChildItemCount - 1];
						$objChildItem = Relationship::InstantiateDbRow($objDbRow, $strAliasPrefix . 'relationshipasrelatedto__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
						if ($objChildItem)
							$objPreviousItem->_objRelationshipAsRelatedToArray[] = $objChildItem;
					} else
						$objPreviousItem->_objRelationshipAsRelatedToArray[] = Relationship::InstantiateDbRow($objDbRow, $strAliasPrefix . 'relationshipasrelatedto__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
					$blnExpandedViaArray = true;
				}

				$strAlias = $strAliasPrefix . 'services__id';
				$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
				if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
					(!is_null($objDbRow->GetColumn($strAliasName)))) {
					if ($intPreviousChildItemCount = count($objPreviousItem->_objServicesArray)) {
						$objPreviousChildItem = $objPreviousItem->_objServicesArray[$intPreviousChildItemCount - 1];
						$objChildItem = Services::InstantiateDbRow($objDbRow, $strAliasPrefix . 'services__', $strExpandAsArrayNodes, $objPreviousChildItem, $strColumnAliasArray);
						if ($objChildItem)
							$objPreviousItem->_objServicesArray[] = $objChildItem;
					} else
						$objPreviousItem->_objServicesArray[] = Services::InstantiateDbRow($objDbRow, $strAliasPrefix . 'services__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
					$blnExpandedViaArray = true;
				}

				// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
				if ($blnExpandedViaArray)
					return false;
				else if ($strAliasPrefix == 'person__')
					$strAliasPrefix = null;
			}

			// Create a new instance of the Person object
			$objToReturn = new Person();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'victim_witness_num', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'victim_witness_num'] : $strAliasPrefix . 'victim_witness_num';
			$objToReturn->intVictimWitnessNum = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'first_name', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'first_name'] : $strAliasPrefix . 'first_name';
			$objToReturn->strFirstName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'last_name', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'last_name'] : $strAliasPrefix . 'last_name';
			$objToReturn->strLastName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'date_of_birth', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'date_of_birth'] : $strAliasPrefix . 'date_of_birth';
			$objToReturn->dttDateOfBirth = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAliasName = array_key_exists($strAliasPrefix . 'social_security_number', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'social_security_number'] : $strAliasPrefix . 'social_security_number';
			$objToReturn->intSocialSecurityNumber = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'phone', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'phone'] : $strAliasPrefix . 'phone';
			$objToReturn->strPhone = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'email', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'email'] : $strAliasPrefix . 'email';
			$objToReturn->strEmail = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'notes', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'notes'] : $strAliasPrefix . 'notes';
			$objToReturn->strNotes = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'gender', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'gender'] : $strAliasPrefix . 'gender';
			$objToReturn->blnGender = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAliasName = array_key_exists($strAliasPrefix . 'ethnicity_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'ethnicity_id'] : $strAliasPrefix . 'ethnicity_id';
			$objToReturn->intEthnicityId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'age', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'age'] : $strAliasPrefix . 'age';
			$objToReturn->intAge = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'primary_language_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'primary_language_id'] : $strAliasPrefix . 'primary_language_id';
			$objToReturn->intPrimaryLanguageId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'disabled', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'disabled'] : $strAliasPrefix . 'disabled';
			$objToReturn->blnDisabled = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAliasName = array_key_exists($strAliasPrefix . 'elderly', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'elderly'] : $strAliasPrefix . 'elderly';
			$objToReturn->blnElderly = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAliasName = array_key_exists($strAliasPrefix . 'agency_referred_id', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'agency_referred_id'] : $strAliasPrefix . 'agency_referred_id';
			$objToReturn->intAgencyReferredId = $objDbRow->GetColumn($strAliasName, 'Integer');

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'person__';

			// Check for Ethnicity Early Binding
			$strAlias = $strAliasPrefix . 'ethnicity_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objEthnicity = Ethnicity::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ethnicity_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for PrimaryLanguage Early Binding
			$strAlias = $strAliasPrefix . 'primary_language_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objPrimaryLanguage = Language::InstantiateDbRow($objDbRow, $strAliasPrefix . 'primary_language_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for AgencyReferred Early Binding
			$strAlias = $strAliasPrefix . 'agency_referred_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objAgencyReferred = Agency::InstantiateDbRow($objDbRow, $strAliasPrefix . 'agency_referred_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);



			// Check for CasesAsCase Virtual Binding
			$strAlias = $strAliasPrefix . 'casesascase__case_id__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objCasesAsCaseArray[] = Cases::InstantiateDbRow($objDbRow, $strAliasPrefix . 'casesascase__case_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objCasesAsCase = Cases::InstantiateDbRow($objDbRow, $strAliasPrefix . 'casesascase__case_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}


			// Check for Address Virtual Binding
			$strAlias = $strAliasPrefix . 'address__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objAddressArray[] = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'address__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objAddress = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'address__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for Relationship Virtual Binding
			$strAlias = $strAliasPrefix . 'relationship__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objRelationshipArray[] = Relationship::InstantiateDbRow($objDbRow, $strAliasPrefix . 'relationship__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objRelationship = Relationship::InstantiateDbRow($objDbRow, $strAliasPrefix . 'relationship__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for RelationshipAsRelatedTo Virtual Binding
			$strAlias = $strAliasPrefix . 'relationshipasrelatedto__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objRelationshipAsRelatedToArray[] = Relationship::InstantiateDbRow($objDbRow, $strAliasPrefix . 'relationshipasrelatedto__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objRelationshipAsRelatedTo = Relationship::InstantiateDbRow($objDbRow, $strAliasPrefix . 'relationshipasrelatedto__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for Services Virtual Binding
			$strAlias = $strAliasPrefix . 'services__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objServicesArray[] = Services::InstantiateDbRow($objDbRow, $strAliasPrefix . 'services__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objServices = Services::InstantiateDbRow($objDbRow, $strAliasPrefix . 'services__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of People from a Database Result
		 * @param QDatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Person[]
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
					$objItem = Person::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objLastRowItem, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
						$objLastRowItem = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Person::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate a single Person object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Person next row resulting from the query
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
			return Person::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Person object,
		 * by VictimWitnessNum Index(es)
		 * @param integer $intVictimWitnessNum
		 * @return Person
		*/
		public static function LoadByVictimWitnessNum($intVictimWitnessNum, $objOptionalClauses = null) {
			return Person::QuerySingle(
				QQ::Equal(QQN::Person()->VictimWitnessNum, $intVictimWitnessNum)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of Person objects,
		 * by EthnicityId Index(es)
		 * @param integer $intEthnicityId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Person[]
		*/
		public static function LoadArrayByEthnicityId($intEthnicityId, $objOptionalClauses = null) {
			// Call Person::QueryArray to perform the LoadArrayByEthnicityId query
			try {
				return Person::QueryArray(
					QQ::Equal(QQN::Person()->EthnicityId, $intEthnicityId),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count People
		 * by EthnicityId Index(es)
		 * @param integer $intEthnicityId
		 * @return int
		*/
		public static function CountByEthnicityId($intEthnicityId, $objOptionalClauses = null) {
			// Call Person::QueryCount to perform the CountByEthnicityId query
			return Person::QueryCount(
				QQ::Equal(QQN::Person()->EthnicityId, $intEthnicityId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of Person objects,
		 * by PrimaryLanguageId Index(es)
		 * @param integer $intPrimaryLanguageId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Person[]
		*/
		public static function LoadArrayByPrimaryLanguageId($intPrimaryLanguageId, $objOptionalClauses = null) {
			// Call Person::QueryArray to perform the LoadArrayByPrimaryLanguageId query
			try {
				return Person::QueryArray(
					QQ::Equal(QQN::Person()->PrimaryLanguageId, $intPrimaryLanguageId),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count People
		 * by PrimaryLanguageId Index(es)
		 * @param integer $intPrimaryLanguageId
		 * @return int
		*/
		public static function CountByPrimaryLanguageId($intPrimaryLanguageId, $objOptionalClauses = null) {
			// Call Person::QueryCount to perform the CountByPrimaryLanguageId query
			return Person::QueryCount(
				QQ::Equal(QQN::Person()->PrimaryLanguageId, $intPrimaryLanguageId)
			, $objOptionalClauses
			);
		}
			
		/**
		 * Load an array of Person objects,
		 * by AgencyReferredId Index(es)
		 * @param integer $intAgencyReferredId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Person[]
		*/
		public static function LoadArrayByAgencyReferredId($intAgencyReferredId, $objOptionalClauses = null) {
			// Call Person::QueryArray to perform the LoadArrayByAgencyReferredId query
			try {
				return Person::QueryArray(
					QQ::Equal(QQN::Person()->AgencyReferredId, $intAgencyReferredId),
					$objOptionalClauses
					);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count People
		 * by AgencyReferredId Index(es)
		 * @param integer $intAgencyReferredId
		 * @return int
		*/
		public static function CountByAgencyReferredId($intAgencyReferredId, $objOptionalClauses = null) {
			// Call Person::QueryCount to perform the CountByAgencyReferredId query
			return Person::QueryCount(
				QQ::Equal(QQN::Person()->AgencyReferredId, $intAgencyReferredId)
			, $objOptionalClauses
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////
			/**
		 * Load an array of Cases objects for a given CasesAsCase
		 * via the person_case_assn table
		 * @param integer $intCaseId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Person[]
		*/
		public static function LoadArrayByCasesAsCase($intCaseId, $objOptionalClauses = null) {
			// Call Person::QueryArray to perform the LoadArrayByCasesAsCase query
			try {
				return Person::QueryArray(
					QQ::Equal(QQN::Person()->CasesAsCase->CaseId, $intCaseId),
					$objOptionalClauses
				);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count People for a given CasesAsCase
		 * via the person_case_assn table
		 * @param integer $intCaseId
		 * @return int
		*/
		public static function CountByCasesAsCase($intCaseId, $objOptionalClauses = null) {
			return Person::QueryCount(
				QQ::Equal(QQN::Person()->CasesAsCase->CaseId, $intCaseId),
				$objOptionalClauses
			);
		}




		//////////////////////////////////////
		// SAVE, DELETE, RELOAD and JOURNALING
		//////////////////////////////////////

		/**
		 * Save this Person
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Person::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `person` (
							`first_name`,
							`last_name`,
							`date_of_birth`,
							`social_security_number`,
							`phone`,
							`email`,
							`notes`,
							`gender`,
							`ethnicity_id`,
							`age`,
							`primary_language_id`,
							`disabled`,
							`elderly`,
							`agency_referred_id`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strFirstName) . ',
							' . $objDatabase->SqlVariable($this->strLastName) . ',
							' . $objDatabase->SqlVariable($this->dttDateOfBirth) . ',
							' . $objDatabase->SqlVariable($this->intSocialSecurityNumber) . ',
							' . $objDatabase->SqlVariable($this->strPhone) . ',
							' . $objDatabase->SqlVariable($this->strEmail) . ',
							' . $objDatabase->SqlVariable($this->strNotes) . ',
							' . $objDatabase->SqlVariable($this->blnGender) . ',
							' . $objDatabase->SqlVariable($this->intEthnicityId) . ',
							' . $objDatabase->SqlVariable($this->intAge) . ',
							' . $objDatabase->SqlVariable($this->intPrimaryLanguageId) . ',
							' . $objDatabase->SqlVariable($this->blnDisabled) . ',
							' . $objDatabase->SqlVariable($this->blnElderly) . ',
							' . $objDatabase->SqlVariable($this->intAgencyReferredId) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intVictimWitnessNum = $objDatabase->InsertId('person', 'victim_witness_num');

					// Journaling
					if ($objDatabase->JournalingDatabase) $this->Journal('INSERT');

				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`person`
						SET
							`first_name` = ' . $objDatabase->SqlVariable($this->strFirstName) . ',
							`last_name` = ' . $objDatabase->SqlVariable($this->strLastName) . ',
							`date_of_birth` = ' . $objDatabase->SqlVariable($this->dttDateOfBirth) . ',
							`social_security_number` = ' . $objDatabase->SqlVariable($this->intSocialSecurityNumber) . ',
							`phone` = ' . $objDatabase->SqlVariable($this->strPhone) . ',
							`email` = ' . $objDatabase->SqlVariable($this->strEmail) . ',
							`notes` = ' . $objDatabase->SqlVariable($this->strNotes) . ',
							`gender` = ' . $objDatabase->SqlVariable($this->blnGender) . ',
							`ethnicity_id` = ' . $objDatabase->SqlVariable($this->intEthnicityId) . ',
							`age` = ' . $objDatabase->SqlVariable($this->intAge) . ',
							`primary_language_id` = ' . $objDatabase->SqlVariable($this->intPrimaryLanguageId) . ',
							`disabled` = ' . $objDatabase->SqlVariable($this->blnDisabled) . ',
							`elderly` = ' . $objDatabase->SqlVariable($this->blnElderly) . ',
							`agency_referred_id` = ' . $objDatabase->SqlVariable($this->intAgencyReferredId) . '
						WHERE
							`victim_witness_num` = ' . $objDatabase->SqlVariable($this->intVictimWitnessNum) . '
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
		 * Delete this Person
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intVictimWitnessNum)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Person with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Person::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`person`
				WHERE
					`victim_witness_num` = ' . $objDatabase->SqlVariable($this->intVictimWitnessNum) . '');

			// Journaling
			if ($objDatabase->JournalingDatabase) $this->Journal('DELETE');
		}

		/**
		 * Delete all People
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Person::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`person`');
		}

		/**
		 * Truncate person table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Person::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `person`');
		}

		/**
		 * Reload this Person from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Person object.');

			// Reload the Object
			$objReloaded = Person::Load($this->intVictimWitnessNum);

			// Update $this's local variables to match
			$this->strFirstName = $objReloaded->strFirstName;
			$this->strLastName = $objReloaded->strLastName;
			$this->dttDateOfBirth = $objReloaded->dttDateOfBirth;
			$this->intSocialSecurityNumber = $objReloaded->intSocialSecurityNumber;
			$this->strPhone = $objReloaded->strPhone;
			$this->strEmail = $objReloaded->strEmail;
			$this->strNotes = $objReloaded->strNotes;
			$this->blnGender = $objReloaded->blnGender;
			$this->EthnicityId = $objReloaded->EthnicityId;
			$this->intAge = $objReloaded->intAge;
			$this->PrimaryLanguageId = $objReloaded->PrimaryLanguageId;
			$this->blnDisabled = $objReloaded->blnDisabled;
			$this->blnElderly = $objReloaded->blnElderly;
			$this->AgencyReferredId = $objReloaded->AgencyReferredId;
		}

		/**
		 * Journals the current object into the Log database.
		 * Used internally as a helper method.
		 * @param string $strJournalCommand
		 */
		public function Journal($strJournalCommand) {
			$objDatabase = Person::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `person` (
					`victim_witness_num`,
					`first_name`,
					`last_name`,
					`date_of_birth`,
					`social_security_number`,
					`phone`,
					`email`,
					`notes`,
					`gender`,
					`ethnicity_id`,
					`age`,
					`primary_language_id`,
					`disabled`,
					`elderly`,
					`agency_referred_id`,
					__sys_login_id,
					__sys_action,
					__sys_date
				) VALUES (
					' . $objDatabase->SqlVariable($this->intVictimWitnessNum) . ',
					' . $objDatabase->SqlVariable($this->strFirstName) . ',
					' . $objDatabase->SqlVariable($this->strLastName) . ',
					' . $objDatabase->SqlVariable($this->dttDateOfBirth) . ',
					' . $objDatabase->SqlVariable($this->intSocialSecurityNumber) . ',
					' . $objDatabase->SqlVariable($this->strPhone) . ',
					' . $objDatabase->SqlVariable($this->strEmail) . ',
					' . $objDatabase->SqlVariable($this->strNotes) . ',
					' . $objDatabase->SqlVariable($this->blnGender) . ',
					' . $objDatabase->SqlVariable($this->intEthnicityId) . ',
					' . $objDatabase->SqlVariable($this->intAge) . ',
					' . $objDatabase->SqlVariable($this->intPrimaryLanguageId) . ',
					' . $objDatabase->SqlVariable($this->blnDisabled) . ',
					' . $objDatabase->SqlVariable($this->blnElderly) . ',
					' . $objDatabase->SqlVariable($this->intAgencyReferredId) . ',
					' . (($objDatabase->JournaledById) ? $objDatabase->JournaledById : 'NULL') . ',
					' . $objDatabase->SqlVariable($strJournalCommand) . ',
					NOW()
				);
			');
		}

		/**
		 * Gets the historical journal for an object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @param integer intVictimWitnessNum
		 * @return Person[]
		 */
		public static function GetJournalForId($intVictimWitnessNum) {
			$objDatabase = Person::GetDatabase()->JournalingDatabase;

			$objResult = $objDatabase->Query('SELECT * FROM person WHERE victim_witness_num = ' .
				$objDatabase->SqlVariable($intVictimWitnessNum) . ' ORDER BY __sys_date');

			return Person::InstantiateDbResult($objResult);
		}

		/**
		 * Gets the historical journal for this object from the log database.
		 * Objects will have VirtualAttributes available to lookup login, date, and action information from the journal object.
		 * @return Person[]
		 */
		public function GetJournal() {
			return Person::GetJournalForId($this->intVictimWitnessNum);
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
				case 'VictimWitnessNum':
					// Gets the value for intVictimWitnessNum (Read-Only PK)
					// @return integer
					return $this->intVictimWitnessNum;

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

				case 'SocialSecurityNumber':
					// Gets the value for intSocialSecurityNumber 
					// @return integer
					return $this->intSocialSecurityNumber;

				case 'Phone':
					// Gets the value for strPhone 
					// @return string
					return $this->strPhone;

				case 'Email':
					// Gets the value for strEmail 
					// @return string
					return $this->strEmail;

				case 'Notes':
					// Gets the value for strNotes 
					// @return string
					return $this->strNotes;

				case 'Gender':
					// Gets the value for blnGender 
					// @return boolean
					return $this->blnGender;

				case 'EthnicityId':
					// Gets the value for intEthnicityId 
					// @return integer
					return $this->intEthnicityId;

				case 'Age':
					// Gets the value for intAge 
					// @return integer
					return $this->intAge;

				case 'PrimaryLanguageId':
					// Gets the value for intPrimaryLanguageId 
					// @return integer
					return $this->intPrimaryLanguageId;

				case 'Disabled':
					// Gets the value for blnDisabled 
					// @return boolean
					return $this->blnDisabled;

				case 'Elderly':
					// Gets the value for blnElderly 
					// @return boolean
					return $this->blnElderly;

				case 'AgencyReferredId':
					// Gets the value for intAgencyReferredId 
					// @return integer
					return $this->intAgencyReferredId;


				///////////////////
				// Member Objects
				///////////////////
				case 'Ethnicity':
					// Gets the value for the Ethnicity object referenced by intEthnicityId 
					// @return Ethnicity
					try {
						if ((!$this->objEthnicity) && (!is_null($this->intEthnicityId)))
							$this->objEthnicity = Ethnicity::Load($this->intEthnicityId);
						return $this->objEthnicity;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PrimaryLanguage':
					// Gets the value for the Language object referenced by intPrimaryLanguageId 
					// @return Language
					try {
						if ((!$this->objPrimaryLanguage) && (!is_null($this->intPrimaryLanguageId)))
							$this->objPrimaryLanguage = Language::Load($this->intPrimaryLanguageId);
						return $this->objPrimaryLanguage;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AgencyReferred':
					// Gets the value for the Agency object referenced by intAgencyReferredId 
					// @return Agency
					try {
						if ((!$this->objAgencyReferred) && (!is_null($this->intAgencyReferredId)))
							$this->objAgencyReferred = Agency::Load($this->intAgencyReferredId);
						return $this->objAgencyReferred;
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
					// if set due to an expansion on the person_case_assn association table
					// @return Cases
					return $this->_objCasesAsCase;

				case '_CasesAsCaseArray':
					// Gets the value for the private _objCasesAsCaseArray (Read-Only)
					// if set due to an ExpandAsArray on the person_case_assn association table
					// @return Cases[]
					return (array) $this->_objCasesAsCaseArray;

				case '_Address':
					// Gets the value for the private _objAddress (Read-Only)
					// if set due to an expansion on the address.person_id reverse relationship
					// @return Address
					return $this->_objAddress;

				case '_AddressArray':
					// Gets the value for the private _objAddressArray (Read-Only)
					// if set due to an ExpandAsArray on the address.person_id reverse relationship
					// @return Address[]
					return (array) $this->_objAddressArray;

				case '_Relationship':
					// Gets the value for the private _objRelationship (Read-Only)
					// if set due to an expansion on the relationship.person_id reverse relationship
					// @return Relationship
					return $this->_objRelationship;

				case '_RelationshipArray':
					// Gets the value for the private _objRelationshipArray (Read-Only)
					// if set due to an ExpandAsArray on the relationship.person_id reverse relationship
					// @return Relationship[]
					return (array) $this->_objRelationshipArray;

				case '_RelationshipAsRelatedTo':
					// Gets the value for the private _objRelationshipAsRelatedTo (Read-Only)
					// if set due to an expansion on the relationship.related_to_person_id reverse relationship
					// @return Relationship
					return $this->_objRelationshipAsRelatedTo;

				case '_RelationshipAsRelatedToArray':
					// Gets the value for the private _objRelationshipAsRelatedToArray (Read-Only)
					// if set due to an ExpandAsArray on the relationship.related_to_person_id reverse relationship
					// @return Relationship[]
					return (array) $this->_objRelationshipAsRelatedToArray;

				case '_Services':
					// Gets the value for the private _objServices (Read-Only)
					// if set due to an expansion on the services.person_id reverse relationship
					// @return Services
					return $this->_objServices;

				case '_ServicesArray':
					// Gets the value for the private _objServicesArray (Read-Only)
					// if set due to an ExpandAsArray on the services.person_id reverse relationship
					// @return Services[]
					return (array) $this->_objServicesArray;


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

				case 'SocialSecurityNumber':
					// Sets the value for intSocialSecurityNumber 
					// @param integer $mixValue
					// @return integer
					try {
						return ($this->intSocialSecurityNumber = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Phone':
					// Sets the value for strPhone 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strPhone = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Email':
					// Sets the value for strEmail 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strEmail = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Notes':
					// Sets the value for strNotes 
					// @param string $mixValue
					// @return string
					try {
						return ($this->strNotes = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Gender':
					// Sets the value for blnGender 
					// @param boolean $mixValue
					// @return boolean
					try {
						return ($this->blnGender = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'EthnicityId':
					// Sets the value for intEthnicityId 
					// @param integer $mixValue
					// @return integer
					try {
						$this->objEthnicity = null;
						return ($this->intEthnicityId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Age':
					// Sets the value for intAge 
					// @param integer $mixValue
					// @return integer
					try {
						return ($this->intAge = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PrimaryLanguageId':
					// Sets the value for intPrimaryLanguageId 
					// @param integer $mixValue
					// @return integer
					try {
						$this->objPrimaryLanguage = null;
						return ($this->intPrimaryLanguageId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Disabled':
					// Sets the value for blnDisabled 
					// @param boolean $mixValue
					// @return boolean
					try {
						return ($this->blnDisabled = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Elderly':
					// Sets the value for blnElderly 
					// @param boolean $mixValue
					// @return boolean
					try {
						return ($this->blnElderly = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AgencyReferredId':
					// Sets the value for intAgencyReferredId 
					// @param integer $mixValue
					// @return integer
					try {
						$this->objAgencyReferred = null;
						return ($this->intAgencyReferredId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'Ethnicity':
					// Sets the value for the Ethnicity object referenced by intEthnicityId 
					// @param Ethnicity $mixValue
					// @return Ethnicity
					if (is_null($mixValue)) {
						$this->intEthnicityId = null;
						$this->objEthnicity = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Ethnicity object
						try {
							$mixValue = QType::Cast($mixValue, 'Ethnicity');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Ethnicity object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved Ethnicity for this Person');

						// Update Local Member Variables
						$this->objEthnicity = $mixValue;
						$this->intEthnicityId = $mixValue->Id;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'PrimaryLanguage':
					// Sets the value for the Language object referenced by intPrimaryLanguageId 
					// @param Language $mixValue
					// @return Language
					if (is_null($mixValue)) {
						$this->intPrimaryLanguageId = null;
						$this->objPrimaryLanguage = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Language object
						try {
							$mixValue = QType::Cast($mixValue, 'Language');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Language object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved PrimaryLanguage for this Person');

						// Update Local Member Variables
						$this->objPrimaryLanguage = $mixValue;
						$this->intPrimaryLanguageId = $mixValue->Id;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'AgencyReferred':
					// Sets the value for the Agency object referenced by intAgencyReferredId 
					// @param Agency $mixValue
					// @return Agency
					if (is_null($mixValue)) {
						$this->intAgencyReferredId = null;
						$this->objAgencyReferred = null;
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
							throw new QCallerException('Unable to set an unsaved AgencyReferred for this Person');

						// Update Local Member Variables
						$this->objAgencyReferred = $mixValue;
						$this->intAgencyReferredId = $mixValue->Id;

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

			
		
		// Related Objects' Methods for Address
		//-------------------------------------------------------------------

		/**
		 * Gets all associated Addresses as an array of Address objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Address[]
		*/ 
		public function GetAddressArray($objOptionalClauses = null) {
			if ((is_null($this->intVictimWitnessNum)))
				return array();

			try {
				return Address::LoadArrayByPersonId($this->intVictimWitnessNum, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated Addresses
		 * @return int
		*/ 
		public function CountAddresses() {
			if ((is_null($this->intVictimWitnessNum)))
				return 0;

			return Address::CountByPersonId($this->intVictimWitnessNum);
		}

		/**
		 * Associates a Address
		 * @param Address $objAddress
		 * @return void
		*/ 
		public function AssociateAddress(Address $objAddress) {
			if ((is_null($this->intVictimWitnessNum)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAddress on this unsaved Person.');
			if ((is_null($objAddress->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAddress on this Person with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = Person::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`person_id` = ' . $objDatabase->SqlVariable($this->intVictimWitnessNum) . '
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objAddress->Id) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objAddress->PersonId = $this->intVictimWitnessNum;
				$objAddress->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates a Address
		 * @param Address $objAddress
		 * @return void
		*/ 
		public function UnassociateAddress(Address $objAddress) {
			if ((is_null($this->intVictimWitnessNum)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddress on this unsaved Person.');
			if ((is_null($objAddress->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddress on this Person with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = Person::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`person_id` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objAddress->Id) . ' AND
					`person_id` = ' . $objDatabase->SqlVariable($this->intVictimWitnessNum) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objAddress->PersonId = null;
				$objAddress->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates all Addresses
		 * @return void
		*/ 
		public function UnassociateAllAddresses() {
			if ((is_null($this->intVictimWitnessNum)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddress on this unsaved Person.');

			// Get the Database Object for this Class
			$objDatabase = Person::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (Address::LoadArrayByPersonId($this->intVictimWitnessNum) as $objAddress) {
					$objAddress->PersonId = null;
					$objAddress->Journal('UPDATE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`person_id` = null
				WHERE
					`person_id` = ' . $objDatabase->SqlVariable($this->intVictimWitnessNum) . '
			');
		}

		/**
		 * Deletes an associated Address
		 * @param Address $objAddress
		 * @return void
		*/ 
		public function DeleteAssociatedAddress(Address $objAddress) {
			if ((is_null($this->intVictimWitnessNum)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddress on this unsaved Person.');
			if ((is_null($objAddress->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddress on this Person with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = Person::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`address`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objAddress->Id) . ' AND
					`person_id` = ' . $objDatabase->SqlVariable($this->intVictimWitnessNum) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objAddress->Journal('DELETE');
			}
		}

		/**
		 * Deletes all associated Addresses
		 * @return void
		*/ 
		public function DeleteAllAddresses() {
			if ((is_null($this->intVictimWitnessNum)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddress on this unsaved Person.');

			// Get the Database Object for this Class
			$objDatabase = Person::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (Address::LoadArrayByPersonId($this->intVictimWitnessNum) as $objAddress) {
					$objAddress->Journal('DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`address`
				WHERE
					`person_id` = ' . $objDatabase->SqlVariable($this->intVictimWitnessNum) . '
			');
		}

			
		
		// Related Objects' Methods for Relationship
		//-------------------------------------------------------------------

		/**
		 * Gets all associated Relationships as an array of Relationship objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Relationship[]
		*/ 
		public function GetRelationshipArray($objOptionalClauses = null) {
			if ((is_null($this->intVictimWitnessNum)))
				return array();

			try {
				return Relationship::LoadArrayByPersonId($this->intVictimWitnessNum, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated Relationships
		 * @return int
		*/ 
		public function CountRelationships() {
			if ((is_null($this->intVictimWitnessNum)))
				return 0;

			return Relationship::CountByPersonId($this->intVictimWitnessNum);
		}

		/**
		 * Associates a Relationship
		 * @param Relationship $objRelationship
		 * @return void
		*/ 
		public function AssociateRelationship(Relationship $objRelationship) {
			if ((is_null($this->intVictimWitnessNum)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateRelationship on this unsaved Person.');
			if ((is_null($objRelationship->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateRelationship on this Person with an unsaved Relationship.');

			// Get the Database Object for this Class
			$objDatabase = Person::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`relationship`
				SET
					`person_id` = ' . $objDatabase->SqlVariable($this->intVictimWitnessNum) . '
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objRelationship->Id) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objRelationship->PersonId = $this->intVictimWitnessNum;
				$objRelationship->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates a Relationship
		 * @param Relationship $objRelationship
		 * @return void
		*/ 
		public function UnassociateRelationship(Relationship $objRelationship) {
			if ((is_null($this->intVictimWitnessNum)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRelationship on this unsaved Person.');
			if ((is_null($objRelationship->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRelationship on this Person with an unsaved Relationship.');

			// Get the Database Object for this Class
			$objDatabase = Person::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`relationship`
				SET
					`person_id` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objRelationship->Id) . ' AND
					`person_id` = ' . $objDatabase->SqlVariable($this->intVictimWitnessNum) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objRelationship->PersonId = null;
				$objRelationship->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates all Relationships
		 * @return void
		*/ 
		public function UnassociateAllRelationships() {
			if ((is_null($this->intVictimWitnessNum)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRelationship on this unsaved Person.');

			// Get the Database Object for this Class
			$objDatabase = Person::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (Relationship::LoadArrayByPersonId($this->intVictimWitnessNum) as $objRelationship) {
					$objRelationship->PersonId = null;
					$objRelationship->Journal('UPDATE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`relationship`
				SET
					`person_id` = null
				WHERE
					`person_id` = ' . $objDatabase->SqlVariable($this->intVictimWitnessNum) . '
			');
		}

		/**
		 * Deletes an associated Relationship
		 * @param Relationship $objRelationship
		 * @return void
		*/ 
		public function DeleteAssociatedRelationship(Relationship $objRelationship) {
			if ((is_null($this->intVictimWitnessNum)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRelationship on this unsaved Person.');
			if ((is_null($objRelationship->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRelationship on this Person with an unsaved Relationship.');

			// Get the Database Object for this Class
			$objDatabase = Person::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`relationship`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objRelationship->Id) . ' AND
					`person_id` = ' . $objDatabase->SqlVariable($this->intVictimWitnessNum) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objRelationship->Journal('DELETE');
			}
		}

		/**
		 * Deletes all associated Relationships
		 * @return void
		*/ 
		public function DeleteAllRelationships() {
			if ((is_null($this->intVictimWitnessNum)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRelationship on this unsaved Person.');

			// Get the Database Object for this Class
			$objDatabase = Person::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (Relationship::LoadArrayByPersonId($this->intVictimWitnessNum) as $objRelationship) {
					$objRelationship->Journal('DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`relationship`
				WHERE
					`person_id` = ' . $objDatabase->SqlVariable($this->intVictimWitnessNum) . '
			');
		}

			
		
		// Related Objects' Methods for RelationshipAsRelatedTo
		//-------------------------------------------------------------------

		/**
		 * Gets all associated RelationshipsAsRelatedTo as an array of Relationship objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Relationship[]
		*/ 
		public function GetRelationshipAsRelatedToArray($objOptionalClauses = null) {
			if ((is_null($this->intVictimWitnessNum)))
				return array();

			try {
				return Relationship::LoadArrayByRelatedToPersonId($this->intVictimWitnessNum, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated RelationshipsAsRelatedTo
		 * @return int
		*/ 
		public function CountRelationshipsAsRelatedTo() {
			if ((is_null($this->intVictimWitnessNum)))
				return 0;

			return Relationship::CountByRelatedToPersonId($this->intVictimWitnessNum);
		}

		/**
		 * Associates a RelationshipAsRelatedTo
		 * @param Relationship $objRelationship
		 * @return void
		*/ 
		public function AssociateRelationshipAsRelatedTo(Relationship $objRelationship) {
			if ((is_null($this->intVictimWitnessNum)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateRelationshipAsRelatedTo on this unsaved Person.');
			if ((is_null($objRelationship->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateRelationshipAsRelatedTo on this Person with an unsaved Relationship.');

			// Get the Database Object for this Class
			$objDatabase = Person::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`relationship`
				SET
					`related_to_person_id` = ' . $objDatabase->SqlVariable($this->intVictimWitnessNum) . '
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objRelationship->Id) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objRelationship->RelatedToPersonId = $this->intVictimWitnessNum;
				$objRelationship->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates a RelationshipAsRelatedTo
		 * @param Relationship $objRelationship
		 * @return void
		*/ 
		public function UnassociateRelationshipAsRelatedTo(Relationship $objRelationship) {
			if ((is_null($this->intVictimWitnessNum)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRelationshipAsRelatedTo on this unsaved Person.');
			if ((is_null($objRelationship->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRelationshipAsRelatedTo on this Person with an unsaved Relationship.');

			// Get the Database Object for this Class
			$objDatabase = Person::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`relationship`
				SET
					`related_to_person_id` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objRelationship->Id) . ' AND
					`related_to_person_id` = ' . $objDatabase->SqlVariable($this->intVictimWitnessNum) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objRelationship->RelatedToPersonId = null;
				$objRelationship->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates all RelationshipsAsRelatedTo
		 * @return void
		*/ 
		public function UnassociateAllRelationshipsAsRelatedTo() {
			if ((is_null($this->intVictimWitnessNum)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRelationshipAsRelatedTo on this unsaved Person.');

			// Get the Database Object for this Class
			$objDatabase = Person::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (Relationship::LoadArrayByRelatedToPersonId($this->intVictimWitnessNum) as $objRelationship) {
					$objRelationship->RelatedToPersonId = null;
					$objRelationship->Journal('UPDATE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`relationship`
				SET
					`related_to_person_id` = null
				WHERE
					`related_to_person_id` = ' . $objDatabase->SqlVariable($this->intVictimWitnessNum) . '
			');
		}

		/**
		 * Deletes an associated RelationshipAsRelatedTo
		 * @param Relationship $objRelationship
		 * @return void
		*/ 
		public function DeleteAssociatedRelationshipAsRelatedTo(Relationship $objRelationship) {
			if ((is_null($this->intVictimWitnessNum)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRelationshipAsRelatedTo on this unsaved Person.');
			if ((is_null($objRelationship->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRelationshipAsRelatedTo on this Person with an unsaved Relationship.');

			// Get the Database Object for this Class
			$objDatabase = Person::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`relationship`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objRelationship->Id) . ' AND
					`related_to_person_id` = ' . $objDatabase->SqlVariable($this->intVictimWitnessNum) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objRelationship->Journal('DELETE');
			}
		}

		/**
		 * Deletes all associated RelationshipsAsRelatedTo
		 * @return void
		*/ 
		public function DeleteAllRelationshipsAsRelatedTo() {
			if ((is_null($this->intVictimWitnessNum)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRelationshipAsRelatedTo on this unsaved Person.');

			// Get the Database Object for this Class
			$objDatabase = Person::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (Relationship::LoadArrayByRelatedToPersonId($this->intVictimWitnessNum) as $objRelationship) {
					$objRelationship->Journal('DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`relationship`
				WHERE
					`related_to_person_id` = ' . $objDatabase->SqlVariable($this->intVictimWitnessNum) . '
			');
		}

			
		
		// Related Objects' Methods for Services
		//-------------------------------------------------------------------

		/**
		 * Gets all associated Serviceses as an array of Services objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Services[]
		*/ 
		public function GetServicesArray($objOptionalClauses = null) {
			if ((is_null($this->intVictimWitnessNum)))
				return array();

			try {
				return Services::LoadArrayByPersonId($this->intVictimWitnessNum, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated Serviceses
		 * @return int
		*/ 
		public function CountServiceses() {
			if ((is_null($this->intVictimWitnessNum)))
				return 0;

			return Services::CountByPersonId($this->intVictimWitnessNum);
		}

		/**
		 * Associates a Services
		 * @param Services $objServices
		 * @return void
		*/ 
		public function AssociateServices(Services $objServices) {
			if ((is_null($this->intVictimWitnessNum)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateServices on this unsaved Person.');
			if ((is_null($objServices->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateServices on this Person with an unsaved Services.');

			// Get the Database Object for this Class
			$objDatabase = Person::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`services`
				SET
					`person_id` = ' . $objDatabase->SqlVariable($this->intVictimWitnessNum) . '
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objServices->Id) . '
			');

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objServices->PersonId = $this->intVictimWitnessNum;
				$objServices->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates a Services
		 * @param Services $objServices
		 * @return void
		*/ 
		public function UnassociateServices(Services $objServices) {
			if ((is_null($this->intVictimWitnessNum)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateServices on this unsaved Person.');
			if ((is_null($objServices->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateServices on this Person with an unsaved Services.');

			// Get the Database Object for this Class
			$objDatabase = Person::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`services`
				SET
					`person_id` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objServices->Id) . ' AND
					`person_id` = ' . $objDatabase->SqlVariable($this->intVictimWitnessNum) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objServices->PersonId = null;
				$objServices->Journal('UPDATE');
			}
		}

		/**
		 * Unassociates all Serviceses
		 * @return void
		*/ 
		public function UnassociateAllServiceses() {
			if ((is_null($this->intVictimWitnessNum)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateServices on this unsaved Person.');

			// Get the Database Object for this Class
			$objDatabase = Person::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (Services::LoadArrayByPersonId($this->intVictimWitnessNum) as $objServices) {
					$objServices->PersonId = null;
					$objServices->Journal('UPDATE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`services`
				SET
					`person_id` = null
				WHERE
					`person_id` = ' . $objDatabase->SqlVariable($this->intVictimWitnessNum) . '
			');
		}

		/**
		 * Deletes an associated Services
		 * @param Services $objServices
		 * @return void
		*/ 
		public function DeleteAssociatedServices(Services $objServices) {
			if ((is_null($this->intVictimWitnessNum)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateServices on this unsaved Person.');
			if ((is_null($objServices->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateServices on this Person with an unsaved Services.');

			// Get the Database Object for this Class
			$objDatabase = Person::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`services`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objServices->Id) . ' AND
					`person_id` = ' . $objDatabase->SqlVariable($this->intVictimWitnessNum) . '
			');

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				$objServices->Journal('DELETE');
			}
		}

		/**
		 * Deletes all associated Serviceses
		 * @return void
		*/ 
		public function DeleteAllServiceses() {
			if ((is_null($this->intVictimWitnessNum)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateServices on this unsaved Person.');

			// Get the Database Object for this Class
			$objDatabase = Person::GetDatabase();

			// Journaling
			if ($objDatabase->JournalingDatabase) {
				foreach (Services::LoadArrayByPersonId($this->intVictimWitnessNum) as $objServices) {
					$objServices->Journal('DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`services`
				WHERE
					`person_id` = ' . $objDatabase->SqlVariable($this->intVictimWitnessNum) . '
			');
		}

			
		// Related Many-to-Many Objects' Methods for CasesAsCase
		//-------------------------------------------------------------------

		/**
		 * Gets all many-to-many associated CasesesAsCase as an array of Cases objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Cases[]
		*/ 
		public function GetCasesAsCaseArray($objOptionalClauses = null) {
			if ((is_null($this->intVictimWitnessNum)))
				return array();

			try {
				return Cases::LoadArrayByPersonAsCase($this->intVictimWitnessNum, $objOptionalClauses);
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
			if ((is_null($this->intVictimWitnessNum)))
				return 0;

			return Cases::CountByPersonAsCase($this->intVictimWitnessNum);
		}

		/**
		 * Checks to see if an association exists with a specific CasesAsCase
		 * @param Cases $objCases
		 * @return bool
		*/
		public function IsCasesAsCaseAssociated(Cases $objCases) {
			if ((is_null($this->intVictimWitnessNum)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsCasesAsCaseAssociated on this unsaved Person.');
			if ((is_null($objCases->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call IsCasesAsCaseAssociated on this Person with an unsaved Cases.');

			$intRowCount = Person::QueryCount(
				QQ::AndCondition(
					QQ::Equal(QQN::Person()->VictimWitnessNum, $this->intVictimWitnessNum),
					QQ::Equal(QQN::Person()->CasesAsCase->CaseId, $objCases->Id)
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
			$objDatabase = Person::GetDatabase()->JournalingDatabase;

			$objDatabase->NonQuery('
				INSERT INTO `person_case_assn` (
					`person_id`,
					`case_id`,
					__sys_login_id,
					__sys_action,
					__sys_date
				) VALUES (
					' . $objDatabase->SqlVariable($this->intVictimWitnessNum) . ',
					' . $objDatabase->SqlVariable($intAssociatedId) . ',
					' . (($objDatabase->JournaledById) ? $objDatabase->JournaledById : 'NULL') . ',
					' . $objDatabase->SqlVariable($strJournalCommand) . ',
					NOW()
				);
			');
		}

		/**
		 * Gets the historical journal for an object's CasesAsCase relationship from the log database.
		 * @param integer intVictimWitnessNum
		 * @return QDatabaseResult $objResult
		 */
		public static function GetJournalCasesAsCaseAssociationForId($intVictimWitnessNum) {
			$objDatabase = Person::GetDatabase()->JournalingDatabase;

			return $objDatabase->Query('SELECT * FROM person_case_assn WHERE person_id = ' .
				$objDatabase->SqlVariable($intVictimWitnessNum) . ' ORDER BY __sys_date');
		}

		/**
		 * Gets the historical journal for this object's CasesAsCase relationship from the log database.
		 * @return QDatabaseResult $objResult
		 */
		public function GetJournalCasesAsCaseAssociation() {
			return Person::GetJournalCasesAsCaseAssociationForId($this->intVictimWitnessNum);
		}

		/**
		 * Associates a CasesAsCase
		 * @param Cases $objCases
		 * @return void
		*/ 
		public function AssociateCasesAsCase(Cases $objCases) {
			if ((is_null($this->intVictimWitnessNum)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateCasesAsCase on this unsaved Person.');
			if ((is_null($objCases->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateCasesAsCase on this Person with an unsaved Cases.');

			// Get the Database Object for this Class
			$objDatabase = Person::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				INSERT INTO `person_case_assn` (
					`person_id`,
					`case_id`
				) VALUES (
					' . $objDatabase->SqlVariable($this->intVictimWitnessNum) . ',
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
			if ((is_null($this->intVictimWitnessNum)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCasesAsCase on this unsaved Person.');
			if ((is_null($objCases->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCasesAsCase on this Person with an unsaved Cases.');

			// Get the Database Object for this Class
			$objDatabase = Person::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`person_case_assn`
				WHERE
					`person_id` = ' . $objDatabase->SqlVariable($this->intVictimWitnessNum) . ' AND
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
			if ((is_null($this->intVictimWitnessNum)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAllCasesAsCaseArray on this unsaved Person.');

			// Get the Database Object for this Class
			$objDatabase = Person::GetDatabase();

			// Journaling (if applicable)
			if ($objDatabase->JournalingDatabase) {
				$objResult = $objDatabase->Query('SELECT `case_id` AS associated_id FROM `person_case_assn` WHERE `person_id` = ' . $objDatabase->SqlVariable($this->intVictimWitnessNum));
				while ($objRow = $objResult->GetNextRow()) {
					$this->JournalCasesAsCaseAssociation($objRow->GetColumn('associated_id'), 'DELETE');
				}
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`person_case_assn`
				WHERE
					`person_id` = ' . $objDatabase->SqlVariable($this->intVictimWitnessNum) . '
			');
		}




		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Person"><sequence>';
			$strToReturn .= '<element name="VictimWitnessNum" type="xsd:int"/>';
			$strToReturn .= '<element name="FirstName" type="xsd:string"/>';
			$strToReturn .= '<element name="LastName" type="xsd:string"/>';
			$strToReturn .= '<element name="DateOfBirth" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="SocialSecurityNumber" type="xsd:int"/>';
			$strToReturn .= '<element name="Phone" type="xsd:string"/>';
			$strToReturn .= '<element name="Email" type="xsd:string"/>';
			$strToReturn .= '<element name="Notes" type="xsd:string"/>';
			$strToReturn .= '<element name="Gender" type="xsd:boolean"/>';
			$strToReturn .= '<element name="Ethnicity" type="xsd1:Ethnicity"/>';
			$strToReturn .= '<element name="Age" type="xsd:int"/>';
			$strToReturn .= '<element name="PrimaryLanguage" type="xsd1:Language"/>';
			$strToReturn .= '<element name="Disabled" type="xsd:boolean"/>';
			$strToReturn .= '<element name="Elderly" type="xsd:boolean"/>';
			$strToReturn .= '<element name="AgencyReferred" type="xsd1:Agency"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Person', $strComplexTypeArray)) {
				$strComplexTypeArray['Person'] = Person::GetSoapComplexTypeXml();
				Ethnicity::AlterSoapComplexTypeArray($strComplexTypeArray);
				Language::AlterSoapComplexTypeArray($strComplexTypeArray);
				Agency::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Person::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Person();
			if (property_exists($objSoapObject, 'VictimWitnessNum'))
				$objToReturn->intVictimWitnessNum = $objSoapObject->VictimWitnessNum;
			if (property_exists($objSoapObject, 'FirstName'))
				$objToReturn->strFirstName = $objSoapObject->FirstName;
			if (property_exists($objSoapObject, 'LastName'))
				$objToReturn->strLastName = $objSoapObject->LastName;
			if (property_exists($objSoapObject, 'DateOfBirth'))
				$objToReturn->dttDateOfBirth = new QDateTime($objSoapObject->DateOfBirth);
			if (property_exists($objSoapObject, 'SocialSecurityNumber'))
				$objToReturn->intSocialSecurityNumber = $objSoapObject->SocialSecurityNumber;
			if (property_exists($objSoapObject, 'Phone'))
				$objToReturn->strPhone = $objSoapObject->Phone;
			if (property_exists($objSoapObject, 'Email'))
				$objToReturn->strEmail = $objSoapObject->Email;
			if (property_exists($objSoapObject, 'Notes'))
				$objToReturn->strNotes = $objSoapObject->Notes;
			if (property_exists($objSoapObject, 'Gender'))
				$objToReturn->blnGender = $objSoapObject->Gender;
			if ((property_exists($objSoapObject, 'Ethnicity')) &&
				($objSoapObject->Ethnicity))
				$objToReturn->Ethnicity = Ethnicity::GetObjectFromSoapObject($objSoapObject->Ethnicity);
			if (property_exists($objSoapObject, 'Age'))
				$objToReturn->intAge = $objSoapObject->Age;
			if ((property_exists($objSoapObject, 'PrimaryLanguage')) &&
				($objSoapObject->PrimaryLanguage))
				$objToReturn->PrimaryLanguage = Language::GetObjectFromSoapObject($objSoapObject->PrimaryLanguage);
			if (property_exists($objSoapObject, 'Disabled'))
				$objToReturn->blnDisabled = $objSoapObject->Disabled;
			if (property_exists($objSoapObject, 'Elderly'))
				$objToReturn->blnElderly = $objSoapObject->Elderly;
			if ((property_exists($objSoapObject, 'AgencyReferred')) &&
				($objSoapObject->AgencyReferred))
				$objToReturn->AgencyReferred = Agency::GetObjectFromSoapObject($objSoapObject->AgencyReferred);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Person::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->dttDateOfBirth)
				$objObject->dttDateOfBirth = $objObject->dttDateOfBirth->__toString(QDateTime::FormatSoap);
			if ($objObject->objEthnicity)
				$objObject->objEthnicity = Ethnicity::GetSoapObjectFromObject($objObject->objEthnicity, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intEthnicityId = null;
			if ($objObject->objPrimaryLanguage)
				$objObject->objPrimaryLanguage = Language::GetSoapObjectFromObject($objObject->objPrimaryLanguage, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intPrimaryLanguageId = null;
			if ($objObject->objAgencyReferred)
				$objObject->objAgencyReferred = Agency::GetSoapObjectFromObject($objObject->objAgencyReferred, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intAgencyReferredId = null;
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
	class QQNodePersonCasesAsCase extends QQAssociationNode {
		protected $strType = 'association';
		protected $strName = 'casesascase';

		protected $strTableName = 'person_case_assn';
		protected $strPrimaryKey = 'person_id';
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
	 * @property-read QQNode $VictimWitnessNum
	 * @property-read QQNode $FirstName
	 * @property-read QQNode $LastName
	 * @property-read QQNode $DateOfBirth
	 * @property-read QQNode $SocialSecurityNumber
	 * @property-read QQNode $Phone
	 * @property-read QQNode $Email
	 * @property-read QQNode $Notes
	 * @property-read QQNode $Gender
	 * @property-read QQNode $EthnicityId
	 * @property-read QQNodeEthnicity $Ethnicity
	 * @property-read QQNode $Age
	 * @property-read QQNode $PrimaryLanguageId
	 * @property-read QQNodeLanguage $PrimaryLanguage
	 * @property-read QQNode $Disabled
	 * @property-read QQNode $Elderly
	 * @property-read QQNode $AgencyReferredId
	 * @property-read QQNodeAgency $AgencyReferred
	 * @property-read QQNodePersonCasesAsCase $CasesAsCase
	 * @property-read QQReverseReferenceNodeAddress $Address
	 * @property-read QQReverseReferenceNodeRelationship $Relationship
	 * @property-read QQReverseReferenceNodeRelationship $RelationshipAsRelatedTo
	 * @property-read QQReverseReferenceNodeServices $Services
	 */
	class QQNodePerson extends QQNode {
		protected $strTableName = 'person';
		protected $strPrimaryKey = 'victim_witness_num';
		protected $strClassName = 'Person';
		public function __get($strName) {
			switch ($strName) {
				case 'VictimWitnessNum':
					return new QQNode('victim_witness_num', 'VictimWitnessNum', 'integer', $this);
				case 'FirstName':
					return new QQNode('first_name', 'FirstName', 'string', $this);
				case 'LastName':
					return new QQNode('last_name', 'LastName', 'string', $this);
				case 'DateOfBirth':
					return new QQNode('date_of_birth', 'DateOfBirth', 'QDateTime', $this);
				case 'SocialSecurityNumber':
					return new QQNode('social_security_number', 'SocialSecurityNumber', 'integer', $this);
				case 'Phone':
					return new QQNode('phone', 'Phone', 'string', $this);
				case 'Email':
					return new QQNode('email', 'Email', 'string', $this);
				case 'Notes':
					return new QQNode('notes', 'Notes', 'string', $this);
				case 'Gender':
					return new QQNode('gender', 'Gender', 'boolean', $this);
				case 'EthnicityId':
					return new QQNode('ethnicity_id', 'EthnicityId', 'integer', $this);
				case 'Ethnicity':
					return new QQNodeEthnicity('ethnicity_id', 'Ethnicity', 'integer', $this);
				case 'Age':
					return new QQNode('age', 'Age', 'integer', $this);
				case 'PrimaryLanguageId':
					return new QQNode('primary_language_id', 'PrimaryLanguageId', 'integer', $this);
				case 'PrimaryLanguage':
					return new QQNodeLanguage('primary_language_id', 'PrimaryLanguage', 'integer', $this);
				case 'Disabled':
					return new QQNode('disabled', 'Disabled', 'boolean', $this);
				case 'Elderly':
					return new QQNode('elderly', 'Elderly', 'boolean', $this);
				case 'AgencyReferredId':
					return new QQNode('agency_referred_id', 'AgencyReferredId', 'integer', $this);
				case 'AgencyReferred':
					return new QQNodeAgency('agency_referred_id', 'AgencyReferred', 'integer', $this);
				case 'CasesAsCase':
					return new QQNodePersonCasesAsCase($this);
				case 'Address':
					return new QQReverseReferenceNodeAddress($this, 'address', 'reverse_reference', 'person_id');
				case 'Relationship':
					return new QQReverseReferenceNodeRelationship($this, 'relationship', 'reverse_reference', 'person_id');
				case 'RelationshipAsRelatedTo':
					return new QQReverseReferenceNodeRelationship($this, 'relationshipasrelatedto', 'reverse_reference', 'related_to_person_id');
				case 'Services':
					return new QQReverseReferenceNodeServices($this, 'services', 'reverse_reference', 'person_id');

				case '_PrimaryKeyNode':
					return new QQNode('victim_witness_num', 'VictimWitnessNum', 'integer', $this);
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
	 * @property-read QQNode $VictimWitnessNum
	 * @property-read QQNode $FirstName
	 * @property-read QQNode $LastName
	 * @property-read QQNode $DateOfBirth
	 * @property-read QQNode $SocialSecurityNumber
	 * @property-read QQNode $Phone
	 * @property-read QQNode $Email
	 * @property-read QQNode $Notes
	 * @property-read QQNode $Gender
	 * @property-read QQNode $EthnicityId
	 * @property-read QQNodeEthnicity $Ethnicity
	 * @property-read QQNode $Age
	 * @property-read QQNode $PrimaryLanguageId
	 * @property-read QQNodeLanguage $PrimaryLanguage
	 * @property-read QQNode $Disabled
	 * @property-read QQNode $Elderly
	 * @property-read QQNode $AgencyReferredId
	 * @property-read QQNodeAgency $AgencyReferred
	 * @property-read QQNodePersonCasesAsCase $CasesAsCase
	 * @property-read QQReverseReferenceNodeAddress $Address
	 * @property-read QQReverseReferenceNodeRelationship $Relationship
	 * @property-read QQReverseReferenceNodeRelationship $RelationshipAsRelatedTo
	 * @property-read QQReverseReferenceNodeServices $Services
	 * @property-read QQNode $_PrimaryKeyNode
	 */
	class QQReverseReferenceNodePerson extends QQReverseReferenceNode {
		protected $strTableName = 'person';
		protected $strPrimaryKey = 'victim_witness_num';
		protected $strClassName = 'Person';
		public function __get($strName) {
			switch ($strName) {
				case 'VictimWitnessNum':
					return new QQNode('victim_witness_num', 'VictimWitnessNum', 'integer', $this);
				case 'FirstName':
					return new QQNode('first_name', 'FirstName', 'string', $this);
				case 'LastName':
					return new QQNode('last_name', 'LastName', 'string', $this);
				case 'DateOfBirth':
					return new QQNode('date_of_birth', 'DateOfBirth', 'QDateTime', $this);
				case 'SocialSecurityNumber':
					return new QQNode('social_security_number', 'SocialSecurityNumber', 'integer', $this);
				case 'Phone':
					return new QQNode('phone', 'Phone', 'string', $this);
				case 'Email':
					return new QQNode('email', 'Email', 'string', $this);
				case 'Notes':
					return new QQNode('notes', 'Notes', 'string', $this);
				case 'Gender':
					return new QQNode('gender', 'Gender', 'boolean', $this);
				case 'EthnicityId':
					return new QQNode('ethnicity_id', 'EthnicityId', 'integer', $this);
				case 'Ethnicity':
					return new QQNodeEthnicity('ethnicity_id', 'Ethnicity', 'integer', $this);
				case 'Age':
					return new QQNode('age', 'Age', 'integer', $this);
				case 'PrimaryLanguageId':
					return new QQNode('primary_language_id', 'PrimaryLanguageId', 'integer', $this);
				case 'PrimaryLanguage':
					return new QQNodeLanguage('primary_language_id', 'PrimaryLanguage', 'integer', $this);
				case 'Disabled':
					return new QQNode('disabled', 'Disabled', 'boolean', $this);
				case 'Elderly':
					return new QQNode('elderly', 'Elderly', 'boolean', $this);
				case 'AgencyReferredId':
					return new QQNode('agency_referred_id', 'AgencyReferredId', 'integer', $this);
				case 'AgencyReferred':
					return new QQNodeAgency('agency_referred_id', 'AgencyReferred', 'integer', $this);
				case 'CasesAsCase':
					return new QQNodePersonCasesAsCase($this);
				case 'Address':
					return new QQReverseReferenceNodeAddress($this, 'address', 'reverse_reference', 'person_id');
				case 'Relationship':
					return new QQReverseReferenceNodeRelationship($this, 'relationship', 'reverse_reference', 'person_id');
				case 'RelationshipAsRelatedTo':
					return new QQReverseReferenceNodeRelationship($this, 'relationshipasrelatedto', 'reverse_reference', 'related_to_person_id');
				case 'Services':
					return new QQReverseReferenceNodeServices($this, 'services', 'reverse_reference', 'person_id');

				case '_PrimaryKeyNode':
					return new QQNode('victim_witness_num', 'VictimWitnessNum', 'integer', $this);
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