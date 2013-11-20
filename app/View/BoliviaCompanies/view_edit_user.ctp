<div class="users form">    

<?php echo $this->FormEnum->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>   
                <input name="id" type="hidden" id="id">
	<?php
                echo $this->FormEnum->input('id');
		echo $this->FormEnum->input('first_name');
		echo $this->FormEnum->input('last_name');
		echo $this->FormEnum->input('date_of_birth');
		echo $this->FormEnum->input('ci');
		echo $this->FormEnum->input('sex');
		echo $this->FormEnum->input('address');
		echo $this->FormEnum->input('phone');
		echo $this->FormEnum->input('cellular');
		echo $this->FormEnum->input('e-mail');
                //echo $this->FormEnum->input('filename',array('type' => 'hidden','default'=>'oll'));
                echo $this->FormEnum->input('dir', array('type' => 'hidden','default'=>'user/filename'));
                ?>
                
                <div id="user">
                    <div class='span12'>
                        <div class='row-fluid'> 
                       <?php $i=0; foreach ($this->Session->read('user') as $val){ ?>
                            <div class='span1' id ='<?='user'.$i ?>'>
                                   <div class='row-fluid'>
                                       <div class='span12'>
                                           <a class="btn" style="color: #50615C;" onclick="eliminar_img('<?='user/filename'.'/'.$val['image']?>','user','#user<?=$i?>',<?=$i?>)"> <i class='icon-remove'></i></a>
                                         
                                           <?php //echo $this->Html->link(__("<i class='icon-remove'></i>"), array('controller'=>'','action' => ''),array('class' => 'ok btn btn-info ','escape' => false)); ?>                       
                                       </div>
                                   </div>
                                   <div class='row-fluid'>
                                       <div class='span12'>
                                            <?php echo $this->Html->image('user/filename'.'/'.$val['image'],array('style'=>'width: 100px;height: 100px;'));   ?>

                                       </div>
                                   </div>                 
                                </div>
                            <?php $i++; } ?>
                        </div>
                    </div>                      
                </div>
                
                <input type="file" id="img"  name="user" style="display: none"  onchange="subir_img('img','uno');">
                <input type="hidden" id="dir" value="/img/user/filename" >
                <div class="input-append">                     
                    <a class="btn" style="color: #50615C;" onclick="$('#img').click();"> Subir Archivo</a>
                </div>
                
                <?php		
		echo $this->FormEnum->input('login');
		echo $this->FormEnum->input('password');
		echo $this->FormEnum->input('state');
		echo $this->FormEnum->input('Group');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Siguiente')); ?>
</div>
