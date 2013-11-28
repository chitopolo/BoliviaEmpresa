<?php //print_r($data); ?> 
<style type="text/css">
	
		#sidebar{
			position: absolute;
			width: 115px;
                        right: 0px;
                        top: 55px;
                        z-index: 1000;
		}		
	</style>
<div class='row-fluid'>
    <div class='span12'>
        <ul class='thumbnails portfolio'>
           <?php echo $dato['map']['html']; ?>  
        </ul>
        
                <div id="sidebar">
                    <div id="accordion">
                        <?php foreach ($text as $val) { ?> 
                      <div>
                        <a data-toggle="collapse" data-parent="#accordion" href="#<?=$val?>">
                          <?php echo $val; ?>
                        </a>
                      </div>
                      <div id="<?=$val?>" class="collapse" style="height: 0px;">
                          <?php foreach( $data[$val] as $company) { ?> 
                         <div>
                                <a data-toggle="collapse" data-parent="#accordion" href="#<?php echo $company['Company']['id'].$company['Company']['name'] ?>">
                                  <?php echo $company['Company']['name']; ?>
                                </a>
                         </div>
                          
                         <div id="<?php echo $company['Company']['id'].$company['Company']['name'] ?>" class="collapse" style="height: 0px;">
                            <?php foreach ($company['Company']['Branch'] as $Branch){ ?> 
                            <div>
                                <a href="javascript:void(0)" onclick="datos_marker(<?=$Branch['latitude'] ?>,<?=$Branch['length']?>,marker_<?=$Branch['id']?>)">
                                        <?=$Branch['id'];?>&nbsp;&nbsp;<?=substr($Branch['name'],0,14)?></a>
                            </div>
                            <?php } ?>
                         </div> 
                          <?php } ?>
                      </div> 
                        <?php } ?>
                    </div>

                </div>
             
    </div>
</div>


<ul class='thumbnails portfolio'>

<li class='span3 cat-1'><div class='thumbnail'><a class='js-fancybox' rel='album' href='http://www-03.ibm.com/innovation/us/watson/images/watson_at_work_intro.jpg'><img src='http://www-03.ibm.com/innovation/us/watson/images/watson_at_work_intro.jpg' alt=''></a><div class='caption'><h5>Project Name</h5><p>Description for this project</p></div></div></li>

<li class='span3 cat-1'><div class='thumbnail'><a class='js-fancybox' rel='album' href='http://www-03.ibm.com/innovation/us/watson/images/watson_at_work_intro.jpg'><img src='http://www-03.ibm.com/innovation/us/watson/images/watson_at_work_intro.jpg' alt=''></a><div class='caption'><h5>Project Name</h5><p>Description for this project</p></div></div></li>

<li class='span3 cat-1'><div class='thumbnail'><a class='js-fancybox' rel='album' href='http://www-03.ibm.com/innovation/us/watson/images/watson_at_work_intro.jpg'><img src='http://www-03.ibm.com/innovation/us/watson/images/watson_at_work_intro.jpg' alt=''></a><div class='caption'><h5>Project Name</h5><p>Description for this project</p></div></div></li>
</ul>


      	<ul class="thumbnails portfolio">
						<li class="span3 cat-1">
							<div class="thumbnail">
								<a class="js-fancybox" rel="album" href="/BoliviaEmpresa/img/Boliviaempresa.jpg">
									<img src="/BoliviaEmpresa/img/Boliviaempresa.jpg" alt="">
								</a>
								<div class="caption">
									<h5>Project Name</h5>
									<p>Description for this project</p>
								</div>
							</div>
						</li>
						<li class="span3 cat-2">
							<div class="thumbnail">
								<a class="js-fancybox" rel="album" href="/BoliviaEmpresa/img/Boliviaempresa.jpg">
									<img src="/BoliviaEmpresa/img/Boliviaempresa.jpg" alt="">
								</a>
								<div class="caption">
									<h5>Project Name</h5>
									<p>Description for this project</p>
								</div>
							</div>
						</li>
						<li class="span3 cat-3">
							<div class="thumbnail">
								<a class="js-fancybox" rel="album" href="/BoliviaEmpresa/img/Boliviaempresa.jpg">
									<img src="/BoliviaEmpresa/img/Boliviaempresa.jpg" alt="">
								</a>
								<div class="caption">
									<h5>Project Name</h5>
									<p>Description for this project</p>
								</div>
							</div>
						</li>
						<li class="span3 cat-2">
							<div class="thumbnail">
								<a class="js-fancybox" rel="album" href="/BoliviaEmpresa/img/Boliviaempresa.jpg">
									<img src="/BoliviaEmpresa/img/Boliviaempresa.jpg" alt="">
								</a>
								<div class="caption">
									<h5>Project Name</h5>
									<p>Description for this project</p>
								</div>
							</div>
						</li>
					</ul><!-- /.thumbnails.portfolio -->
	