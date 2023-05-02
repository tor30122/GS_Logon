<?php
session_start();

include "loginCheck.php";

include "./dbConnection.php"; //Connection to the database
include "elements/head.html"; // Common HTML elements
?>


<body>
    <?php include "elements/navigation.php"; ?>

    <main class="container">
        <div class="grid">
            <div>

                <?php include "elements/velkommen.php"; ?>

            </div>
            <div></div>
        </div>

    </main>

</body>

<?php include "elements/footer.html"; ?>

