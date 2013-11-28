
<div class='row-fluid'>
    <div class='span12'>
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
      