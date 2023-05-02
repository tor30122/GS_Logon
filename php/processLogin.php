<?php
session_start();

$_SESSION = [];

include "dbConnection.php"; //Connection to the database

$username = $_POST['username'];
$password = $_POST['password'];


include "elements/head.html"; // Common HTML elements
?>


<body>
    <?php include "elements/navigation.php"; ?>

    <main class="container">
        <div class="grid">
            <div>

                <?php

                $stmt = $mysqli->prepare("SELECT userID, userName, userPassword FROM $userTable WHERE username = ? AND userpassword = ?");
                $stmt->bind_param("ss", $username, $password);

                $stmt->execute();
                $stmt->store_result();

                $stmt->bind_result($useridDB, $usernameDB, $passwordDB);

                //Finnes brukernavnet?
                if ($stmt->num_rows == 1) {
                    $stmt->fetch();
                    //Stemmer passordet?
                    if ($password == $passwordDB) {
                        $_SESSION['userName'] = $usernameDB;
                    $_SESSION['userID'] = $useridDB;
                }

                    include "elements/velkommen.php";
                    exit;
                }

                $_SESSION = [];
                session_destroy();
                echo "
                <hgroup>
                <H1>Feil</H1>
                <H2>Klarte ikke logge inn med bruker " . $username . " sjekk brukernavn og passord.</H2>
          </hgroup>

                <a href=\"logon.php\" role=\"button\"> Prøv på ny</a>
                ";

                ?>

            </div>
            <div></div>
        </div>

    </main>

</body>

<?php include "elements/footer.html"; ?>