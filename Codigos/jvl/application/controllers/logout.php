<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {


	public function index()
	{
		@session_start();
		unset($_SESSION["login"]);
		$_SESSION['avatar'] = 'images/avatar/anonimo.jpg';
		unset($_SESSION["ADM"]);
		echo '<script type="text/javascript">window.location.replace("login");</script>';
	}
}