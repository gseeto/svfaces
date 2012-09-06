<?php
	// Load the Qcodo Development Framework
	require(dirname(__FILE__) . '/../../includes/prepend.inc.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the Cases class.  It uses the code-generated
	 * CasesDataGrid control which has meta-methods to help with
	 * easily creating/defining Cases columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both cases_list.php AND
	 * cases_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My Application
	 * @subpackage Drafts
	 */
	class CasesListForm extends QForm {
		// Local instance of the Meta DataGrid to list Caseses
		protected $dtgCaseses;

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
			$this->dtgCaseses = new CasesDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgCaseses->CssClass = 'datagrid';
			$this->dtgCaseses->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgCaseses->Paginator = new QPaginator($this->dtgCaseses);
			$this->dtgCaseses->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/cases_edit.php';
			$this->dtgCaseses->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for cases's properties, or you
			// can traverse down QQN::cases() to display fields that are down the hierarchy)
			$this->dtgCaseses->MetaAddColumn('Id');
			$this->dtgCaseses->MetaAddTypeColumn('CrimeTypeId', 'CrimeType');
			$this->dtgCaseses->MetaAddColumn('CrimeDate');
			$this->dtgCaseses->MetaAddColumn(QQN::Cases()->AgencyReportedTo);
			$this->dtgCaseses->MetaAddColumn('CrimeReportNumber');
			$this->dtgCaseses->MetaAddColumn('FamilyLawNumber');
			$this->dtgCaseses->MetaAddColumn(QQN::Cases()->Court);
			$this->dtgCaseses->MetaAddColumn(QQN::Cases()->CaseStatus);
			$this->dtgCaseses->MetaAddColumn('PrimaryPersonId');
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// cases_list.tpl.php as the included HTML template file
	CasesListForm::Run('CasesListForm');
?>