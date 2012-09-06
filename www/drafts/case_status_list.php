<?php
	// Load the Qcodo Development Framework
	require(dirname(__FILE__) . '/../../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the CaseStatus class.  It uses the code-generated
	 * CaseStatusDataGrid control which has meta-methods to help with
	 * easily creating/defining CaseStatus columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both case_status_list.php AND
	 * case_status_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class CaseStatusListForm extends QForm {
		// Local instance of the Meta DataGrid to list CaseStatuses
		protected $dtgCaseStatuses;

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
			$this->dtgCaseStatuses = new CaseStatusDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgCaseStatuses->CssClass = 'datagrid';
			$this->dtgCaseStatuses->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgCaseStatuses->Paginator = new QPaginator($this->dtgCaseStatuses);
			$this->dtgCaseStatuses->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/case_status_edit.php';
			$this->dtgCaseStatuses->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for case_status's properties, or you
			// can traverse down QQN::case_status() to display fields that are down the hierarchy)
			$this->dtgCaseStatuses->MetaAddColumn('Id');
			$this->dtgCaseStatuses->MetaAddColumn('Name');
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// case_status_list.tpl.php as the included HTML template file
	CaseStatusListForm::Run('CaseStatusListForm');
?>