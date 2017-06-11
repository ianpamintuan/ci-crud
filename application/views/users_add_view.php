<div class="container">
  <h1><a href="<?php echo site_url('users/index'); ?>" class="btn btn-default"><i class="fa fa-chevron-left"></i></a> Add New User</h1>
  <hr>
  <div class="row">
    <div class="col-sm-6 col-sm-offset-3 col-xs-12 col-xs-offset-0">
      <div class="form_container">

        <?php $attributes = array('id' => 'add_user_form' , 'class' => 'form_horizontal' ); ?>

        <?php echo validation_errors("<p class='alert alert-danger alert-dismissable fade in'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>"); ?>

        <?php if($this->session->flashdata('errors')): echo $this->session->flashdata('errors'); ?>
        <?php endif; ?>

        <?php echo form_open('users/add', $attributes); ?>

        <div class="form-group">

          <?php echo form_label('First Name'); ?>

          <?php
            $data = array(
              'class' => 'form-control',
              'name'  => 'first_name',
              'placeholder' => 'Please enter your first name',
              'value' => $this->input->post('first_name')
            );
            echo form_input($data);
          ?>

        </div>

        <div class="form-group">

          <?php echo form_label('Last Name'); ?>

          <?php
            $data = array(
              'class' => 'form-control',
              'name'  => 'last_name',
              'placeholder' => 'Please enter your last name',
              'value' => $this->input->post('last_name')
            );
            echo form_input($data);
          ?>

        </div>

        <div class="form-group">

          <?php echo form_label('Email'); ?>

          <?php
            $data = array(
              'class' => 'form-control',
              'name'  => 'email',
              'placeholder' => 'Please enter your email',
              'type'  => 'email',
              'value' => $this->input->post('email')
            );
            echo form_input($data);
          ?>

        </div>

        <div class="form-group">

          <?php echo form_label('Username'); ?>

          <?php
            $data = array(
              'class' => 'form-control',
              'name'  => 'username',
              'placeholder' => 'Please enter a username',
              'value' => $this->input->post('username')
            );
            echo form_input($data);
          ?>

        </div>

        <div class="form-group">

          <?php echo form_label('Password'); ?>

          <?php
            $data = array(
              'class' => 'form-control',
              'name'  => 'password',
              'type'  => 'password',
              'value' => $this->input->post('password')
            );
            echo form_password($data);
          ?>

        </div>

        <div class="form-group">

          <?php echo form_label('Confirm Password'); ?>

          <?php
            $data = array(
              'class' => 'form-control',
              'name'  => 'confirmpassword',
              'type'  => 'password'
            );
            echo form_password($data);
          ?>

        </div>

        <div class="form-group">

          <?php
            $data = array(
              'class' => 'btn btn-primary pull-right',
              'type'  => 'submit',
              'name'  => 'submit',
              'value' => 'Add'
            );
            echo form_submit($data);
          ?>

        </div>

        <div class="clearfix"></div>

      </div>
    </div>
  </div>
