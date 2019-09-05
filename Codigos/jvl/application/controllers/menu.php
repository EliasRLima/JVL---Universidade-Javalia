<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {


	public function index()
	{
		$this->load->helper('url');
		@session_start();
		unset($_SESSION["redirecionar"]);
		if(!isset($_SESSION['avatar']) || $_SESSION['avatar'] == ""){
			$_SESSION['avatar'] = 'images/avatar/anonimo.jpg';
		}
		$this->load->view('menu_inicial');
		$this->load->view('avatar');
		$_SESSION['FOOTER'] = '<center><h4>&reg;Javalia - 2019</h4></center>';
		$this->load->view('footer');
	}
}