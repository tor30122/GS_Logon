<?php
session_start();

if (isset($_SESSION['userID'])) {
    $logout = true;
} else {
    $logout = false;
}

$_SESSION = [];

include "elements/head.html"; // Common HTML elements
?>

<body>
    <?php include "elements/navigation.php"; ?>



    <main class="container">
        <div class="grid">
            <div>
                <hgroup>
                    <h1>Login</h1>
                    <h2>
                        <?php
                        if ($logout) {
                            echo "Brukeren ble logget ut, du må logge inn på ny.";
                        } else {
                            echo "Skriv inn brukernavn og passord for å logge inn.";
                        }
                        ?>
                    </h2>
                </hgroup>

                <form action="./processLogin.php" method="post">

                    <label for="username">Brukernavn:</label>
                    <input type="text" id="username" name="username" required><br>

                    <label for="password">Passord:</label>
                    <input type="password" id="password" name="password" required><br>

                    <div class="grid">
                        <div>
                            <input type="reset" value="Tøm skjema">
                        </div>
                        <div>
                            <input type="submit" value="Submit">
                        </div>
                    </div>
                </form>
            </div>
            <div></div>
        </div>

    </main>
</body>

</html>