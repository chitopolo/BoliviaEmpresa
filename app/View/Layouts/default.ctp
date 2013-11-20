<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
    
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
        
        <meta http-equiv="content-script-type" content="text/javascript">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
        

	<?php
		echo $this->Html->meta('icon');
		//,'font-awesome','theme'
		echo $this->Html->css(array('bootstrap.min', 'font-awesome', 'theme'));
		echo $this->Html->script(array('bootstrap.min', 'jquery-1.8.3.min', 'jquery.isotope.min','bootstrap'));
                echo $this->Html->script('ajax',array('id'=>'ajax'));                
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
        
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!--[if IE7]>
		<link rel="stylesheet" href="assets/styles/css/font-awesome-ie7.min.css">
	<![endif]-->

</head>
<body>
	<div id="container">
		<div id="header">
			<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<!-- Toggle button -->
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><i class="icon-cog"></i> Menu</a>
				<!-- Brand Logo -->
				<a class="brand" href="index.html"><?php echo $this->Html->image('Boliviaempresa.jpg', array('alt'=>'home','style'=>'height:55px')); ?></a>
				<!-- Navbar links -->
				<nav class="nav-collapse collapse">
					<ul class="nav">
						<li><?php echo $this->Html->link(("Bienvenido"),array('')); ?></li>
						<li><a href="about.html">Boton2</a></li>
						<li><a href="services.html">Boton3</a></li>
						
						<li><a href="team.html">Boton</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Boton <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="portfolio-4-columns.html">4 Boton</a></li>
								<li><a href="portfolio-3-columns.html">3 Boton</a></li>
								<li><a href="portfolio-2-columns.html">2 Boton</a></li>
								<li><a href="portfolio-project-1.html">Single Boton 1</a></li>
								<li><a href="portfolio-project-2.html">Single Boton 2</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Boton <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="blog-1.html">Boton 1</a></li>
								<li><a href="blog-2.html">Boton 2</a></li>
								<li><a href="blog-3.html">Boton 3</a></li>
								<li><a href="single-post.html">Single Boton</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Boton <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="contact-1.html">Boton 1</a></li>
								<li><a href="contact-2.html">Boton odss 2</a></li>
							</ul>
						</li>
                                        
                                        <li>
                                            <button type="button" class="btn btn-large btn-primary" onclick="cargarFormSM('\/BoliviaEmpresa\/BoliviaCompanies\/loginusers','con1')" >Empresas</button>                                            
                                        </li>
        			</ul>
				</nav><!--/.nav-collapse -->
			</div><!-- /.container -->
		</div><!-- /.navbar-inner -->
	</div><!-- /.navbar -->

		</div>
		<div id="myModal" class="modal hide fade" tabindex="-1" data-backdrop="static" data-keyboard="false"></div>
                
		<div id="content">
                    <br>
                    <br><br>
                    
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>

		<div id="footer">
			<div class="block-small footer-top">
			<div class="container">
				<div class="row">
					<div class="span3">
						<h3>Servicios</h3>
						<ul>
							<li><i class="icon-ok"></i> <a href="#">Registra tu empresa</a></li>
							<li><i class="icon-ok"></i> <a href="#">Registra tu empresa</a></li>
							<li><i class="icon-ok"></i> <a href="#">Registra tu empresa</a></li>
							<li><i class="icon-ok"></i> <a href="#">Busca Proveedores</a></li>
							<li><i class="icon-ok"></i> <a href="#">Busca Oferts</a></li>
						</ul>
					</div>
					<div class="span3">
						<h3>Auspiciadores</h3>
						<ul class="list-img">
							<li><a href="#"><?php echo $this->Html->image('flickr_1.jpg'); ?></a></li>
							<li><a href="#"><?php echo $this->Html->image('flickr_2.jpg'); ?></li>
							<li><a href="#"><?php echo $this->Html->image('flickr_3.jpg'); ?></a></li>
							<li><a href="#"><?php echo $this->Html->image('flickr_4.jpg'); ?></a></li>
							<li><a href="#"><?php echo $this->Html->image('flickr_5.jpg'); ?></a></li>
							<li><a href="#"><?php echo $this->Html->image('flickr_6.jpg'); ?></a></li>
							<li><a href="#"><?php echo $this->Html->image('flickr_7.jpg'); ?></a></li>
							<li><a href="#"><?php echo $this->Html->image('flickr_8.jpg'); ?></a></li>
						</ul>
					</div>
					<div class="span3">
						<h3>Contacto</h3>
						<ul>
							<li><i class="icon-angle-right"></i> <a href="#">77456545</a></li>
							<li><i class="icon-angle-right"></i> <a href="#">Huallparimachi 1862</a></li>
							<li><i class="icon-angle-right"></i> <a href="#">591 4 4123125</a></li>
						</ul>
					</div>
					<div class="span3">
						<h3>Siguenos</h3>
						<ul class="list-social">
							<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
							<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
							<li><a class="google-plus" href="#"><i class="icon-google-plus"></i></a></li>
							<li><a class="pinterest" href="#"><i class="icon-pinterest"></i></a></li>
						</ul>
						<ul>
							<li><a href="#"><?php echo $this->Html->image('button_facebook.png'); ?></a></li>
							<li><a href="#"><?php echo $this->Html->image('button_twitter.png'); ?></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="block-small footer-bottom">
			<div class="container">
				<div class="row">
					<div class="span12">
						<p>All Rights Reserved ® CADES.net by chitopolo</p>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>
        <?php echo $this->fetch('scriptBottom'); ?>
	<?php  echo $this->element('sql_dump'); ?>	
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>        
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="assets/js/jquery-1.8.3.min.js"><\/script>')</script>

</body>

</html>
