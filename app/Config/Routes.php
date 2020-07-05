<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);


$routes->get('/', 'Admin::login');
$routes->get('readme', 'Admin::readMe');
$routes->post('login', 'Admin::attemptLogin');
$routes->get('logout', 'Admin::logout');



$routes->group('admin',["filter"=>"authorizedonly"],function ($routes) {
	$routes->get('', 'Admin::overview');
	$routes->get('employees', 'Admin::employees');
	$routes->get('departments', 'Admin::departments');
	$routes->get('designations', 'Admin::designations');
	$routes->get('announcements', 'Admin::announcements');
	$routes->get('manage-payroll', 'Admin::managePayroll');
	$routes->get('salary-revision', 'Admin::salaryRevision');
});



/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
