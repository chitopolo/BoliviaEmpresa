<div class="row-fluid">
    <div class="span12">
            <h3 style="color:#25A781;border-bottom: 8px solid #25A781;">Historia</h3>
    </div>
</div>
<br>
<br>
<?php print_r($data) ?> 
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
         <?php 
          
                $body =  h($data['Story']['content']);
                $bodyNew = html_entity_decode($body);  
                //  echo strip_tags(htmlspecialchars_decode( $body));
                echo $bodyNew;
                                        //echo $value['Company']['content'];
    
         ?>
        </div>
    </div>
</div>


