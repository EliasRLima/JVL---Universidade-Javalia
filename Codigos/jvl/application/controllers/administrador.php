<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class administrador extends CI_Controller {


	public function index()
	{
		$this->load->helper('url');
		@session_start();
		$_SESSION['FOOTER'] = '<center><h4>&reg;Javalia - 2019</h4></center>';
		if(isset($_SESSION["ADM"])){
			$data['selecionar'] = null;
			$this->load->view('administrador',$data);
			$this->load->view('footer');
		}else{
			echo '<script type="text/javascript">window.location.replace("login");</script>';
		}
	}
}