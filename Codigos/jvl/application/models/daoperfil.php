<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DaoPerfil extends CI_Model {

	public $title;
    public $content;
    public $date;


    public function perfil($matricula)
		{
			//echo '<script type="text/javascript">alert("'.$matricula.'M");</script>';
			$this->load->database();
			if($matricula != 'Analista do Sistema'){
				$sql = "SELECT p.p_nome as nome, p.p_curso as curso, p.p_turma as turma, a.p_link as avatar, h.p_seg1 as seg1, h.p_seg2 as seg2, h.p_seg3 as seg3, h.p_ter1 as ter1, h.p_ter2 as ter2, h.p_ter3 as ter3, h.p_qua1 as qua1, h.p_qua2 as qua2 , h.p_qua3 as qua3, h.p_qui1 as qui1, h.p_qui2 as qui2, h.p_qui3 as qui3, h.p_sex1 as sex1, h.p_sex2 as sex2, h.p_sex3 as sex3 FROM pessoa p, avatar a,horarios h,turma t WHERE p.p_nome = '".$matricula."' AND p.p_turma = t.id_turma AND t.p_id_horario = h.id_horario AND p.p_avatar = a.id_avatar LIMIT 1";
					$query = $this->db->query($sql);
					$result['nome'] = $matricula;
					foreach ($query->result() as $row) {
						$_SESSION['avatar'] = $row->avatar;
						$result['avatar'] = $row->avatar;
						$result['curso'] = $row->curso;
						$result['turma'] = $row->turma;
						$result['seg1'] = $row->seg1;
						$result['seg2'] = $row->seg2;
						$result['seg3'] = $row->seg3;
						$result['ter1'] = $row->ter1;
						$result['ter2'] = $row->ter2;
						$result['ter3'] = $row->ter3;
						$result['qua1'] = $row->qua1;
						$result['qua2'] = $row->qua2;
						$result['qua3'] = $row->qua3;
						$result['qui1'] = $row->qui1;
						$result['qui2'] = $row->qui2;
						$result['qui3'] = $row->qui3;
						$result['sex1'] = $row->sex1;
						$result['sex2'] = $row->sex2;
						$result['sex3'] = $row->sex3;

				//echo '<script type="text/javascript">alert("'.$result['nome'].'!");</script>';
					}
			}else{
				$sql = "SELECT p.p_nome as nome, p.p_curso as curso, a.p_link as avatar FROM pessoa p, avatar a WHERE p.p_nome = '".$matricula."' AND p.p_avatar = a.id_avatar LIMIT 1";
					$query = $this->db->query($sql);
					$result['nome'] = $matricula;
					foreach ($query->result() as $row) {
						$_SESSION['avatar'] = $row->avatar;
						$result['avatar'] = $row->avatar;
						$result['curso'] = $row->curso;
					}
			}
			return $result;
		
		
		}


}