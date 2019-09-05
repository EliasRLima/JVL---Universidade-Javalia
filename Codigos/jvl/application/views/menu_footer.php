<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@session_start();
$login = 'logout';
if(!isset($_SESSION["login"])){
   	$login = "login";
}
?>
<!DOCTYPE html>
<html lang="pt">
	<head>
		<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/menu-footer.css">
        <script type = 'text/javascript' src = "<?php echo base_url(); ?>js/item-menu-circular.js"></script>
        <script type = 'text/javascript' src = "<?php echo base_url(); ?>js/efeito-botao.js"></script>

	</head>
	<body>
		<div class="component">
				<button class="cn-button" id="cn-button">+</button>
				<div class="cn-wrapper" id="cn-wrapper">
				    <ul>
				      <li><a href="contato"><span><img id="imagem-slide" class="slide-img" src="<?php echo base_url('images/icones/1.png'); ?>" /></span></a></li>
				      <li><a href="estrutura"><span ><img id="imagem-slide" class="slide-img" src="<?php echo base_url('images/icones/2.png'); ?>" /></span></a></li>
				      <li><a href="menu"><span><img id="imagem-slide" class="slide-img" src="<?php echo base_url('images/icones/3.png'); ?>" /></span></a></li>
				      <li><a href="perfil"><span><img id="imagem-slide" class="slide-img" src="<?php echo base_url('images/icones/4.png'); ?>" /></span></a></li>
				      <li><a href="<?php echo $login;?>"><span><img id="imagem-slide" class="slide-img" src="<?php echo base_url('images/icones/5.png'); ?>" /></span></a></li>
				     </ul>
				</div>
				<div id="cn-overlay" class="cn-overlay"></div>
		</div>
		<script type = 'text/javascript' src = "<?php echo base_url(); ?>js/menu-circular.js"></script>
		<script type = 'text/javascript' src = "<?php echo base_url(); ?>js/submenu-texto.js"></script> 
	</body>
</html>