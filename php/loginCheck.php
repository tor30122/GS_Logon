<?php
    if (! isset($_SESSION['userID'])) {
        header ( 'Location: logon.php' );        
        exit;
    }

    ?>