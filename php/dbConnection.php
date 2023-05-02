<?php
$dbHost = 'localhost';
$dbUser = 'root';
$dbPassword = '';
$dbDatabase = 'Warpworks';
$userTable = 'logon_users';

$mysqli = new mysqli($dbHost, $dbUser, $dbPassword, $dbDatabase);

$mysqli->set_charset('utf8mb');

?>
