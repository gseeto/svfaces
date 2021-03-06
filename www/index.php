<?php
require(dirname(__FILE__) . '/../includes/prepend.inc.php');

class LoginForm extends SvfacesForm {
	protected $lblMessage;
	protected $txtUsername;
	protected $txtPassword;
	protected $chkRemember;
	protected $btnLogin;
	protected $strPageTitle = 'Log In';
	protected $lblDebug;

	protected function Form_Run() {
		// If already logged in, go to main page.
		if (QApplication::$Login) QApplication::Redirect('/main/');
	}

	protected function Form_Create() {
		$this->lblDebug = new QLabel($this);
		$this->lblDebug->Text = 'debug area';
			
		$this->lblMessage = new QLabel($this);

		switch (QApplication::PathInfo(0)) {
			case 1:
				$this->lblMessage->Text = 'You have successfully logged out.';
				break;
			case 2:
				$this->lblMessage->Text = 'You have requested a resource that requires a login.  Please log in.';
				break;
			default:
				$this->lblMessage->Text = 'Please Log In';
				break;
		}

		$this->txtUsername = new QTextBox($this);
		$this->txtUsername->Name = 'User Name';
		$this->txtUsername->Required = true;

		$this->txtPassword = new QTextBox($this);
		$this->txtPassword->Name = 'Password';
		$this->txtPassword->TextMode = QTextMode::Password;
		$this->txtPassword->Required = true;
		$this->txtPassword->CausesValidation = true;
			
		$this->chkRemember = new QCheckBox($this);
		$this->chkRemember->Name = '';
		$this->chkRemember->Text = 'Remember Me';

		$this->btnLogin = new QButton($this);
		$this->btnLogin->Text = 'Login';
		$this->btnLogin->CausesValidation = true;

		$this->txtUsername->AddAction(new QEnterKeyEvent(), new QFocusControlAction($this->txtPassword));
		$this->txtUsername->AddAction(new QEnterKeyEvent(), new QTerminateAction());
		$this->txtPassword->AddAction(new QEnterKeyEvent(), new QAjaxAction('btnLogin_Click'));
		$this->txtPassword->AddAction(new QEnterKeyEvent(), new QTerminateAction());
		$this->btnLogin->AddAction(new QClickEvent(), new QAjaxAction('btnLogin_Click'));

		// Final Setup based on whether or not we are "remembering" the username
		
			if (array_key_exists('username', $_COOKIE)) {
			$this->txtUsername->Text = $_COOKIE['username'];
			$this->txtPassword->Focus();
			$this->chkRemember->Checked = true;
			} else {
			$this->txtUsername->Focus();
			}
			
	}

	protected function btnLogin_Click($strFormId, $strControlId, $strParameter) {	
		$objLogin = Login::LoadByUsernamePassword(trim(strtolower($this->txtUsername->Text)), $this->txtPassword->Text);
		if (!$objLogin) {
		$this->lblMessage->Text = 'Invalid email, username or password.';
		$this->txtUsername->Blink();
		$this->txtPassword->Blink();
		$this->txtUsername->Focus();
		return;
		} 
		
		if ($this->chkRemember->Checked) {
	 		setcookie('username', $objLogin->__get('Username'), time() + 60*60*24*14, '/', null);
	 		$this->lblDebug->Text = "set the cookie";
		} else {
			setcookie('username', null, 1, '/', null);
		}

		QApplication::Login($objLogin);
	
		if (array_key_exists('r', $_GET) && $_GET['r'])
		QApplication::Redirect($_GET['r']);
		else
		QApplication::Redirect('/main/');
				
	}
}

LoginForm::Run('LoginForm');
?>