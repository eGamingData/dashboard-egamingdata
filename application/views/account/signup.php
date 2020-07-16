<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php include 'includes/header.php' ?>

<div class="login-box">
  <!-- /.login-logo -->
  <div class="login-box-body">
  <div class="login-logo">
    <a href="<?php echo url('/') ?>"><img src="../assets/img/logo_black.png" class="logo-fl" alt="Logo" style="max-width: 30rem;"></a>
  </div>
    <p class="login-box-msg">Create your eGamingData account.</p>

    <?php if(isset($message)): ?>
      <div class="alert alert-<?php echo $message_type ?>">
        <p><?php echo $message ?></p>
      </div>
    <?php endif; ?>

    <?php if(!empty($this->session->flashdata('message'))): ?>
      <div class="alert alert-<?php echo $this->session->flashdata('message_type'); ?>">
        <p><?php echo $this->session->flashdata('msg') ?></p>
      </div>
    <?php endif; ?>
  <p><?php echo $this->session->flashdata('msg') ?></p>
    <?php // include( VIEWPATH.'/includes/notifications.php' ); ?>

    <!-- signup form -->
  <?php echo form_open('/signup/signup_data', ['method' => 'POST', 'autocomplete' => 'off']); ?> 
    <div class="row">
      <div class="col-sm-6">
        <div class="form-group has-feedback">
           <span class="fa fa-user form-control-feedback"></span>
          <input style="border-radius: 1.5rem;" type="text" class="form-control" placeholder="Username" value="<?php echo post('username') ?>"  name="username" autofocus />
          <?php echo form_error('username', '<div class="error" style="color: red; margin-left: 5px;">', '</div>'); ?>                  
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group has-feedback">
          <span class="fa fa-address-card form-control-feedback"></span>
          <input style="border-radius: 1.5rem;" type="text" class="form-control" placeholder="First Name"  name="fname" value="<?php echo post('fname') ?>" autofocus />
            <?php echo form_error('fname', '<div class="error" style="color: red; margin-left: 5px;">', '</div>'); ?>       
        </div>
      </div>           
    </div>
    
    <div class="row">
      <div class="col-sm-6">
        <div class="form-group has-feedback">
          <span class="fa fa-address-card form-control-feedback"></span>
          <input style="border-radius: 1.5rem;" type="text" class="form-control" placeholder="Last Name" value="<?php echo post('lname') ?>"  name="lname" autofocus />
            <?php echo form_error('lname', '<div class="error" style="color: red; margin-left: 5px;">', '</div>'); ?>       
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group has-feedback">
          <span class="fa fa-envelope form-control-feedback"></span>
          <input style="border-radius: 1.5rem;" type="email" class="form-control" placeholder="Email" value="<?php echo post('email') ?>"  name="email" autofocus />
            <?php echo form_error('email', '<div class="error" style="color: red; margin-left: 5px;">', '</div>'); ?>       
        </div>
      </div>  
    </div>   
    <div class="row">        
      <div class="col-sm-6">
        <div class="form-group has-feedback">
          <span class="fa fa-lock form-control-feedback"></span>
          <input style="border-radius: 1.5rem;" type="password" class="form-control" placeholder="Password" value="<?php echo post('password') ?>"  name="password" autofocus />
          <?php echo form_error('password', '<div class="error" style="color: red; margin-left: 5px;">', '</div>'); ?>
        </div>
      </div>  
      <div class="col-sm-6">
        <div class="form-group has-feedback">
          <span class="fa fa-lock form-control-feedback"></span>
          <input style="border-radius: 1.5rem;" value="<?php echo post('cpassword') ?>" type="password" class="form-control" placeholder="Confirm Password"  name="cpassword" autofocus />
          <?php echo form_error('cpassword', '<div class="error" style="color: red; margin-left: 5px;">', '</div>'); ?>
        </div>
      </div>
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
         
        </div>
        <!-- /.col -->
        <div class="checkbox icheck center" style="width: 70%">
            <label>
              <input type="checkbox" name="remember_me"  required /> I agree to the terms of service <a class="purple" href="">terms of service.</a>
            </label>
          </div>

        <div id ="center" class="center">
          
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign up</button>      
        </div>
        <!-- /.col -->
      </div>
    <?php echo form_close(); ?>

    
    <!-- <a href="register.html" class="text-center">Register a new membership</a> -->

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
<!-- Under Form Links -->
<div class="form-footer">
<p>Already have an account?  <a href="<?php echo url('login') ?>">Login</a></p>
</div>



<?php include 'includes/footer.php' ?>
