<?php 
session_start();

//sjekk om bruker er logget inn og sende dem videre til velkomstsiden.
if(isset($_SESSION['userID'])) {
    header ( 'Location: php/welcome.php' );
} 
//sende brukere som ikke er logget inn til innloggingen.
else {
    header ( 'Location: php/logon.php' );
} 
?>