<?php
	/**
	 * The ServiceType class defined here contains
	 * code for the ServiceType enumerated type.  It represents
	 * the enumerated values found in the "service_type" table
	 * in the database.
	 * 
	 * To use, you should use the ServiceType subclass which
	 * extends this ServiceTypeGen class.
	 * 
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the ServiceType class.
	 * 
	 * @package My Application
	 * @subpackage GeneratedDataObjects
	 */
	abstract class ServiceTypeGen extends QBaseClass {

		const MaxId = 0;

		public static $NameArray = array();

		public static $TokenArray = array();

		public static function ToString($intServiceTypeId) {
			switch ($intServiceTypeId) {
				default:
					throw new QCallerException(sprintf('Invalid intServiceTypeId: %s', $intServiceTypeId));
			}
		}

		public static function ToToken($intServiceTypeId) {
			switch ($intServiceTypeId) {
				default:
					throw new QCallerException(sprintf('Invalid intServiceTypeId: %s', $intServiceTypeId));
			}
		}

	}
?>