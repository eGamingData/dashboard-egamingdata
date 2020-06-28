<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<ul class="sidebar-menu" data-widget="tree">
  
  <li class="header"></li>

  <li <?php echo ($page->menu=='dashboard')?'class="active"':'' ?>>
    <a href="<?php echo url('/dashboard') ?>">
       <i class="fa fa-home" aria-hidden="true"></i>
    </i> <span>Home</span>
    </a>
  </li>

 <li class="treeview <?php echo ($page->menu=='leagueoflegends')?'active':'' ?>">
    <a href="#">
      <img src="../assets/img/lol-icon.png" width=" 16px" style="margin-right: 5px;">
      <span>League of Legends</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">

      <li <?php echo ($page->submenu=='lck')?'class="active"':'' ?>>
        <a href="<?php echo url('/lck') ?>">
          <i class="fa fa-angle-right"></i> LCK
        </a>
      </li>

       <li <?php echo ($page->submenu=='lec')?'class="active"':'' ?>>
        <a href="<?php echo url('/lec') ?>">
          <i class="fa fa-angle-right"></i> LEC
        </a>
      </li>

       <li <?php echo ($page->submenu=='lcs')?'class="active"':'' ?>>
        <a href="<?php echo url('/lcs') ?>">
          <i class="fa fa-angle-right"></i> LCS
        </a>
      </li>

      <li <?php echo ($page->submenu=='lpl')?'class="active"':'' ?>>
        <a href="<?php echo url('/lpl') ?>">
          <i class="fa fa-angle-right"></i> LPL
        </a>
        
      </li>

      <li <?php echo ($page->submenu=='cblol')?'class="active"':'' ?>>
        <a href="<?php echo url('/cblol') ?>">
          <i class="fa fa-angle-right"></i> CBLOL
        </a>
        
      </li>

      <li <?php echo ($page->submenu=='ck')?'class="active"':'' ?>>
        <a href="<?php echo url('/ck') ?>">
          <i class="fa fa-angle-right"></i> CK
        </a>
        
      </li>

      <li <?php echo ($page->submenu=='pcs')?'class="active"':'' ?>>
        <a href="<?php echo url('/pcs') ?>">
          <i class="fa fa-angle-right"></i> PCS
        </a>
        
      </li>
      <?php if ( hasPermissions('company_settings') ): ?>
      <li <?php echo ($page->submenu=='eum')?'class="active"':'' ?>>
        <a href="<?php echo url('/eum') ?>">
          <i class="fa fa-angle-right"></i> EU Masters
        </a>
      <?php endif ?>
      </li>

      <li <?php echo ($page->submenu=='naa')?'class="active"':'' ?>>
        <a href="<?php echo url('/naa') ?>">
          <i class="fa fa-angle-right"></i> NA Academy
        </a>
        
      </li>

    </ul>
  </li>

  <li <?php echo ($page->menu=='dota')?'class="active"':'' ?>>
    <a href="<?php echo url('dota') ?>">
     <img src="../assets/img/dota-icon.png" width=" 17px" style="margin-right: 5px;"></i> 
     <span>Dota</span>
    </a>
  </li>

  <li <?php echo ($page->menu=='csgo')?'class="active"':'' ?>>
    <a href="<?php echo url('csgo') ?>">
     <img src="../assets/img/csgo-icon.png" width=" 17px" style="margin-right: 5px;"></i> 
     <span>CS:GO</span>
    </a>
  </li>
  <?php if ( hasPermissions('predictions') ): ?>
   <li <?php echo ($page->menu=='predictions')?'class="active"':'' ?>>
    <a href="<?php echo url('predictions') ?>">
       <i class="fa fa-cogs" aria-hidden="true"></i>
    </i> <span>eGamingData AI</span>
    </a>
  </li>
  <?php endif ?>
  <?php if ( hasPermissions('company_settings') ): ?>
  <li <?php echo ($page->menu=='status')?'class="active"':'' ?>>
    <a href="<?php echo url('status') ?>">
     <i class="fa fa-info-circle" aria-hidden="true"></i>
     <span>Data status</span>
    </a>
  </li>
  <?php endif ?>

  <?php if (hasPermissions('users_list')): ?>
    <li <?php echo ($page->menu=='users')?'class="active"':'' ?>>
      <a href="<?php echo url('users') ?>">
        <i class="fa fa-user"></i> <span>Users</span>
      </a>
    </li>
  <?php endif ?>

  <?php if (hasPermissions('activity_log_list')): ?>
  <li <?php echo ($page->menu=='activity_logs')?'class="active"':'' ?>>
    <a href="<?php echo url('activity_logs') ?>">
      <i class="fa fa-history"></i><span>Activity Logs</span>
    </a>
  </li>
  <?php endif ?>

  <?php if (hasPermissions('roles_list')): ?>
  <li <?php echo ($page->menu=='roles')?'class="active"':'' ?>>
    <a href="<?php echo url('roles') ?>">
      <i class="fa fa-lock"></i><span>Manage Roles</span>
    </a>
  </li>
  <?php endif ?>

  <?php if (hasPermissions('permissions_list')): ?>
  <li <?php echo ($page->menu=='permissions')?'class="active"':'' ?>>
    <a href="<?php echo url('permissions') ?>">
      <i class="fa fa-lock"></i><span>Manage Permissions</span>
    </a>
  </li>
  <?php endif ?>

  <?php if (hasPermissions('backup_db')): ?>
  <li <?php echo ($page->menu=='backup')?'class="active"':'' ?>>
    <a href="<?php echo url('backup') ?>">
      <i class="fa fa-download"></i><span>Backup</span>
    </a>
  </li>
  <?php endif ?>

  <?php if ( hasPermissions('company_settings') ): ?>
  <li class="treeview <?php echo ($page->menu=='settings')?'active':'' ?>">
    <a href="#">
      <i class="fa fa-cog"></i> <span>Settings</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">

      <li <?php echo ($page->submenu=='general')?'class="active"':'' ?>>
        <a href="<?php echo url('settings/general') ?>">
          <i class="fa fa-circle-o"></i> General Settings
        </a>
      </li>

      <li <?php echo ($page->submenu=='company')?'class="active"':'' ?>>
        <a href="<?php echo url('settings/company') ?>">
          <i class="fa fa-circle-o"></i> Company Settings
        </a>
      </li>

      <li <?php echo ($page->submenu=='login_theme')?'class="active"':'' ?>>
        <a href="<?php echo url('settings/login_theme') ?>">
          <i class="fa fa-circle-o"></i> Login Settings
        </a>
      </li>

      <li <?php echo ($page->submenu=='email_templates')?'class="active"':'' ?>>
        <a href="<?php echo url('settings/email_templates') ?>">
          <i class="fa fa-circle-o"></i> Manage Email Template
        </a>
      </li>

    </ul>
  </li>
  <?php endif ?>


</ul>