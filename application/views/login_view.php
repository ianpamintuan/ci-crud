<div class="container">
  <div class="row">
    <div class="col-sm-6 col-sm-offset-3 col-xs-12 col-xs-offset-0">
      <div class="form_container">
        <h1 class="text-center">Login</h1>
        <hr>

        <?php $attributes = array('id' => 'login_form' , 'class' => 'form_horizontal' ); ?>

        <?php echo validation_errors("<p class='alert alert-danger alert-dismissable fade in'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>"); ?>

        <?php if($this->session->flashdata('errors')): echo $this->session->flashdata('errors'); ?>
        <?php endif; ?>

        <?php if($this->session->flashdata('user_login')): echo "<p class='alert alert-danger alert-dismissable fade in'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>" . $this->session->flashdata('user_login'); ?>
        <?php endif; ?>

        <?php echo form_open('users/login', $attributes); ?>

        <div class="form-group">

          <?php echo form_label('Username'); ?>

          <?php
            $data = array(
              'class' => 'form-control',
              'name'  => 'username',
              'placeholder' => 'Username',
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
              'placeholder' => 'Password',
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
              'value' => 'Login'
            );
            echo form_submit($data);
          ?>

        </div>

        <div class="clearfix"></div>

      </div>
    </div>
  </div>
