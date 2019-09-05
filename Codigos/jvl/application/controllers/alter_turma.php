<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alter_turma extends CI_Controller {


	public function index()
	{
		$this->load->helper('url');
		@session_start();
		$_SESSION['FOOTER'] = '<center><h4>&reg;Javalia - 2019</h4></center>';
		if(isset($_SESSION["ADM"])){
			$this->load->model('daoturma');
			$data = $this->daoturma->getTurmas();
			$data['selecionar'] = null;
			$this->load->view('administrador',$data);
			$this->load->view('alter_turma',$data);
			$this->load->view('footer');
		}else{
			echo '<script type="text/javascript">window.location.replace("login");</script>';
		}
	}

	public function Form(){
		$this->load->helper('url');
		$turma = $this->input->post('cbox');
		@session_start();
		$_SESSION['FOOTER'] = '<center><h4>&reg;Javalia - 2019</h4></center>';
		if(isset($_SESSION["ADM"])){
			$this->load->model('daohorario');
			$data = $this->daohorario->getDeHorario($turma);
			$data['selecionar'] = 'true';
			$data['turma'] = $turma;
			$this->load->view('administrador',$data);
			$this->load->view('alter_turma',$data);
			$this->load->view('footer');
		}else{
			echo '<script type="text/javascript">window.location.replace("login");</script>';
		}
	}
}