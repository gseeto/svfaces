<?php
	/**
	 * The CrimeType class defined here contains
	 * code for the CrimeType enumerated type.  It represents
	 * the enumerated values found in the "crime_type" table
	 * in the database.
	 * 
	 * To use, you should use the CrimeType subclass which
	 * extends this CrimeTypeGen class.
	 * 
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the CrimeType class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 */
	abstract class CrimeTypeGen extends QBaseClass {

		const MaxId = 0;

		public static $NameArray = array();

		public static $TokenArray = array();

		public static function ToString($intCrimeTypeId) {
			switch ($intCrimeTypeId) {
				default:
					throw new QCallerException(sprintf('Invalid intCrimeTypeId: %s', $intCrimeTypeId));
			}
		}

		public static function ToToken($intCrimeTypeId) {
			switch ($intCrimeTypeId) {
				default:
					throw new QCallerException(sprintf('Invalid intCrimeTypeId: %s', $intCrimeTypeId));
			}
		}

	}
?>