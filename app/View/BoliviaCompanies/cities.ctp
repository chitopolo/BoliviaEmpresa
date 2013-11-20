
<style type="text/css">
		body{
			background: #888888
		}
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
    <script type="text/javascript">

    </script>
      
         <?php echo $data['map']['html']; ?>
                <div id="sidebar">
                        <ul>
                               <?php  foreach($data['datos'] as $map){
                                        ?><li onclick="datos_marker(<?=$map['City']['latitude'] ?>,<?=$map['City']['length']?>,marker_<?=$map['City']['id']?>)">
                                        <?=$map['City']['id'];?>&nbsp;&nbsp;<?=substr($map['City']['name'],0,14)?></li><?php
                                }
                                ?>
                        </ul>
                </div>
             
    </div>
</div>
      