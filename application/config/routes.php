<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'dashboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// [Leagueoflegends]
$route['league-of-legends/general'] = 'leagueoflegends/index';

//[LeagueofLegends/teams]
$route['league-of-legends/teams'] = 'lol_teams/teams';
$route['league-of-legends/teams/lec'] = 'lol_teams/get_lec_teams';
$route['league-of-legends/teams/lck'] = 'lol_teams/get_lck_teams';
$route['league-of-legends/teams/lcs'] = 'lol_teams/get_lcs_teams';
$route['league-of-legends/teams/lpl'] = 'lol_teams/get_lpl_teams';
$route['league-of-legends/teams/cblol'] = 'lol_teams/get_cblol_teams';
$route['league-of-legends/teams/ck'] = 'lol_teams/get_ck_teams';
$route['league-of-legends/teams/pcs'] = 'lol_teams/get_pcs_teams';
$route['league-of-legends/teams/eum'] = 'lol_teams/get_eum_teams';
$route['league-of-legends/teams/lcsa'] = 'lol_teams/get_lcsa_teams';

//[LeagueofLegends/players]
$route['league-of-legends/players'] = 'lol_players/players';
$route['league-of-legends/players/lec'] = 'lol_players/get_lec_players';
$route['league-of-legends/players/lcs'] = 'lol_players/get_lcs_players';
$route['league-of-legends/players/lck'] = 'lol_players/get_lck_players';
$route['league-of-legends/players/pcs'] = 'lol_players/get_pcs_players';
$route['league-of-legends/players/lpl'] = 'lol_players/get_lpl_players';
$route['league-of-legends/players/ck'] = 'lol_players/get_ck_players';
$route['league-of-legends/players/cblol'] = 'lol_players/get_cblol_players';
$route['league-of-legends/players/lcsa'] = 'lol_players/get_lcsa_players';
$route['league-of-legends/players/eum'] = 'lol_players/get_eum_players';

//[LeagueofLegends/champions]
$route['league-of-legends/champions'] = 'lol_champions/champions';
$route['league-of-legends/champions/lec'] = 'lol_champions/get_lec_champions';
$route['league-of-legends/champions/lcs'] = 'lol_champions/get_lcs_champions';
$route['league-of-legends/champions/lck'] = 'lol_champions/get_lck_champions';
$route['league-of-legends/champions/lpl'] = 'lol_champions/get_lpl_champions';
$route['league-of-legends/champions/cblol'] = 'lol_champions/get_cblol_champions';
$route['league-of-legends/champions/ck'] = 'lol_champions/get_ck_champions';
$route['league-of-legends/champions/pcs'] = 'lol_champions/get_pcs_champions';
$route['league-of-legends/champions/lcsa'] = 'lol_champions/get_lcsa_champions';
$route['league-of-legends/champions/eum'] = 'lol_champions/get_eum_champions';


// [Darts]
$route['darts/general'] = 'darts/index';

// [AdminLTE]
$route['adminlte/(:any)'] = 'adminlte/main/$1';
$route['tracker/tracker_delete'] = 'tracker/tracker_delete';
