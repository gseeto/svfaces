<?php
	// Load the Qcodo Development Framework
	require(dirname(__FILE__) . '/../../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the Agency class.  It uses the code-generated
	 * AgencyDataGrid control which has meta-methods to help with
	 * easily creating/defining Agency columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both agency_list.php AND
	 * agency_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class AgencyListForm extends QForm {
		// Local instance of the Meta DataGrid to list Agencies
		protected $dtgAgencies;

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
			$this->dtgAgencies = new AgencyDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgAgencies->CssClass = 'datagrid';
			$this->dtgAgencies->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgAgencies->Paginator = new QPaginator($this->dtgAgencies);
			$this->dtgAgencies->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/agency_edit.php';
			$this->dtgAgencies->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for agency's properties, or you
			// can traverse down QQN::agency() to display fields that are down the hierarchy)
			$this->dtgAgencies->MetaAddColumn('Id');
			$this->dtgAgencies->MetaAddColumn('Name');
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// agency_list.tpl.php as the included HTML template file
	AgencyListForm::Run('AgencyListForm');
?>