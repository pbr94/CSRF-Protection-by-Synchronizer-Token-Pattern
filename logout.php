<?php
/**
 * Created by PhpStorm.
 * User: PBR
 * Date: 9/26/2018
 * Time: 9:14 AM
 */
session_start();
session_unset();
session_destroy();
unset($_COOKIE['session_cookie']);
setcookie('PHPSESSID', '', time() - 3600, '/');
setcookie('session_cookie', '', time() - 3600, '/');

header("Location:index.php");
exit;


?>


