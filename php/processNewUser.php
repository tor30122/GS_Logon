<?php
session_start();

include "loginCheck.php";

include "dbConnection.php"; //Connection to the database

$newUsername = $_GET["user"];
$newPassword1 = $_GET["password1"];
$newPassword2 = $_GET["password2"];

// $hashedPasssword = password_hash($newPassword1, PASSWORD_DEFAULT);

include "elements/head.html"; // Common HTML elements
?>


<body>
    <?php include "elements/navigation.php"; ?>

    <main class="container">
        <div class="grid">
            <div>
                
                <?php
                //Sjekk at passordene er like
                if ($newPassword1 != $newPassword2) {
                    echo "
                        <hgroup>
                            <H1>Ulike passord</H1>
                            <H2>Passordene du skrev inn for brukeren " . $newUsername . " var ikke like, brukeren ble derfor ikke lagert. .</H2>
                        </hgroup>

                        <a href=\"addUser.php\" role=\"button\"> Prøv på ny</a>
                        ";
                    exit;
                }

                //Sjekk om brukernavnet allerede finnes i databasen
                $sql = "SELECT * FROM " . $userTable . " WHERE userName LIKE'" . $newUsername . "'";

                $result = $mysqli->query($sql) or die(mysqli_error($mysqli));

                if ($result->num_rows > 0) {
                    echo "
                        <hgroup>
                            <H1>Allerede registrert</H1>
                            <H2>Det er allerede registrert en bruker med brukernavnet:" . $newUsername . ".</H2>
                        </hgroup>

                        <a href=\"addUser.php\" role=\"button\"> Prøv på ny</a>
                        ";
                    exit;
                }


                // Registrer ny bruker i databasen
                $stmt = $mysqli->prepare("INSERT INTO " . $userTable . " (userID, userName, userPassword) VALUES (null, ?, ?)");
                $stmt->bind_param("ss", $newUsername, $newPassword1);
                $result = $stmt->execute();


                if ($result) {
                    echo "
                        <hgroup>
                            <H1>Registrert</H1>
                            <H2>Brukeren:" . $newUsername . " er lagret i databasen med det valgte passordet.</H2>
                        </hgroup>

                        <a href=\"addUser.php\" role=\"button\">Registrer en bruker til</a>
                        ";
                } else {
                    echo "
                        <hgroup>
                            <H1>Feil</H1>
                            <H2>En ukjent feil hindret at brukeren ble registrert.</H2>
                        </hgroup>

                        <a href=\"addUser.php\" role=\"button\"> Prøv på ny</a>
                        ";
                }

                ?>
            </div>
            <div></div>
        </div>

    </main>

</body>

<?php include "elements/footer.html"; ?>