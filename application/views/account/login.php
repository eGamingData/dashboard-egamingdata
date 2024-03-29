<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php include 'includes/header.php' ?>

<div class="login-box">
  <!-- /.login-logo -->
  <div class="login-box-body">
  <div class="login-logo">
    <a href="<?php echo url('/') ?>"><img src="../assets/img/logo_black.png" class="logo-fl" alt="Logo" style="max-width: 30rem;"></a>
  </div>
    <p class="login-box-msg">
Login to your eGamingData account.</p>

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


    <?php echo form_open('/login/check', ['method' => 'POST', 'autocomplete' => 'off']); ?> 
      <div class="form-group has-feedback">
        <input style="border-radius: 1.5rem;" type="text" class="form-control" placeholder="Enter Username or Email..." value="<?php echo post('username') ?>" name="username" autofocus />
        <span class="fa fa-user form-control-feedback"></span>
        <?php echo form_error('username', '<div class="error" style="color: red; margin-left: 5px;">', '</div>'); ?>
      </div>

      <div class="form-group has-feedback">
        
        <input style="border-radius: 1.5rem;" type="password" class="form-control" placeholder="Password" name="password">
        <span class="fa fa-lock form-control-feedback"></span>
        <?php echo form_error('password', '<div class="error" style="color: red; margin-left: 5px;">', '</div>'); ?>
        
      </div>

      <?php if (setting('google_recaptcha_enabled') == '1'): ?>
        
      <script src="https://www.google.com/recaptcha/api.js" async defer></script>
      
      <div class="form-group">
        <div class="g-recaptcha" data-sitekey="<?php echo setting('google_recaptcha_sitekey') ?>"></div>
        <?php echo form_error('g-recaptcha-response', '<div class="error" style="color: red; margin-left: 5px;">', '</div>'); ?>
      </div>

      <?php endif ?>

      

      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" <?php echo post('remember_me')?'checked':'' ?> name="remember_me" /> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->

        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    <?php echo form_close(); ?>
    <a class="purple" href="<?php echo url('login/forget?username='.post('username')) ?>"><i class="fa fa-lock"></i> Can't remember the password? </a> 

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
<!-- Under Form Links -->
<div class="form-footer">
<p>Don't have an account yet?  <a href="<?php echo url('signup') ?>">Register here </a></p>
</div>

<?php include 'includes/footer.php' ?>
