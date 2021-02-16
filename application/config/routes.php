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

// fontend router

$route['default_controller'] = 'welcome/index';
$route['download/(:any)'] = 'welcome/download_page/$1';
$route['search'] = 'welcome/search';
$route['contactus'] = 'welcome/contact_us';
$route['comment'] = 'welcome/comment';
$route['abotus'] = 'welcome/aboutus';
$route['disclaimer'] = 'welcome/disclaimer';
$route['dmca'] = 'welcome/dmca';
$route['movies/(:any)'] = 'welcome/getmovie_cata/$1';
$route['gneres/(:any)'] = 'welcome/getgneres/$1';
//end fontend router
$route['admin/remove_movie/(:any)/(:num)'] = 'upload/remove_movie/$1/$2';
$route['admin/update_picture'] = 'upload/edit_picture';
$route['admin/update_movie'] = 'upload/do_upload_edit';
$route['admin/edit_movie_pic/(:any)/(:num)/(:any)'] = 'upload/edit_movie_view_pic/$1/$2/$3';
$route['admin/edit_movie/(:any)/(:num)'] = 'upload/edit_movie_view/$1/$2';
$route['admin/uploadimg'] = 'upload/do_upload';
$route['admin/addmovieview'] = 'upload/index';
$route['admin/remove_catagori/(:any)'] = 'deshbord/remove_cata/$1';
$route['admin/do_edit_cata'] = 'deshbord/do_edit_cata';
$route['admin/edit_catagori/(:any)'] = 'deshbord/edit_catagori/$1';
$route['admin/getchatagori'] = 'deshbord/view_catagori';
$route['admin/addchatagori'] = 'deshbord/set_catagore';
$route['admin/viewmessage'] = 'deshbord/viewmessage';
$route['admin/remove_message/(:any)'] = 'deshbord/remove_message/$1';
$route['admin/viewcomment'] = 'deshbord/viewcomment';
$route['admin/remove_comment/(:any)'] = 'deshbord/remove_comment/$1';
$route['admin/update_comment/(:any)'] = 'deshbord/update_comment/$1';
$route['admin/deshbord'] = 'deshbord/index';
$route['admin/register'] = 'admin/register';
$route['admin/login'] = 'adminlogin/login';
$route['admin/logout'] = 'adminlogin/logout';
$route['errors/error_404'] = 'errors/error_404';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
