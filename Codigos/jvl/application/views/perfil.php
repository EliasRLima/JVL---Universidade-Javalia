<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if(!isset($_SESSION["login"])){
   echo '<script type="text/javascript">window.location.replace("login");</script>';
}

?>
<!DOCTYPE html>
<html lang="pt">
	<head>
		<title>Bem vindo!</title>
		<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/background.css">
		<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/acad.css">
		<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/demo.css">
        <script type = 'text/javascript' src = "<?php echo base_url(); ?>js/item-menu-circular.js"></script>
        <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/botao.css">  

	</head>
	<body>
		<div class="centralizar">
			<div class="avatar">
				<center><img style="border-radius: 50%;" src="<?php echo base_url($avatar); ?>" /></center>
			</div>
			<div class="identificadores">
				<div class="identificadores-nome">
					<input class="user" style="text-align: center;width:100%;" value="<?php echo $nome;?>" disabled="TRUE"/>
				</div>
				<div class="identificadores-curso">
					<label class="botao-padrao" style="text-align: center;"><?php echo $curso;?></label>
				</div>
			</div>
			<?php if(!isset($_SESSION["ADM"])){ ?>
			<div class="horarios" style="z-index: 3;">
				<center><label class="botao-padrao" style="border-bottom: 3px solid #fff;">&laquo;Horarios para a tuma <?php echo $turma;?>&raquo;</label></center>
				<table class="tabela" style="background: #aaa;">
					<tr>
						<th>HOR&Aacute;RIOS</th>
						<th>SEGUNDA</th>
						<th>TER&Ccedil;A</th>
						<th>QUARTA</th>
						<th>QUINTA</th>
						<th>SEXTA</th>
					</tr>
					<tr>
						<th>PRIMEIRO/SEGUNDO</th>
						<th><input type="text" id="seg1" name="seg1" class="user" placeholder="SEG" style="width: 3em" maxlength="3" value="<?php echo $seg1;?>" disabled/></th>
						<th><input type="text" id="ter1" name="ter1" class="user" placeholder="TER" style="width: 3em" maxlength="3" value="<?php echo $ter1;?>" disabled/></th>
						<th><input type="text" id="qua1" name="qua1" class="user" placeholder="QUA" style="width: 3em" maxlength="3" value="<?php echo $qua1;?>" disabled/></th>
						<th><input type="text" id="qui1" name="qui1" class="user" placeholder="QUI" style="width: 3em" maxlength="3" value="<?php echo $qui1;?>" disabled/></th>
						<th><input type="text" id="sex1" name="sex1" class="user" placeholder="SEX" style="width: 3em" maxlength="3" value="<?php echo $sex1;?>" disabled/></th>
					</tr>
					<tr>
						<th>TERCEIRO/QUARTO</th>
						<th><input type="text" id="seg2" name="seg2" class="user" placeholder="SEG" style="width: 3em" maxlength="3" value="<?php echo $seg2;?>" disabled/></th>
						<th><input type="text" id="ter2" name="ter2" class="user" placeholder="TER" style="width: 3em" maxlength="3" value="<?php echo $ter2;?>" disabled/></th>
						<th><input type="text" id="qua2" name="qua2" class="user" placeholder="QUA" style="width: 3em" maxlength="3" value="<?php echo $qua2;?>" disabled/></th>
						<th><input type="text" id="qui2" name="qui2" class="user" placeholder="QUI" style="width: 3em" maxlength="3" value="<?php echo $qui2;?>" disabled/></th>
						<th><input type="text" id="sex2" name="sex2" class="user" placeholder="SEX" style="width: 3em" maxlength="3" value="<?php echo $sex2;?>" disabled/></th>
					</tr>
					<tr>
						<th>QUINTO/SEXTO</th>
						<th><input type="text" id="seg3" name="seg3" class="user" placeholder="SEG" style="width: 3em" maxlength="3" value="<?php echo $seg3;?>" disabled/></th>
						<th><input type="text" id="ter3" name="ter3" class="user" placeholder="TER" style="width: 3em" maxlength="3" value="<?php echo $ter3;?>" disabled/></th>
						<th><input type="text" id="qua3" name="qua3" class="user" placeholder="QUA" style="width: 3em" maxlength="3" value="<?php echo $qua3;?>" disabled/></th>
						<th><input type="text" id="qui3" name="qui3" class="user" placeholder="QUI" style="width: 3em" maxlength="3" value="<?php echo $qui3;?>" disabled/></th>
						<th><input type="text" id="sex3" name="sex3" class="user" placeholder="SEX" style="width: 3em" maxlength="3" value="<?php echo $sex3;?>" disabled/></th>
					</tr>
				</table>		
			</div>
		<?php }?>
		</div>
		<script type = 'text/javascript' src = "<?php echo base_url(); ?>js/menu-circular.js"></script>
		<script type = 'text/javascript' src = "<?php echo base_url(); ?>js/submenu-texto.js"></script>
		<!-- For the demo ad only -->   
	</body>
</html>