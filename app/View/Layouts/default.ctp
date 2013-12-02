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
<html  lang="en">
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
                
  echo $this->Html->css(array('bootstrap.min', 'font-awesome','theme','jquery.fancybox-1.3.4','isotope','demo','slicebox','custom','animation','style'));
                
              ?>
        <!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
 <![endif]-->
 <!--[if IE7]>
  <link rel="stylesheet" href="/BoliviaEmpresa1/css/font-awesome-ie7.min.css">
 <![endif]-->
        <?php
                echo $this->Html->script(array( 'jquery-1.8.3.min','bootstrap', 'jquery.isotope.min','modernizr.custom.46884','jquery.timer','jquery.slicebox','jquery.fancybox-1.3.4','jquery.easing-1.3.pack'));
                echo $this->Html->script('ajax',array('id'=>'ajax')); 
                echo $this->Html->script('ckeditor/ckeditor');
  echo $this->fetch('meta');
  echo $this->fetch('css');
  echo $this->fetch('script');
 ?>       

</head>
<body>
	<div id="container">
		<div id="header">
			<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<!-- Toggle button -->
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					
						<label class="menuCollapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</label>
						<label class="menuCollapse">
							Desplegar Menu
						</label>
					
				</a>
				<!-- Brand Logo -->
				<div>
					<a class="brand" href="index.html"><?php echo $this->Html->image('Boliviaempresa.png', array('alt'=>'home','style'=>'height:53px')); ?></a>
				</div>
				
				<!-- Navbar links -->
				<nav class="nav-collapse collapse pull-right">
					<div id="brow" class="dropdown">

							<input name="conpanytag" class="dropdown-toggle input-large" data-toggle="dropdown" placeholder="¿Que busca?" autocomplete="on" autocorrect="on" spellcheck="true" type="text" id="bolivia_companiesBrowser">
	                                         <div class="btn-group" data-toggle="buttons-radio">
                        <button type="button" class="btn" onclick="cargarFormSM('\/BoliviaEmpresa\/bolivia_companies\/companies/'+$('#bolivia_companiesBrowser').val(),'con1')" >Empresas</button>
                        <button type="button" class="btn" onclick="cargarForm('\/BoliviaEmpresa\/bolivia_companies\/companiesbranches/'+$('#bolivia_companiesBrowser').val(),'con1')" >Proveedores</button>                                                
                    </div>
	                            <ul class="dropdown-menu" id="ulDropdown">
	                                <li>
	                                    <ul id="browsers">

	                                    </ul>
	                                </li>
	                            </ul>
	                        </div>

	                  

	                    <div >
					<ul class="nav">
						<li><?php echo $this->Html->link(("Bienvenido"),array('')); ?></li>
							
												
                    	<li><a href="about.html">Contactenos</a></li>

							
						
						<li class="dropdown">
					       <a href="#" class="dropdown-toggle" data-toggle="dropdown">login <b class="caret"></b></a>
					       <div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
					        <form action="[YOUR ACTION]" method="post" accept-charset="UTF-8">
                                <input id="user_username" style="margin-bottom: 15px;" type="text" name="user[username]" size="30" />
                                <input id="user_password" style="margin-bottom: 15px;" type="password" name="user[password]" size="30" />
                                <input class="btn btn-primary" style="clear: left; width: 100%; height: 32px; font-size: 13px;" type="submit" name="commit" value="Sign In" />
                            </form>
       						</div>
      					</li>
                    </ul>
                    
                    	
                    </div>
                    

				</nav>
				<!--/.nav-collapse -->
			</div><!-- /.container -->
		</div><!-- /.navbar-inner -->
	</div><!-- /.navbar -->

		</div>
		     
		<div id="content">

  				<!--<a href="#" class="btn" id="openBtn">Open modal</a>-->

				<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">×</button>
							<h3>Modal header</h3>
					</div>
					<div class="modal-body">
						<p>My modal content here…</p>
					</div>
					<div class="modal-footer">
						<button class="btn" data-dismiss="modal">Close</button>
					</div>
				</div>



                    
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

</body>

</html>
