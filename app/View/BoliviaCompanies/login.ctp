<?php 
    //print_r($this->Session->read('us_group'));
    // echo $this->Session->read('Auth.User.id');
  //   print_r($this->Session->read('Auth.User')); //solo tienes dato de la tabla usuario
?>
<?php if(!$this->Session->read('Auth.User')){ ?>
<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Please enter your username and password'); ?></legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login')); ?>
</div>

<?php }else{ ?>
<div class="span12">
     <div class="row-fluid"> 
         <table class="table-striped">
             <tr class="row-fluid">
                 <td class="span2">
                      <strong>Nombre</strong>
                 </td>
                  <td class="span10">
                     <p><?php echo $this->Session->read('Auth.User.first_name')?></p>
                 </td>
             </tr>
             <tr class="row-fluid">
                 <td class="span2">
                      <strong>Apellido</strong>
                 </td>
                  <td class="span10">
                     <p><?=$this->Session->read('Auth.User.last_name')?></p>
                 </td>
             </tr>
             <tr class="row-fluid">
                 <td class="span2">
                      <strong>Email</strong>
                 </td>
                  <td class="span10">
                     <p><?=$this->Session->read('Auth.User.e-mail')?></p>
                 </td>
             </tr>
             <tr class="row-fluid">
                 <td class="span2">
                      <strong>Direccion</strong>
                 </td>
                  <td class="span10">
                     <p><?=$this->Session->read('Auth.User.address')?></p>
                 </td>
             </tr>            
         </table>        
    </div>
    
</div>
<?php } ?>
