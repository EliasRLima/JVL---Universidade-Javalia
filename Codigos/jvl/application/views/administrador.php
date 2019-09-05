<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$link = '';
if($selecionar != null){
	$link = '../';
}

?>
<!DOCTYPE html>
<html lang="pt">
	<head>
		<title>Administracao</title>
		<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/background.css">
		<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/administrador.css">
		<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/demo.css">
	</head>
	<body>
		<div class="titulo">
			<h2>JAVALIA</h2>
			<nav class="botao-padrao" style="right: 0;position: absolute;top: 5%;"><a href="<?php echo $link.'menu';?>"><h3">MODO VISITANTE</h3></a></h3"></nav>
		</div>
		<div class="menu-bar">
			<nav id="menu" class="painel">
    			<ul>
        			<li class="botao-padrao"><a href="<?php echo $link.'cad_aluno';?>"><h3>Novos alunos</h3></a></li>
        			<li class="botao-padrao"><a href="<?php echo $link.'alter_aluno';?>"><h3>Editar aluno</h3></a></li>
        			<li class="botao-padrao"><a href="<?php echo $link;?>cad_turma"><h3>Novas turmas</h3></a></li>
        			<li class="botao-padrao"><a href="<?php echo $link;?>alter_turma"><h3>Editar turma</h3></a></li>
        			<li class="botao-padrao"><a href="<?php echo $link;?>cad_horario"><h3>Novos horarios</h3></a></li>
        			<li class="botao-padrao"><a href="<?php echo $link;?>alter_horario"><h3>Editar horario</h3></a></li>
        			<li class="botao-padrao"><a href="<?php echo $link;?>deletar"><h3>Remover dados do sistema</h3></a></li>
    			</ul>
			</nav>
		</div>
		<div class="formularios">

		</div>
	</body>
</html>