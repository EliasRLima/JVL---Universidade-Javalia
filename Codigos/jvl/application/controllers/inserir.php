<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inserir extends CI_Controller {


	public function Aluno()
	{
                error_reporting(0);
                //matricula, curso, turma, cbox, nome, senha, sexo
		$matricula = $this->input->post('matricula');
                $this->load->model('crud');
                $data = $this->crud->newMatricula($matricula);
                @session_start();
                if($data == 1){
                        $_SESSION['inserir'] = 'false-matricula';
                        echo '<script type="text/javascript">window.location.replace("../cad_aluno");</script>';
                }
                else{
                        $curso = $this->input->post('curso');
                        $turma = $this->input->post('cbox');
                        $nome = $this->input->post('nome');
                        $senha = $this->input->post('senha');
                        $sexo = $this->input->post('sexo');
                        $avatar = 1;
                        if($sexo == "F"){
                                $avatar = 60;
                        }
                        /*$sql = 'INSERT INTO `pessoa`( `p_matricula`, `p_nome`, `p_curso`, `p_turma`, `p_avatar`, `p_senha`, `p_sexo`) VALUES ('.$matricula.','.$nome.','.$curso.','.$turma.','.$avatar.','.$senha.','.$sexo.')';*/
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
                        $valor = $this->crud->Inserir($tabela,$sql);
                        if($valor > 0){
                                $_SESSION['inserir'] = 'true';
                                echo '<script type="text/javascript">window.location.replace("../cad_aluno");</script>';
                        }
                        else{
                                $_SESSION['inserir'] = 'false';
                                echo '<script type="text/javascript">window.location.replace("../cad_aluno");</script>';
                        }

                }
	}

        public function Turma(){
               $numero = $this->input->post('numero');
                $this->load->model('crud');
                $data = $this->crud->newTurma($numero);
                @session_start();
                if($data == 1){
                        $_SESSION['inserir'] = 'false-matricula';
                        echo '<script type="text/javascript">window.location.replace("../cad_turma");</script>';
                }
                else{
                        $horario = $this->input->post('cbox');
                        $sql = array(
                                'id_turma' => $numero,
                                'p_id_horario'  => $horario
                                );
                        $tabela = 'turma';
                        $valor = $this->crud->Inserir($tabela,$sql);
                        if($valor > 0){
                                $_SESSION['inserir'] = 'true';
                                echo '<script type="text/javascript">window.location.replace("../cad_turma");</script>';
                        }
                        else{
                                $_SESSION['inserir'] = 'false';
                                echo '<script type="text/javascript">window.location.replace("../cad_turma");</script>';
                        }

                } 
        }

        public function Horario(){

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
                $valor = $this->crud->Inserir($tabela,$sql);
                @session_start();
                if($valor > 0){
                        $_SESSION['inserir'] = 'true';
                        echo '<script type="text/javascript">window.location.replace("../cad_horario");</script>';
                }
                else{
                        $_SESSION['inserir'] = 'false';
                        echo '<script type="text/javascript">window.location.replace("../cad_horario");</script>';
                }

                
        }
}