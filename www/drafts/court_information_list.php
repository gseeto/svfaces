<?php
	// Load the Qcodo Development Framework
	require(dirname(__FILE__) . '/../../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the CourtInformation class.  It uses the code-generated
	 * CourtInformationDataGrid control which has meta-methods to help with
	 * easily creating/defining CourtInformation columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both court_information_list.php AND
	 * court_information_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class CourtInformationListForm extends QForm {
		// Local instance of the Meta DataGrid to list CourtInformations
		protected $dtgCourtInformations;

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
			$this->dtgCourtInformations = new CourtInformationDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgCourtInformations->CssClass = 'datagrid';
			$this->dtgCourtInformations->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgCourtInformations->Paginator = new QPaginator($this->dtgCourtInformations);
			$this->dtgCourtInformations->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/court_information_edit.php';
			$this->dtgCourtInformations->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for court_information's properties, or you
			// can traverse down QQN::court_information() to display fields that are down the hierarchy)
			$this->dtgCourtInformations->MetaAddColumn('Id');
			$this->dtgCourtInformations->MetaAddColumn('Information');
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// court_information_list.tpl.php as the included HTML template file
	CourtInformationListForm::Run('CourtInformationListForm');
?>