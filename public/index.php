<?php
/*session_start();
require_once 'app/db/DBConnection.php';
require_once 'app/controller/Users.php';
echo '<pre>';

$user = new Users();
$user->setEmail('timcoetzeesa@gmail.com');
$user->setPword('Tim');
$userID = $user->login($user->getEmail(), $user->getPword());
var_dump($userID);
echo '<br />';
echo 'Getting User Info.....';
//learn about get_arg_functions for method with params inside method
echo '</pre>';
*/
#require 'app/core/Application.php';
define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);
define('APP', ROOT . 'app' . DIRECTORY_SEPARATOR);
define('VIEW', ROOT . 'app' . DIRECTORY_SEPARATOR .'view'. DIRECTORY_SEPARATOR );
define('MODEL', ROOT . 'app' . DIRECTORY_SEPARATOR .'model'. DIRECTORY_SEPARATOR );
define('DATA', ROOT . 'app' .DIRECTORY_SEPARATOR .'data'. DIRECTORY_SEPARATOR);
define('DB', ROOT . 'app' . DIRECTORY_SEPARATOR .'db'. DIRECTORY_SEPARATOR);
define('CONTROLLER', ROOT . 'app' . DIRECTORY_SEPARATOR .'controller'. DIRECTORY_SEPARATOR);
define('CORE', ROOT . 'app' . DIRECTORY_SEPARATOR .'core' .DIRECTORY_SEPARATOR);
define('SETTINGS', ROOT . 'app' . DIRECTORY_SEPARATOR .'settings' .DIRECTORY_SEPARATOR);

$modules = [ROOT, APP, CORE, CONTROLLER, DB, MODEL, VIEW, SETTINGS ];
/**
 * PHP considers each entry in the include path separately when looking for files to include. It will check the first path, and if it doesn't find it, check the next path, until it either locates the included file or returns with a warning or an error.

 */
set_include_path(get_include_path() . PATH_SEPARATOR . implode(PATH_SEPARATOR, $modules));
spl_autoload_register('spl_autoload', false);
#var_dump(get_include_path());
#var_dump($_SERVER['REQUEST_URI']);
#var_dump(CONTROLLER);

New Application;
