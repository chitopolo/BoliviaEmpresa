<div class="companiesTags form">
<?php echo $this->Form->create('CompaniesTag'); ?>
	<fieldset>
		<legend><?php echo __('Add Companies Tag'); ?></legend>
	<?php
		echo $this->Form->input('company_id',array('type'=>'hidden','default'=>$id));		
	?>
                <div id="regiscompany" class="dropdown">                     
                    <input name="conpanytag" class="dropdown-toggle" data-toggle="dropdown" placeholder="que buscar?" autocomplete="on" autocorrect="on" spellcheck="true" type="text" id="registercompanytag">
                    <ul class="dropdown-menu">
                        <li>
                            <ul id="registertag">

                            </ul>
                        </li>
                    </ul>
                </div>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>