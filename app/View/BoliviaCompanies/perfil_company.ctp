<section>
<div>
<div class="container">
<div id="myCarousel" class="carousel slide">
		<div class="carousel-inner">
			<div class="item active">
                            
				<?php $img = 0;
                                foreach ($data['CompaniesImage'] as $value) {
                                    if($value['type']=='front'){
                                      echo $this->Html->image($value['dir'].'/'.$value['filename'],array('style'=>'width: 100%;max-height: 415px'));
                                      $img = 1;
                                    }                                   
                                }
                                if($img==0){
                                   echo $this->Html->image('companies_image/filename/port_default.jpg',array('style'=>'width: 100%;max-height: 415px')); 
                                }
                                ?>
<div class="carousel-caption">
		<div class="container">
  <div class="row">
      <div class="span2">
      <?php $img = 0;
        foreach ($data['CompaniesImage'] as $value) {
            if($value['type']=='profile'){
              echo $this->Html->image($value['dir'].'/'.$value['filename'],array('style'=>'width: 100%;max-height: 415px'));
              $img = 1;
            }                                   
        }
        if($img==0){
           echo $this->Html->image('companies_image/filename/default.gif',array('style'=>'width: 100%;max-height: 415px')); 
        }
      ?>
      </div>
    <div class="span4">
      <blockquote>
        <p><?php echo $data['Company']['name'] ?></p>
        <small><cite title="Source Title"><?php echo $data['Company']['address'] ?>  <i class="icon-map-marker"></i></cite></small>
      </blockquote>
      <p>
        <i class="icon-envelope"></i> <?php echo $data['Company']['e-mail'] ?>  <br>
        <i class="icon-globe"></i> <?php echo $data['Company']['phone'] ?>  <br>
        <i class="icon-gift"></i> <?php echo $data['Company']['web'] ?> 
      </p>
    </div>
	</div>
			</div>
</div>
    </div>
</div>
  </div>
<div class = "span8">
    <p>
          <i class="icon-calendar"></i>  <?php echo $data['Company']['created'] ?>
          | <i class="icon-comment"></i> <?php foreach ($data['SubCategory'] as $val) {?> <a href="#"><?php echo $val['name'] ?></a><?php } ?> 
          | <i class="icon-share"></i> <a href="#">Visitas</a>
          | <i class="icon-tags"></i> Tags : <?php foreach ($data['Tag'] as $value) {?> <a href="#"><span class="label label-info"><?php echo $value['name'] ?> </span></a> <?php } ?> 
    </p>
</div>
<div id="izquierda" class="span12">
<h3>Izquierda</h3>

<ul class="nav nav-tabs">
<li class="active">
<a href="#0" data-toggle = "tab">Sucursales</a>
</li>
<li><a href="#1" data-toggle = "tab">Productos</a></li>
<li><a href="#2" data-toggle = "tab">Informacion</a></li>
<li><a href="#3" data-toggle = "tab">Contactanos</a></li>
<li><a href="#4" data-toggle = "tab">Otros</a></li>
</ul>

</div>
<div class="tab-content span12">
    <div class="tab-pane active" id="0">
               
<style type="text/css">

		#sidebar{															
			background: #222;
			color: #fff;			
			border: 5px solid #fff;
		}
		ul{
			padding: 0;
			text-align: justify;		
		}
		 li{
			cursor: pointer;
			border-top: 1px solid #fff;
			background: #c3c3c3; 
			list-style: none;
			color: #111
		}
		li:hover{
			background: #fefefe;
		}
	</style> 
        <div class='row-fluid'>
            <div class='span10'>
                <?php echo $dato['map']['html']; ?>
            </div>
            <div class="span2" id="sidebar">
                    <ul>
                        <?php  foreach($data['Branch'] as $map){
                                 ?><li onclick="datos_marker(<?=$map['latitude'] ?>,<?=$map['length']?>,marker_<?=$map['id']?>)">
                                 <?=$map['id'];?>&nbsp;&nbsp;<?=substr($map['name'],0,14)?></li><?php
                         }
                         ?>
                    </ul>
            </div>
        </div>
    </div>
       <div class="tab-pane" id="1">
           <div class="row-fluid">
              
               <div class="span12">
                   <section class="block-large bg-alt">
                            <div class="container">
                                    <?php  foreach($data['Item'] as $it){ ?>
                                    <div class="row">
                                        
                                            <div class="span6">

                                                    <!-- Carousel -->
                                                    <div id="myCarousel" class="carousel slide">
                                                            <div class="carousel-inner">
                                                                <?php $i=0; foreach ($it['CompaniesItem']['CompaniesItemsImage'] as $img) {
                                                                    
                                                                    if($i==0){                                                                       
                                                                    ?>  
                                                                    <div class="item active">
                                                                        <?php echo $this->Html->image($img['dir'].'/'.$img['filename'],array('class'=>'img-rounded')) ?>                                                                        
                                                                    </div>
                                                                    <?php $i++; }else{ ?>
                                                                    <div class="item">                                                                        
                                                                        <?php echo $this->Html->image($img['dir'].'/'.$img['filename'],array('class'=>'img-rounded')) ?>                                                                        
                                                                    </div>
                                                                    <?php  }  
                                                                    
                                                                    } ?>
                                                            </div><!-- /.carousel-inner -->
                                                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                                                            <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
                                                    </div><!-- /.carousel -->

                                            </div>
                                
                                            <div class="span6">
                                                    <h2><?php echo $it['name']; ?></h2>
                                                    <p class="lead">Descripcion</p>
                                                    <p><?php echo $it['CompaniesItem']['description']; ?></p>
                                                    <p class="lead">Precio</p>
                                                    <p><?php echo $it['CompaniesItem']['price']; ?></p>
                                                    <p class="lead">Moneda</p>
                                                    <p><?php echo $it['CompaniesItem']['currency']; ?></p>                                                    
                                            </div>
                                    </div>
                                 <?php } ?>
                            </div>
                    </section>
               </div>
             
           </div>
      
        
    </div>
    <div class="tab-pane" id="2">         
        <h3>Contenido</h3>
        <br/>
        <h1>Informacion Empresa</h1>
        <p>
            <?php echo $data['Company']['description'] ?>
        </p>
        <p><a class="btn btn-primary btn-large">mas...</a></p> 
    </div>
    <div class="tab-pane" id="3">
      <p><div class="span6">
    <h1>Alice in Wonderland, part dos</h1>
    <p>'You ought to be ashamed of yourself for asking such a simple question,' added the Gryphon; and then they both sat silent and looked at poor Alice, who felt ready to sink into the earth. At last the Gryphon said to the Mock Turtle, 'Drive on, old fellow! Don't be all day about it!' and he went on in these words:
    'Yes, we went to school in the sea, though you mayn't believe it—'
    'I never said I didn't!' interrupted Alice.
    'You did,' said the Mock Turtle.</p>
    <div>
        <span class="badge badge-success">Posted 2012-08-02 20:47:04</span><div class="pull-right"><span class="label">alice</span> <span class="label">story</span> <span class="label">blog</span> <span class="label">personal</span></div>
    </div> </div></p>
    </div>

    <div class="tab-pane" id="4">
      <p>
        <div class="container">
  <div class="row">
        <div class="span6">
        <ul class="thumbnails">
                <li class="span5 clearfix">
                  <div class="thumbnail clearfix">
                    <img src="http://placehold.it/320x200" alt="ALT NAME" class="pull-left span2 clearfix" style='margin-right:10px'>
                    <div class="caption" class="pull-left">
                      <a href="http://bootsnipp.com/" class="btn btn-primary icon  pull-right">Select</a>
                      <h4>
                      <a href="#" >Luis Felipe Kaufmann</a>
                      </h4>
                      <small><b>RG: </b>99384877</small>  
                    </div>
                  </div>
                </div>
               </div>
              </div>
      </p>
    </div>
  </div>

</div>
</div>
</section>
