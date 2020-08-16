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
<?php if (hasPermissions('league_of_legends')): ?>
 <li class="treeview <?php echo ($page->menu=='leagueoflegends')?'active':'' ?>">
    <a href="#">
      <img src="https://dashboard.egamingdata.com/assets/img/lol-icon.png" width=" 16px" style="margin-right: 5px;">
      <span>League of Legends</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <!-- LEAGUE OF LEGENDS TEAMS SECTION -->
        <li class="treeview <?php echo ($page->submenu=='lol-teams')?'active':'' ?>">
        <a href="#">
          <i class="fa fa-angle-right"></i> Teams
        </a>
            <ul class="treeview-menu">
               <li <?php echo ($page->subsubmenu=='teams-lck')?'class="active"':'' ?>>
                <a href="<?php echo url('league-of-legends/teams/lck') ?>">
                  <i class="fa fa-angle-right"></i> LCK
                </a>
              </li>
               <li <?php echo ($page->subsubmenu=='teams-lec')?'class="active"':'' ?>>
                <a href="<?php echo url('league-of-legends/teams/lec') ?>">
                  <i class="fa fa-angle-right"></i> LEC
                </a>
              </li>
               <li <?php echo ($page->subsubmenu=='teams-lcs')?'class="active"':'' ?>>
                <a href="<?php echo url('league-of-legends/teams/lcs') ?>">
                  <i class="fa fa-angle-right"></i> LCS
                </a>
              </li>
              <li <?php echo ($page->subsubmenu=='teams-lpl')?'class="active"':'' ?>>
                <a href="<?php echo url('league-of-legends/teams/lpl') ?>">
                  <i class="fa fa-angle-right"></i> LPL
                </a>        
              </li>
              <li <?php echo ($page->subsubmenu=='teams-cblol')?'class="active"':'' ?>>
                <a href="<?php echo url('league-of-legends/teams/cblol') ?>">
                  <i class="fa fa-angle-right"></i> CBLOL
                </a>        
              </li>
              <li <?php echo ($page->subsubmenu=='teams-ck')?'class="active"':'' ?>>
                <a href="<?php echo url('league-of-legends/teams/ck') ?>">
                  <i class="fa fa-angle-right"></i> CK
                </a>        
              </li>
              <li <?php echo ($page->subsubmenu=='teams-pcs')?'class="active"':'' ?>>
                <a href="<?php echo url('league-of-legends/teams/pcs') ?>">
                  <i class="fa fa-angle-right"></i> PCS
                </a>        
              </li>
              <?php if ( hasPermissions('company_settings') ): ?>
              <li <?php echo ($page->subsubmenu=='teams-eum')?'class="active"':'' ?>>
                <a href="<?php echo url('league-of-legends/teams/eum') ?>">
                  <i class="fa fa-angle-right"></i> EU Masters
                </a>
              <?php endif ?>
              </li>
              <li <?php echo ($page->subsubmenu=='teams-lcsa')?'class="active"':'' ?>>
                <a href="<?php echo url('league-of-legends/teams/lcsa') ?>">
                  <i class="fa fa-angle-right"></i> NA Academy
                </a>        
              </li>
        </ul>
      </li>
      <!-- LEAGUE OF LEGENDS PLAYERS SECTION -->
      <li class="treeview <?php echo ($page->submenu=='lol-players')?'active':'' ?>">
        <a href="<?php echo url('predictions') ?>">
          <i class="fa fa-angle-right"></i> Players
        </a>
            <ul class="treeview-menu">
               <li <?php echo ($page->subsubmenu=='players-lck')?'class="active"':'' ?>>
                <a href="<?php echo url('league-of-legends/players/lck') ?>">
                  <i class="fa fa-angle-right"></i> LCK
                </a>
              </li>
               <li <?php echo ($page->subsubmenu=='players-lec')?'class="active"':'' ?>>
                <a href="<?php echo url('league-of-legends/players/lec') ?>">
                  <i class="fa fa-angle-right"></i> LEC
                </a>
              </li>
               <li <?php echo ($page->subsubmenu=='players-lcs')?'class="active"':'' ?>>
                <a href="<?php echo url('league-of-legends/players/lcs') ?>">
                  <i class="fa fa-angle-right"></i> LCS
                </a>
              </li>
              <li <?php echo ($page->subsubmenu=='players-lpl')?'class="active"':'' ?>>
                <a href="<?php echo url('league-of-legends/players/lpl') ?>">
                  <i class="fa fa-angle-right"></i> LPL
                </a>        
              </li>
              <li <?php echo ($page->subsubmenu=='players-cblol')?'class="active"':'' ?>>
                <a href="<?php echo url('league-of-legends/players/cblol') ?>">
                  <i class="fa fa-angle-right"></i> CBLOL
                </a>        
              </li>
              <li <?php echo ($page->subsubmenu=='players-ck')?'class="active"':'' ?>>
                <a href="<?php echo url('league-of-legends/players/ck') ?>">
                  <i class="fa fa-angle-right"></i> CK
                </a>        
              </li>
              <li <?php echo ($page->subsubmenu=='players-pcs')?'class="active"':'' ?>>
                <a href="<?php echo url('/pcs') ?>">
                  <i class="fa fa-angle-right"></i> PCS
                </a>        
              </li>
              <?php if ( hasPermissions('company_settings') ): ?>
              <li <?php echo ($page->subsubmenu=='players-eum')?'class="active"':'' ?>>
                <a href="<?php echo url('league-of-legends/players/eum') ?>">
                  <i class="fa fa-angle-right"></i> EU Masters
                </a>
              <?php endif ?>
              </li>
              <li <?php echo ($page->subsubmenu=='players-lcsa')?'class="active"':'' ?>>
                <a href="<?php echo url('league-of-legends/players/lcsa') ?>">
                  <i class="fa fa-angle-right"></i> NA Academy
                </a>        
              </li>
        </ul>
      </li>
      <!-- LEAGUE OF LEGENDS CHAMPIONS SECTION -->
       <li class="treeview <?php echo ($page->submenu=='lol-champions')?'active':'' ?>">
        <a href="<?php echo url('predictions') ?>">
          <i class="fa fa-angle-right"></i> Champions
        </a>
            <ul class="treeview-menu">
               <li <?php echo ($page->subsubmenu=='champions-lck')?'class="active"':'' ?>>
                <a href="<?php echo url('league-of-legends/champions/lck') ?>">
                  <i class="fa fa-angle-right"></i> LCK
                </a>
              </li>
               <li <?php echo ($page->subsubmenu=='champions-lec')?'class="active"':'' ?>>
                <a href="<?php echo url('league-of-legends/champions/lec') ?>">
                  <i class="fa fa-angle-right"></i> LEC
                </a>
              </li>
               <li <?php echo ($page->subsubmenu=='champions-lcs')?'class="active"':'' ?>>
                <a href="<?php echo url('league-of-legends/champions/lcs') ?>">
                  <i class="fa fa-angle-right"></i> LCS
                </a>
              </li>
              <li <?php echo ($page->subsubmenu=='champions-lpl')?'class="active"':'' ?>>
                <a href="<?php echo url('league-of-legends/champions/lpl') ?>">
                  <i class="fa fa-angle-right"></i> LPL
                </a>        
              </li>
              <li <?php echo ($page->subsubmenu=='champions-cblol')?'class="active"':'' ?>>
                <a href="<?php echo url('league-of-legends/champions/cblol') ?>">
                  <i class="fa fa-angle-right"></i> CBLOL
                </a>        
              </li>
              <li <?php echo ($page->subsubmenu=='champions-ck')?'class="active"':'' ?>>
                <a href="<?php echo url('league-of-legends/champions/ck') ?>">
                  <i class="fa fa-angle-right"></i> CK
                </a>        
              </li>
              <li <?php echo ($page->subsubmenu=='champions-pcs')?'class="active"':'' ?>>
                <a href="<?php echo url('league-of-legends/champions/pcs') ?>">
                  <i class="fa fa-angle-right"></i> PCS
                </a>        
              </li>
              <?php if ( hasPermissions('company_settings') ): ?>
              <li <?php echo ($page->subsubmenu=='champions-eum')?'class="active"':'' ?>>
                <a href="<?php echo url('league-of-legends/champions/eum') ?>">
                  <i class="fa fa-angle-right"></i> EU Masters
                </a>
              <?php endif ?>
              </li>
              <li <?php echo ($page->subsubmenu=='champions-lcsa')?'class="active"':'' ?>>
                <a href="<?php echo url('league-of-legends/champions/lcsa') ?>">
                  <i class="fa fa-angle-right"></i> NA Academy
                </a>        
              </li>
        </ul>
      </li>
    </ul>
  </li>


<?php endif ?>
<li <?php echo ($page->menu=='darts')?'class="active"':'' ?>>
    <a href="<?php echo url('darts') ?>">
      <i class="fa fa-bullseye"></i> 
     <span>Darts</span>
    </a>
  </li>


  <li <?php echo ($page->menu=='ar')?'class="active"':'' ?>>
    <a href="<?php echo url('dota') ?>">
     <img src="https://dashboard.egamingdata.com/assets/img/dota-icon.png" width=" 17px" style="margin-right: 5px;"></i> 
     <span>Dota</span>
    </a>
  </li>

  <li <?php echo ($page->menu=='csgo')?'class="active"':'' ?>>
    <a href="<?php echo url('csgo') ?>">
     <img src="https://dashboard.egamingdata.com/assets/img/csgo-icon.png" width=" 17px" style="margin-right: 5px;"></i> 
     <span>CS:GO</span>
    </a>
  </li>
  <?php if ( hasPermissions('predictions') ): ?>
  <li class="treeview <?php echo ($page->menu=='predictions')?'active':'' ?>">
   <a href="<?php echo url('predictions') ?>">
       <i class="fa fa-cogs" aria-hidden="true"></i>
      <span>eGamingData AI</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
       <li <?php echo ($page->submenu=='predictions-home')?'class="active"':'' ?>>
        <a href="<?php echo url('predictions') ?>">
          <i class="fa fa-angle-right"></i> Predictions
        </a>
      </li>
      <li <?php echo ($page->submenu=='lec-predictions')?'class="active"':'' ?>>
        <a href="<?php echo url('lec_predictions') ?>">
          <i class="fa fa-angle-right"></i> LEC
        </a>
      </li>
      <li <?php echo ($page->submenu=='lcs-predictions')?'class="active"':'' ?>>
        <a href="<?php echo url('lcs_predictions') ?>">
          <i class="fa fa-angle-right"></i> LCS
        </a>
      </li>
    </ul>
  </li>
  <?php if ( hasPermissions('betting_tracker') ): ?>
  <li <?php echo ($page->menu=='tracker')?'class="active"':'' ?>>
    <a href="<?php echo url('tracker') ?>">
      <i class="fa fa-bar-chart" aria-hidden="true"></i>
     <span>Betting Tracker</span>
    </a>
  </li>
  <?php endif ?>
  <?php endif ?>
  <li <?php echo ($page->menu=='subscription')?'class="active"':'' ?>>
    <a href="<?php echo url('subscription') ?>">
       <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
    </i> <span>Subscriptions</span>
    </a>
  </li>  
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

