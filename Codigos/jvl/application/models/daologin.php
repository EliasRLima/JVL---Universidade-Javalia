<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DaoLogin extends CI_Model {

	public $title;
    public $content;
    public $date;


    public function login($pessoa,$senha)
		{
			error_reporting(0);
			$this->load->database();
			$this->db->select("(SELECT p_nome FROM pessoa p WHERE p.p_matricula = '".$pessoa."' and p.p_senha = '".$senha."') AS login", FALSE);
			$query = $this->db->get('pessoa');
			foreach ($query->result() as $row){
				if($row->login != null){
					$_SESSION["login"] = $row->login;
                        if($row->login == "Analista do Sistema"){
                            $_SESSION['ADM'] = $row->login;
                        }
					$sql = "SELECT a.p_link as avatar FROM pessoa p, avatar a WHERE  p.p_matricula = '".$pessoa."' and p.p_avatar = a.id_avatar LIMIT 1";
					$query = $this->db->query($sql);
					$result['nome'] = $matricula;
					foreach ($query->result() as $inserir) {
						$_SESSION['avatar'] = $inserir->avatar;

					}
					return 1;
				}
				return 0;
			}		
				
		}
}