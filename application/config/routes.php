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

$route['default_controller'] = 'CompanyProcess/index';
$route['index'] = 'CompanyProcess/index';
$route['login_register'] = 'CompanyProcess/joinpage';
$route['register'] = 'CompanyProcess/register';
$route['companytwq']='Companyprocess/company';
$route['manage']='Companyprocess/manage';
$route['addpost']='Companyprocess/addpost';
$route['seeposts']='Companyprocess/seeposts';
$route['editonepost/(:any)']='Companyprocess/editonepost/$1';
$route['logout2']='Companyprocess/logout';
$route['editpost']='Companyprocess/editpost';
$route['companydetail']='Companyprocess/companydetail';
$route['companyeditpage']='Companyprocess/companyeditpage';
$route['editonecompany']='Companyprocess/editonecompany';

$route['detailpost/(:any)'] = 'Companyprocess/detailpost/$1';
$route['detailpostcompany/(:any)'] = 'Companyprocess/detailpostcompany/$1';
$route['acceptposts/(:any)'] = 'AdminProcess/acceptposts/$1';


$route['login'] = 'CompanyProcess/login';
$route['seeunacceptedposts'] = 'AdminProcess/seeunacceptedposts';
$route['show'] = 'Companyprocess/readpost';
$route['adminwsq'] = 'AdminProcess/index';
$route['index'] = 'AdminProcess/login';

$route['detailpostcompany2/(:any)']='AdminProcess/detailpostcompany2/$1';
$route['deletepost1/(:any)']='AdminProcess/deletepost1/$1';
$route['editonepost1/(:any)']='AdminProcess/editonepost1/$1';
$route['seeUser']='AdminProcess/seeUser';
$route['addAdmin']='AdminProcess/addAdmin';
$route['addadmin1']='AdminProcess/addadmin1';


$route['seeAdmin']='AdminProcess/seeAdmin';
$route['admineditpage']='Adminprocess/admineditpage';
$route['editoneadmin']='Adminprocess/editoneadmin';
$route['detailsadmins/(:any)'] = 'AdminProcess/detailsadmins/$1';


$route['editonecompany1']='AdminProcess/editonecompany1';
$route['editpost1']='AdminProcess/editpost1';
$route['login_admin'] = 'AdminProcess/login';
$route['editCompany/(:any)'] = 'AdminProcess/editCompany/$1';

$route['adminEdit/(:any)'] = 'AdminProcess/adminEdit/$1';
$route['deleteCompany/(:any)'] = 'AdminProcess/deleteCompany/$1';
$route['deleteCompany1/(:any)'] = 'AdminProcess/deleteCompany1/$1';
$route['makehighlight/(:any)'] = 'AdminProcess/makehighlight/$1';

$route['SeeAdmins'] = 'AdminProcess/SeeAdmins';
$route['editadmin1'] = 'AdminProcess/editadmin1';
$route['editAdmin/(:any)'] = 'AdminProcess/editadmin/$1';
$route['acceptCompany/(:any)'] = 'AdminProcess/acceptCompany/$1';
$route['deleteAdmin/(:any)'] = 'AdminProcess/deleteAdmin/$1';
$route['detailsAdmin/(:any)'] = 'AdminProcess/detailsAdmin/$1';




$route['maketursted/(:any)'] = 'AdminProcess/maketursted/$1';
$route['seeacceptedpost'] = 'AdminProcess/seeacceptedpost';
$route['detailpostcompany1/(:any)'] = 'AdminProcess/detailpostcompany1/$1';
$route['seeUnacppepted'] = 'AdminProcess/seeUnacppepted';

$route['logout'] = 'AdminProcess/logout';
$route['detailsCompany/(:any)'] = 'AdminProcess/detailsCompany/$1';
$route['panel'] = 'Adminprocess/bringadminpanel';
$route['companytwq']='Adminprocess/company';
$route['managepost']='Adminprocess/managepost';
$route['superadmin']='Adminprocess/superaccess';
$route['contact']='Companyprocess/contact';
$route['email']='CompanyProcess/email';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
