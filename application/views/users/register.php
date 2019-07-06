<div>
    <h2><?php echo $this->lang->line('registration_heading'); ?></h2>
    
    <?php
    echo $response_msg;
    echo form_open('register_controller/register_user');
        ?>
        <br>
        <label>First Name</label> 
       <?php
        echo form_input(array('name' => 'usr_fname','class' => 'form_control','id'=>'fname','value'=>set_value('fname',''),'maxlength'=>'100','size'=>'50'));
        ?>
        <br>
        <label>Last Name </label> 
       <?php
        echo form_input(array('name' => 'usr_lname','class' => 'form_control','id'=>'lname','value'=>set_value('lname',''),'maxlength'=>'100','size'=>'50'));
        ?>
        <br>
        <label>Email</label> 
       <?php
        echo form_input(array('name' => 'usr_email','class' => 'form_control','id'=>'email','value'=>set_value('email',''),'maxlength'=>'100','size'=>'50'));
        ?>
        <br>
        <label>Password</label> 
       <?php
        echo form_input(array('name' => 'usr_password','class' => 'form_control','id'=>'pass','value'=>set_value('pass',''),'maxlength'=>'100','size'=>'50'));
        ?>
        <br>
        <label>Conform Password</label> 
       <?php
        echo form_input(array('name' => 'usr_confrm_password','class' => 'form_control','id'=>'email','value'=>set_value('email',''),'maxlength'=>'100','size'=>'50'));
    ?>
   <br>
   <button type="submit" size="50"><?php echo $this->lang->line('submit_button'); ?></button>
   
   <?php
    echo form_close();
    ?>
</div>