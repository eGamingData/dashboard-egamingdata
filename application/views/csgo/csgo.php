<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php include viewPath('includes/header'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <section class="content">
      <div class="error-page" style="margin-top: 150px;">
        

        <div class="error-content">
          <h3><i class="fa fa-warning text-yellow"></i> Oops! Page under construction.</h3>

          <p>
           The page you are looking for is under construction.
            Meanwhile, you may <a href="<?php echo config_item('base_url') ?>/">return to Home</a> or try using the search form.
          </p>

          <form class="search-form">
            <div class="input-group">
              <input type="text" name="search" class="form-control" placeholder="Search">

              <div class="input-group-btn">
                <button type="submit" name="submit" class="btn btn-warning btn-flat"><i class="fa fa-search"></i>
                </button>
              </div>
            </div>
            <!-- /.input-group -->
          </form>
        </div>
        <!-- /.error-content -->
      </div>
      <!-- /.error-page -->
    </section>

</section>
<!-- /.content -->

<?php include viewPath('includes/footer'); ?>