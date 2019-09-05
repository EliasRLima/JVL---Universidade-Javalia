<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cad_turma extends CI_Controller {


	public function index()
	{
		$this->load->helper('url');
		@session_start();
		$_SESSION['FOOTER'] = '<center><h4>&reg;Javalia - 2019</h4></center>';
		if(isset($_SESSION["ADM"])){
			$this->load->model('daohorario');
			$data = $this->daohorario->getHorarios();
			$data['selecionar'] = null;
			$this->load->view('administrador',$data);
			$this->load->view('cad_turma', $data);
			$this->load->view('footer');
		}else{
			echo '<script type="text/javascript">window.location.replace("login");</script>';
		}
	}
}