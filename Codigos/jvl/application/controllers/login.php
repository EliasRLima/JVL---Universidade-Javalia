<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index()
	{
		@session_start();
		$_SESSION['FOOTER'] = '<center><h4></h4></center>';
		if(!isset($_SESSION['key_fail'])){
			$_SESSION['key_fail'] = "";
		}
		$this->load->helper('url');
		$this->load->view('login');
		$this->load->view('menu_footer');
		$this->load->view('footer');

	}
}


