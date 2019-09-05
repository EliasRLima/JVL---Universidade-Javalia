<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Perfil extends CI_Controller {


	public function index()
	{
		@session_start();
		$_SESSION['FOOTER'] = '<center><h4></h4></center>';
		if(!isset($_SESSION["login"])){
   			$_SESSION['redirecionar'] = 'perfil';
   			echo '<script type="text/javascript">window.location.replace("login");</script>';
		}else{
			$this->load->model('daoperfil');
			$data = $this->daoperfil->perfil($_SESSION["login"]);
			$this->load->helper('url');
			$this->load->view('perfil',$data);
			$this->load->view('menu_footer');
			$this->load->view('footer');
		}
		
	}
}