<?php
	require(__DATAGEN_CLASSES__ . '/CrimeTypeGen.class.php');

	/**
	 * The CrimeType class defined here contains any
	 * customized code for the CrimeType enumerated type. 
	 * 
	 * It represents the enumerated values found in the "crime_type" table in the database,
	 * and extends from the code generated abstract CrimeTypeGen
	 * class, which contains all the values extracted from the database.
	 * 
	 * Type classes which are generally used to attach a type to data object.
	 * However, they may be used as simple database indepedant enumerated type.
	 * 
	 * @package My Application
	 * @subpackage DataObjects
	 */
	abstract class CrimeType extends CrimeTypeGen {
	}
?>