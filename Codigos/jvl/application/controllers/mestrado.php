<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mestrado extends CI_Controller {


	public function index()
	{
		$this->load->helper('url');
		@session_start();
		$_SESSION['FOOTER'] = '<center><h4></h4></center>';
		$this->load->view('mestrado');
		$this->load->view('menu_footer');
		$this->load->view('footer');
	}
}