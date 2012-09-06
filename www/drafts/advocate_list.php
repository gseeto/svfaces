<?php
	// Load the Qcodo Development Framework
	require(dirname(__FILE__) . '/../../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the Advocate class.  It uses the code-generated
	 * AdvocateDataGrid control which has meta-methods to help with
	 * easily creating/defining Advocate columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both advocate_list.php AND
	 * advocate_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class AdvocateListForm extends QForm {
		// Local instance of the Meta DataGrid to list Advocates
		protected $dtgAdvocates;

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
			$this->dtgAdvocates = new AdvocateDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgAdvocates->CssClass = 'datagrid';
			$this->dtgAdvocates->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgAdvocates->Paginator = new QPaginator($this->dtgAdvocates);
			$this->dtgAdvocates->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/advocate_edit.php';
			$this->dtgAdvocates->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for advocate's properties, or you
			// can traverse down QQN::advocate() to display fields that are down the hierarchy)
			$this->dtgAdvocates->MetaAddColumn('Id');
			$this->dtgAdvocates->MetaAddColumn(QQN::Advocate()->Login);
			$this->dtgAdvocates->MetaAddColumn(QQN::Advocate()->Grant);
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// advocate_list.tpl.php as the included HTML template file
	AdvocateListForm::Run('AdvocateListForm');
?>