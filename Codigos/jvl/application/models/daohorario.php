<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DaoHorario extends CI_Model {

	public $title;
    public $content;
    public $date;


    public function getHorarios()
		{
			error_reporting(0);
			$this->load->database();
			$sql = "SELECT `id_horario` as horario, descricao  FROM `horarios`";
			$query = $this->db->query($sql);
			$horario['horario'] = 'echo "<option value="1"></option>";';
			foreach ($query->result() as $row){
				$horario['horario'] .= '"<option value="'.$row->horario.'">'.$row->horario.'-'.$row->descricao.'</option>";';
			}
			return $horario;		
				
		}

	public function getDeHorario($turma)
	{
			error_reporting(0);
			$this->load->database();
			$sql = "SELECT `id_horario` as horario, descricao  FROM `horarios` WHERE id_horario in (select t.p_id_horario from turma t where t.id_turma = ".$turma.")";
			$sql2 = "SELECT `id_horario` as horario, descricao  FROM `horarios` WHERE id_horario not in (select t.p_id_horario from turma t where t.id_turma = ".$turma.")";
			$query = $this->db->query($sql);
			$query2 = $this->db->query($sql2);
			$horario['horario'] = '';
			foreach ($query->result() as $key) {
				$horario['horario'] .= '"<option value="'.$key->horario.'">'.$key->horario.'-'.$key->descricao.'</option>"';
			}
			foreach ($query2->result() as $row){
				$horario['horario'] .= '"<option value="'.$row->horario.'">'.$row->horario.'-'.$row->descricao.'</option>"';
			}
			return $horario;
	}

	public function getHorario($id)
	{

            error_reporting(0);
			$this->load->database();
			$sql = "SELECT `id_horario`, `descricao`, `p_seg1`, `p_seg2`, `p_seg3`, `p_ter1`, `p_ter2`, `p_ter3`, `p_qua1`, `p_qua2`, `p_qua3`, `p_qui1`, `p_qui2`, `p_qui3`, `p_sex1`, `p_sex2`, `p_sex3` FROM `horarios` WHERE `id_horario` = 1";
			$query = $this->db->query($sql);
			$horario['horario'] = '';
			foreach ($query->result() as $row){
				$horario['numero'] = $row->id_horario;
				$horario['descricao'] = $row->descricao;
				$horario['p_seg1'] = $row->p_seg1;
				$horario['p_seg2'] = $row->p_seg2;
				$horario['p_seg3'] = $row->p_seg3;
				$horario['p_ter1'] = $row->p_ter1;
				$horario['p_ter2'] = $row->p_ter2;
				$horario['p_ter3'] = $row->p_ter3;
				$horario['p_qua1'] = $row->p_qua1;
				$horario['p_qua2'] = $row->p_qua2;
				$horario['p_qua3'] = $row->p_qua3;
				$horario['p_qui1'] = $row->p_qui1;
				$horario['p_qui2'] = $row->p_qui2;
				$horario['p_qui3'] = $row->p_qui3;
				$horario['p_sex1'] = $row->p_sex1;
				$horario['p_sex2'] = $row->p_sex2;
				$horario['p_sex3'] = $row->p_sex3;
			}
			return $horario;	
	}
}