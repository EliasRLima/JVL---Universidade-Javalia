<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autorizar extends CI_Controller {


	public function index()
	{
                error_reporting(0);
		$pessoa = $this->input->post('user');
		$senha = $this->input->post('pass');
                @session_start();
                $this->load->model('daologin');
                $login = $this->daologin->login($pessoa,$senha);
        	if($login == 1){

        		if(isset($_SESSION["redirecionar"])){
        			$link = $_SESSION["redirecionar"];
        			unset($_SESSION["redirecionar"]);
        			echo '<script type="text/javascript">window.location.replace("'.$link.'");</script>';
        		}else{
        			echo '<script type="text/javascript">window.location.replace("menu");</script>';
        		}
        		
        	}
        	else{
                        //echo '<script type="text/javascript">alert("<<FALHOU>>");</script>';
                        $_SESSION['key_fail'] = "login";
        		echo '<script type="text/javascript">window.location.replace("login");</script>';
        		
        	}
		
		
	}
}