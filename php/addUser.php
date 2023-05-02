<?php
session_start();

include "loginCheck.php";

include "elements/head.html"; // Common HTML elements
?>

<body>
    <?php include "elements/navigation.php"; ?>

    <main class="container">
        <div class="grid">
            <div>

                <hgroup>
                    <h1>Register ny bruker</h1>
                    <h2>Skriv inn ønsket brukernavn og passord.</h2>

                </hgroup>

                <form action="./processNewUser.php">
                    <label for="user">Brukernavn:</label>
                    <input type="text" id="user" name="user" required><br>

                    <label for="password1">Passord:</label>
                    <input type="password" id="password1" name="password1" required><br>

                    <label for="password2">Bekreft passord:</label>
                    <input type="password" id="password2" name="password2" required><br>

                    <div class="grid">
                        <div>
                            <input type="reset" value="Tøm skjema">
                        </div>
                        <div>
                            <input type="submit" value="Registrer bruker">
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </main>

</body>

<?php include "elements/footer.html"; ?>
