<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alter_aluno extends CI_Controller {


	public function index()
	{
		$this->load->helper('url');
		@session_start();
		$_SESSION['FOOTER'] = '<center><h4>&reg;Javalia - 2019</h4></center>';
		if(isset($_SESSION["ADM"])){
			$this->load->model('daopessoa');
			$data = $this->daopessoa->getAlunos();
			$data['selecionar'] = null;
			$this->load->view('administrador',$data);
			$this->load->view('alter_aluno',$data);
			$this->load->view('footer');
		}else{
			echo '<script type="text/javascript">window.location.replace("login");</script>';
		}
	}

	public function Form(){
		$this->load->helper('url');
		$matricula = $this->input->post('cbox1');
		@session_start();
		$_SESSION['FOOTER'] = '<center><h4>&reg;Javalia - 2019</h4></center>';
		if(isset($_SESSION["ADM"])){
			$this->load->model('daopessoa');
			$data = $this->daopessoa->getAluno($matricula);
			$data['selecionar'] = 'true';
			$this->load->view('administrador',$data);
			$this->load->view('alter_aluno',$data);
			$this->load->view('footer');
		}else{
			echo '<script type="text/javascript">window.location.replace("login");</script>';
		}
	}
}