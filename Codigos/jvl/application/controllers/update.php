<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update extends CI_Controller {


	public function Aluno()
	{
                error_reporting(0);
                $this->load->model('crud');
                @session_start();
                $matricula = $this->input->post('matricula1');
                //echo '<script type="text/javascript">alert("'.$matricula.' eh isso");</script>';
                $curso = $this->input->post('curso');
                $turma = $this->input->post('cbox');
                $nome = $this->input->post('nome');
                $senha = $this->input->post('senha');
                $sexo = $this->input->post('sexo');
                $avatar = 1;
                if($sexo == "F"){
                    $avatar = 60;
                }
                $sql = array(
                                'p_matricula' => $matricula,
                                'p_nome'  => $nome,
                                'p_curso'  => $curso,
                                'p_turma' => $turma,
                                'p_avatar' => $avatar,
                                'p_senha' => $senha,
                                'p_sexo' => $sexo
                                );
                $tabela = 'pessoa';
                $valor = $this->crud->update($tabela,$sql,'p_matricula',$matricula);
                if($valor > 0){
                    $_SESSION['update'] = 'true';
                    echo '<script type="text/javascript">window.location.replace("../alter_aluno");</script>';
                }
                else{
                   $_SESSION['update'] = 'false';
                   echo '<script type="text/javascript">window.location.replace("../alter_aluno");</script>';
                }

                
	}

        public function Turma(){
                $this->load->model('crud');
                @session_start();
                $numero = $this->input->post('numero');
                $horario = $this->input->post('cbox');
                $sql = array(
                        'id_turma' => $numero,
                        'p_id_horario'  => $horario
                );
                $tabela = 'turma';
                $valor = $this->crud->update($tabela,$sql,'id_turma',$numero);
                if($valor > 0){
                        $_SESSION['update'] = 'true';
                        echo '<script type="text/javascript">window.location.replace("../alter_turma");</script>';
                }else{
                        $_SESSION['inserir'] = 'false';
                        echo '<script type="text/javascript">window.location.replace("../alter_turma");</script>';
                }
        }


        public function Horario(){
                $numero = $this->input->post('numero');
                $descricao = $this->input->post('descricao');
                $seg1 = $this->input->post('seg1');
                $seg2 = $this->input->post('seg2');
                $seg3 = $this->input->post('seg3');
                $ter1 = $this->input->post('ter1');
                $ter2 = $this->input->post('ter2');
                $ter3 = $this->input->post('ter3');
                $qua1 = $this->input->post('qua1');
                $qua2 = $this->input->post('qua2');
                $qua3 = $this->input->post('qua3');
                $qui1 = $this->input->post('qui1');
                $qui2 = $this->input->post('qui2');
                $qui3 = $this->input->post('qui3');
                $sex1 = $this->input->post('sex1');
                $sex2 = $this->input->post('sex2');
                $sex3 = $this->input->post('sex3');

                $sql = array(
                          'descricao' => $descricao,
                          'p_seg1'  => $seg1,
                          'p_seg2'  => $seg2,
                          'p_seg3'  => $seg3,
                          'p_ter1'  => $ter1,
                          'p_ter2'  => $ter2,
                          'p_ter3'  => $ter3,
                          'p_qua1'  => $qua1,
                          'p_qua2'  => $qua2,
                          'p_qua3'  => $qua3,
                          'p_qui1'  => $qui1,
                          'p_qui2'  => $qui2,
                          'p_qui3'  => $qui3,
                          'p_sex1'  => $sex1,
                          'p_sex2'  => $sex2,
                          'p_sex3'  => $sex3
                                );
                $tabela = 'horarios';
                $this->load->model('crud');
                $valor = $this->crud->update($tabela,$sql,'id_horario',$numero);
                @session_start();
                if($valor > 0){
                        $_SESSION['update'] = 'true';
                        echo '<script type="text/javascript">window.location.replace("../alter_horario");</script>';
                }
                else{
                        $_SESSION['update'] = 'false';
                        echo '<script type="text/javascript">window.location.replace("../alter_horario");</script>';
                }

                
        }
}