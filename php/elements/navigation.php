<nav class="container-fluid">
    <ul>
        <?php
        $logon = "logon.php";

        if (isset($_SESSION['userID'])) {
            echo "<li><a href=\"welcome.php\">Hjem</a></li>
                  <li><a href=\"addUser.php\">Ny Bruker</a></li>
                  <li><a href=\"showUsers.php\">Vis Brukere</a></li>
                  <li></li>
                </ul>
                <ul>
                    <li><a href=\"logon.php\" role=\"button\" class=\"secondary outline\">Logg ut</a></li>
                    <li></li>
                  ";
        } else {
            echo "
                </ul>
                <ul>";
        }
        ?>
        
        <li><strong>WarpWorks</strong></li>
        <li><img src="../img/logo_fav.png"></li>
    </ul>
</nav>