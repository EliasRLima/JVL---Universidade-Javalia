<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DaoTurma extends CI_Model {

	public $title;
    public $content;
    public $date;


    public function getTurmas()
		{
			error_reporting(0);
			$this->load->database();
			$sql = "SELECT id_turma as turma FROM turma";
			$query = $this->db->query($sql);
			$turma['turma'] = 'echo "<option value="602"></option>";';
			foreach ($query->result() as $row){
				$turma['turma'] .= '"<option value="'.$row->turma.'">'.$row->turma.'</option>"';
			}
			return $turma;		
				
		}

	
}