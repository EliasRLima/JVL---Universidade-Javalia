<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alter_horario extends CI_Controller {


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
			$this->load->view('alter_horario',$data);
			$this->load->view('footer');
		}else{
			echo '<script type="text/javascript">window.location.replace("login");</script>';
		}
	}

	public function form()
		{
			$this->load->helper('url');
			@session_start();
			$_SESSION['FOOTER'] = '<center><h4>&reg;Javalia - 2019</h4></center>';
			if(isset($_SESSION["ADM"])){
				$this->load->model('daohorario');
				$id = $this->input->post('cbox');
				$data = $this->daohorario->getHorario($id);
				$data['selecionar'] = 'true';
				$this->load->view('administrador',$data);
				$this->load->view('alter_horario',$data);
				$this->load->view('footer');
			}else{
				echo '<script type="text/javascript">window.location.replace("login");</script>';
			}
		}
}