<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Deletar extends CI_Controller {


	public function index()
	{
		$this->load->helper('url');
		@session_start();
		$_SESSION['FOOTER'] = '<center><h4>&reg;Javalia - 2019</h4></center>';
		if(isset($_SESSION["ADM"])){
			$data['selecionar'] = null;
			$this->load->model('daodeletar');
			$data = $this->daodeletar->getTudo();
			$this->load->view('administrador',$data);
			$this->load->view('deletar',$data);
			$this->load->view('footer');
		}else{
			echo '<script type="text/javascript">window.location.replace("login");</script>';
		}
	}

	public function remover()
	{
		$tabela = $this->input->post('tabela');
		$coluna = $this->input->post('coluna');
		$id = $this->input->post('cbox');
		$this->load->model('crud');
		$data = $this->crud->delete($tabela,$coluna,$id);
		if($data > 0)
			echo '<script type="text/javascript">alert("Removido com sucesso!");</script>';
		else
			echo '<script type="text/javascript">alert("Falhou ao remover!");</script>';
		echo '<script type="text/javascript">window.location.replace("../deletar");</script>';
	}

}