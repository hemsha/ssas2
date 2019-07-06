<div class="form">

    <h2><?php echo $this->lang->line('forgot_password_form_heading'); ?></h2>
    <?php
        echo form_open('Welcome','class="form-signin" role="form');
        echo form_input(array('name' => 'usr_email','class' => 'form_control','id'=>'email','value'=>set_value('email',''),'maxlength'=>'100','size'=>'50'));
    ?>
    <button type="submit" size="50"><?php echo $this->lang->line('submit_button'); ?></button>
    <?php
        echo form_close();
    ?>

</div>