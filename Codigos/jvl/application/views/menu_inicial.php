<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html class="no-js">
	<head>
		<title>Bem vindo(a)!</title>
		<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/principal.css">
		<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/background.css">
		<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/demo.css">
        <script type = 'text/javascript' src = "<?php echo base_url(); ?>js/item-menu-circular.js"></script>
        <script type = 'text/javascript' src = "<?php echo base_url(); ?>js/slide-show.js"></script>
        <script type = 'text/javascript' src = "<?php echo base_url(); ?>js/tela.js"></script>

	</head>
	<body id="bode">
		<div class="container">
			<?php
				if(isset($_SESSION["ADM"])){
			?>
				<nav class="botao-padrao" style="position: absolute;z-index: 3;">
				    <a href="administrador"><span>MODO ADMINISTRADOR</span></a>
				</nav>

			<?php
				}
			?>
			<header>
				<h1 autofocus>Javalia Universidade  <span>O futuro começa hoje!</span></h1>	
				<nav class="botao-padrao">
					<a href="sisu">SISU</a>
					<a href="<?php if(!isset($_SESSION["login"])){echo 'login';}else{echo 'perfil';}?>"><?php if(!isset($_SESSION["login"])){echo 'LOGIN';}else{echo 'PERFIL';}?></a>
					<a href="mestrado">P&Oacute;S</a>
				</nav>
			</header>
			<div class="barra-titulo">
				<h2>Javalia</h2>
				<button class="cn-button" id="cn-button" >Menu</button>
				<div class="cn-wrapper" id="cn-wrapper">
					<ul>
						<li><a href="curso"><span>Cursos</span></a></li>
						<li><a href="estrutura"><span>Estrutura</span></a></li>
						<li><a href="sisu"><span>SISU</span></a></li>
						<li><a href="<?php if(!isset($_SESSION["login"])){echo 'login';}else{echo 'logout';}?>"><span ><?php if(!isset($_SESSION["login"])){echo 'LOGIN';}else{echo 'LOGOUT';}?></span></a></li>
						<li><a href="mestrado"><span>P&oacute;s</span></a></li>   
						<li><a href="perfil"><span >Perfil</span></a></li>
						<li><a href="contato"><span >Contato</span></a></li>
						
					 </ul>
				</div>
				
			</div>
			<center>
				<nav class="botao-padrao">
					<a href="#graduacao">Gradua&ccedil;&atilde;o</a>
					<a href="#ingresso">Forma de ingresso</a>
					<a href="#pos">P&oacute;s-Gradua&ccedil;&atilde;o</a>
				</nav>
			</center>
			<div class="corpo" style="text-shadow: 3px 3px 3px #cc9900;">
				<!---->
				<div class="texto">
					<center>
						<h2><span>Seja bem-vindo(a) ao imp&eacute;rio tecnol&oacute;gico da Universidade JAVALIA!</span></h2>
					</center>
						<br></br>
						<br></br>
						<div class="imagem">
							<input type="hidden" id="imgo1" src="<?php echo base_url('images/e1.jpg'); ?>"><input type="hidden" id="imgo2" src="<?php echo base_url('images/e2.jpg'); ?>"><input type="hidden" id="imgo3" src="<?php echo base_url('images/e3.jpg'); ?>">
							<img id="imagem-slide" class="slide-img" src="<?php echo base_url('images/e3.jpg'); ?>" />
							<div id="img2" name="img2" class="circulo" style="left:50%;" onclick="paraImagem2()"></div>
							<div id="img3" name="img3" class="circulo" style="left:52%;" onclick="paraImagem3()"></div>
							<div id="img1" name="img1" class="circulo-ativo" style="left:48%;" onclick="paraImagem1()"></div>
							<div class="back" onclick="paraAnterior()"><</div>
							<div class="next" onclick="paraProxima()">></div>
						</div>
						<br></br>
						<h2><span>Venha estudar na JVL!</span></h2>
						<h3>A JVL oferece formação superior em <span>todas as áreas de conhecimento tecnológico</span> e nas mais diversas modalidades. Além dos cursos de graduação e mestrado, todos gratuitos, a Universidade também oferece oportunidades de iniciação científica, especializações e intercâmbios.</h3>
						<br></br>
						<div id="graduacao">
							<h2><span>Gradua&ccedil;&atilde;o na JVL</span></h2>
							<h3>A JVL &eacute; uma universidade gratuita, que oferece cursos de gradua&ccedil;&atilde;o em &aacute;reas relacionadas ao desenvolvimento tecnol&oacute;gico. A sele&ccedil;&atilde;o &eacute; feita por meio do Sistema de Sele&ccedil;&atilde;o Unificada (Sisu). Para quem j&atilde; cursa o ensino superior, tamb&eacute;m &eacute; poss&iacute;vel solicitar transfer&ecirc;ncia.</h3>
						</div>
						<br></br>
						<div id="ingresso">
							<h2><span>Forma de ingresso</span></h2>
							<h3>Todos os cursos de graduação da JVL s&atilde;o gratuitos. O ingresso &eacute; realizado da seguinte forma:
								Sistema de Sele&ccedil;&atilde;o Unificada (Sisu):
								O Sisu &eacute; o sistema do Minist&eacute;rio da Educa&ccedil;&atilde;o por meio do qual institui&ccedil;&otilde;es p&uacute;blicas de ensino superior oferecem vagas a candidatos participantes do Enem.</h3>
						</div>
						<br></br>
						<div id="pos">
							<h2><span>P&oacute;s-gradua&ccedil;&atilde;o</span></h2>
							<h3>A JVL possui programas de p&oacute;s-gradua&ccedil;&atilde;o em diversas &aacute;reas do conhecimento. Esses cursos podem ser stricto sensu, como são conhecidos os mestrados, ou lato sensu, que &eacute; o caso das especializa&ccedil;&otilde;es ou MBAs.</h3>
						</div>
				</div>
			</div>
			<!--<div class="footer">
				<center><h4>&reg;Javalia - 2019</h4></center>
			</div>-->
		</div>
		<script type = 'text/javascript' src = "<?php echo base_url(); ?>js/menu-circular.js"></script>
		<script type = 'text/javascript' src = "<?php echo base_url(); ?>js/menu-texto.js"></script>
		<script type="text/javascript">
			recursividade();
			automatico();
		</script>
	</body>
</html>