<?php
if($text[count($text)-1] != '' ){
foreach ($datos as $valores){ ?>
<li>
    <a id="allCriteria" class="simple-category-option selected" href="#" data-key="*" data-name="*" onclick="$('<?=$id ?>').val('<?php for ($i=0;$i<count($text)-1;$i++){if($text[$i] != $valores['Tag']['name']){ echo $text[$i]." ";}} echo $valores['Tag']['name']?>');$('<?=$ul?>').html('');return false;">
    <i class="icon-star"></i> <?=$valores['Tag']['name']?>
    </a>
</li>    
<? } 
}
?>
