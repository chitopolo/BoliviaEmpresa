<?php print_r($data); ?> 
<style type="text/css">
	
		#sidebar{
			position: absolute;
			width: 18%;
			height: 590px;
			background: #222;
			color: #fff;
			margin-left: 80%;
			margin-top: -600px;
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
    <div class='span12'>
         <?php echo $dato['map']['html']; ?>
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
      