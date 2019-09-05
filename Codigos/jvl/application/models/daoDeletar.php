<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DaoDeletar extends CI_Model {

	public $title;
    public $content;
    public $date;


    public function getTudo()
		{
			error_reporting(0);
			$this->load->database();
			$sql = "SELECT `p_nome` AS nome,`p_matricula` AS matricula FROM `pessoa` WHERE `p_matricula` != 203908 ORDER BY p_nome ASC";
			$query = $this->db->query($sql);
			$data['aluno'] = 'echo "<option value="0"></option>"';
			foreach ($query->result() as $row){
				$data['aluno'] .= '"<option value="'.$row->matricula.'">'.$row->nome.' / '.$row->matricula.'</option>"';
			}

			$sql = "SELECT `id_horario` as horario, descricao  FROM `horarios`";
			$query = $this->db->query($sql);
			$data['horario'] = 'echo "<option value="0"></option>"';
			foreach ($query->result() as $row){
				$data['horario'] .= '"<option value="'.$row->horario.'">'.$row->horario.'-'.$row->descricao.'</option>"';
			}

			$sql = "SELECT id_turma as turma FROM turma";
			$query = $this->db->query($sql);
			$data['turma'] = 'echo "<option value="0"></option>";';
			foreach ($query->result() as $row){
				$data['turma'] .= '"<option value="'.$row->turma.'">'.$row->turma.'</option>"';
			}
			return $data;	
				
	}		
		
}