<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "login";
$route['404_override'] = '';
$route['logout'] = 'login/logout';

$route['configuracoes/bairros'] = 'bairros';
$route['configuracoes/bairros/(:any)'] = 'bairros/$1';
$route['configuracoes/bairros/(:any)/(:any)'] = 'bairros/$1/$2';

$route['configuracoes/ruas'] = 'ruas';
$route['configuracoes/ruas/(:any)'] = 'ruas/$1';
$route['configuracoes/ruas/(:any)/(:any)'] = 'ruas/$1/$2';

$route['configuracoes/categorias_requerimento'] = 'categorias_requerimento';
$route['configuracoes/categorias_requerimento/(:any)'] = 'categorias_requerimento/$1';
$route['configuracoes/categorias_requerimento/(:any)/(:any)'] = 'categorias_requerimento/$1/$2';

$route['configuracoes/secretarias'] = 'secretarias';
$route['configuracoes/secretarias/(:any)'] = 'secretarias/$1';
$route['configuracoes/secretarias/(:any)/(:any)'] = 'secretarias/$1/$2';


/* End of file routes.php */
/* Location: ./application/config/routes.php */