<?php
	// Load the Qcodo Development Framework
	require(dirname(__FILE__) . '/../../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the Language class.  It uses the code-generated
	 * LanguageDataGrid control which has meta-methods to help with
	 * easily creating/defining Language columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both language_list.php AND
	 * language_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class LanguageListForm extends QForm {
		// Local instance of the Meta DataGrid to list Languages
		protected $dtgLanguages;

		// Create QForm Event Handlers as Needed

//		protected function Form_Exit() {}
//		protected function Form_Load() {}
//		protected function Form_PreRender() {}
//		protected function Form_Validate() {}

		protected function Form_Run() {
			// Security check for ALLOW_REMOTE_ADMIN
			// To allow access REGARDLESS of ALLOW_REMOTE_ADMIN, simply remove the line below
			QApplication::CheckRemoteAdmin();
		}

		protected function Form_Create() {
			// Instantiate the Meta DataGrid
			$this->dtgLanguages = new LanguageDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgLanguages->CssClass = 'datagrid';
			$this->dtgLanguages->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgLanguages->Paginator = new QPaginator($this->dtgLanguages);
			$this->dtgLanguages->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/language_edit.php';
			$this->dtgLanguages->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for language's properties, or you
			// can traverse down QQN::language() to display fields that are down the hierarchy)
			$this->dtgLanguages->MetaAddColumn('Id');
			$this->dtgLanguages->MetaAddColumn('Name');
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// language_list.tpl.php as the included HTML template file
	LanguageListForm::Run('LanguageListForm');
?>