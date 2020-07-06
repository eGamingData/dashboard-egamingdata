<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php include 'includes/header.php' ?>

<div class="login-box">
  <!-- /.login-logo -->
  <div class="login-box-body">
  <div class="login-logo">
    <a href="<?php echo url('/') ?>"><img src="../assets/img/logo_black.png" class="logo-fl" alt="Logo" style="max-width: 30rem;"></a>
  </div>
    <p class="login-box-msg">Sign in to start your session</p>

    <?php if(isset($message)): ?>
      <div class="alert alert-<?php echo $message_type ?>">
        <p><?php echo $message ?></p>
      </div>
    <?php endif; ?>

    <?php if(!empty($this->session->flashdata('message'))): ?>
      <div class="alert alert-<?php echo $this->session->flashdata('message_type'); ?>">
        <p><?php echo $this->session->flashdata('message') ?></p>
      </div>
    <?php endif; ?>

    <?php // include( VIEWPATH.'/includes/notifications.php' ); ?>


    <?php echo form_open_multipart('users/save', [ 'class' => 'form-validate', 'autocomplete' => 'off' ]); ?>

      <div class="form-group has-feedback">
      <div class="form-group">
            <label for="formClient-Name">Name</label>
            <input style="border-radius: 1.5rem;" type="text" class="form-control" name="name" id="formClient-Name" required placeholder="Enter Name" onkeyup="$('#formClient-Username').val(createUsername(this.value))" autofocus />
            <span class="fa fa-envelope form-control-feedback"></span>
      </div>

      
      <div class="form-group">
            <label for="formClient-Email">Email</label>
            <input style="border-radius: 1.5rem;" type="email" class="form-control" name="email" data-rule-remote="<?php echo url('users/check') ?>" data-msg-remote="Email Already Exists" id="formClient-Email" required placeholder="Enter email">
            <span class="fa fa-envelope form-control-feedback"></span>
          </div>

      <div class="form-group has-feedback">
      <div class="form-group">
            <label for="formClient-Username">Username</label>
            <input style="border-radius: 1.5rem;" style="border-radius: 1.5rem;" type="text" class="form-control" data-rule-remote="<?php echo url('users/check') ?>" data-msg-remote="Username Already taken" name="username" id="formClient-Username" required placeholder="Enter Username" />
            <span class="fa fa-envelope form-control-feedback"></span>
          </div>

      <div class="form-group">
            <label for="formClient-Password">Password</label>
            <input style="border-radius: 1.5rem;" type="password" class="form-control" name="password" minlength="6" id="formClient-Password" required placeholder="Password">
            <span class="fa fa-envelope form-control-feedback"></span>
          </div>

          <div class="form-group">
            <label for="formClient-ConfirmPassword">Confirm Password</label>
            <input style="border-radius: 1.5rem;" type="password" class="form-control" name="confirm_password" equalTo="#formClient-Password" id="formClient-ConfirmPassword" required placeholder="Confirm Password">
            <span class="fa fa-envelope form-control-feedback"></span>
          </div>

      
      

      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
           <a href="<?php echo url('login') ?>">Already have an account ?</a><br>
          </div>
        </div>
        <!-- /.col -->

        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign Up</button>
        </div>
        <!-- /.col -->
      </div>
    <?php echo form_close(); ?>

    
    <!-- <a href="register.html" class="text-center">Register a new membership</a> -->

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<?php include 'includes/footer.php' ?>
