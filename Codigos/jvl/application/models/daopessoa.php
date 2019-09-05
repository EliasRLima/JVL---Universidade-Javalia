<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DaoPessoa extends CI_Model {

	public $title;
    public $content;
    public $date;


    public function getAlunos()
		{
			error_reporting(0);
			$this->load->database();
			$sql = "SELECT `p_nome` AS nome,`p_matricula` AS matricula FROM `pessoa` WHERE `p_matricula` != 203908 ORDER BY p_nome ASC";
			$query = $this->db->query($sql);
			$aluno['aluno'] = '';
			foreach ($query->result() as $row){
				$aluno['aluno'] .= '"<option value="'.$row->matricula.'">'.$row->nome.' / '.$row->matricula.'</option>";';
			}
			return $aluno;		
				
		}

	public function getAluno($matricula)
		{
			error_reporting(0);
			$this->load->database();
			$sql = "SELECT `p_nome` AS nome,`p_matricula` AS matricula, `p_nome` AS nome, `p_curso` AS curso, `p_turma` AS turma, `p_avatar` AS avatar, `p_senha` AS senha, `p_sexo` AS sexo FROM `pessoa` WHERE `p_matricula` != 203908 and p_matricula = '".$matricula."' ORDER BY p_nome ASC";
			$query = $this->db->query($sql);
			$aluno['aluno'] = '';
			foreach ($query->result() as $row){
				$aluno['matricula'] = $row->matricula;
				$aluno['nome'] = $row->nome;
				$aluno['curso'] = $row->curso;
				$aluno['turma'] = $row->turma;
				$aluno['avatar'] = $row->avatar;
				$aluno['sexo'] = $row->sexo;
				$aluno['senha'] = $row->senha;
			}
			$sql = "SELECT id_turma as turma FROM turma WHERE id_turma in (select t.p_turma from pessoa t where t.p_matricula = '".$turma."')";
			$sql2 = "SELECT id_turma as turma FROM turma WHERE id_turma not in (select t.p_turma from pessoa t where t.p_matricula = '".$turma."')";
			$query = $this->db->query($sql);
			$query2 = $this->db->query($sql2);
			foreach ($query->result() as $key) {
				$aluno['turma'] .= '"<option value="'.$key->turma.'">'.$key->turma.'</option>"';
			}
			foreach ($query2->result() as $row){
				$aluno['turma'] .= '"<option value="'.$row->turma.'">'.$row->turma.'</option>"';
			}
			return $aluno;		
				
		}
			
		
}