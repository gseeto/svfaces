<?php
require(dirname(__FILE__) . '/../../includes/prepend.inc.php');

class HomeForm extends SvfacesForm {
	protected $lblMessage;
	protected $txtUsername;
	protected $txtPassword;
	protected $chkRemember;
	protected $btnLogin;
	protected $strPageTitle = 'Log In';
	protected $lblDebug;

	protected function Form_Create() {
	}

}

HomeForm::Run('HomeForm');
?>