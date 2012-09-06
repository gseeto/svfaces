<?php
	// Load the Qcodo Development Framework
	require(dirname(__FILE__) . '/../../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the Suspect class.  It uses the code-generated
	 * SuspectDataGrid control which has meta-methods to help with
	 * easily creating/defining Suspect columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both suspect_list.php AND
	 * suspect_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class SuspectListForm extends QForm {
		// Local instance of the Meta DataGrid to list Suspects
		protected $dtgSuspects;

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
			$this->dtgSuspects = new SuspectDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgSuspects->CssClass = 'datagrid';
			$this->dtgSuspects->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgSuspects->Paginator = new QPaginator($this->dtgSuspects);
			$this->dtgSuspects->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/suspect_edit.php';
			$this->dtgSuspects->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for suspect's properties, or you
			// can traverse down QQN::suspect() to display fields that are down the hierarchy)
			$this->dtgSuspects->MetaAddColumn('Id');
			$this->dtgSuspects->MetaAddColumn('FirstName');
			$this->dtgSuspects->MetaAddColumn('LastName');
			$this->dtgSuspects->MetaAddColumn('DateOfBirth');
			$this->dtgSuspects->MetaAddColumn('Pfd');
			$this->dtgSuspects->MetaAddColumn('Information');
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// suspect_list.tpl.php as the included HTML template file
	SuspectListForm::Run('SuspectListForm');
?>