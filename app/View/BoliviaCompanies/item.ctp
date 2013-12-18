<?php
if($text[count($text)-1] != '' ){
foreach ($datos as $valores){ ?>
<li>
    <a id="allCriteria" class="simple-category-option selected" href="#" data-key="*" data-name="*" onclick="$('<?=$id ?>').val('<?php for ($i=0;$i<count($text)-1;$i++){if($text[$i] != $valores['Item']['name']){ echo $text[$i]." ";}} echo $valores['Item']['name']?>');$('<?=$ul?>').html('');return false;">
    <i class="icon-tag"></i> <?=$valores['Item']['name']?>
    </a>
</li>    
<?php } 
}

