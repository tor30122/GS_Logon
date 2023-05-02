<?php
session_start();

include "loginCheck.php";

include "dbConnection.php"; //Connection to the database
include "elements/head.html"; // Common HTML elements
?>


<body>
    <?php include "elements/navigation.php"; ?>

    <main class="container">
        <div class="grid">
            <div>

            

                <?php

                $stmt = $mysqli->prepare("SELECT userID, userName FROM $userTable");
                $stmt->execute();
                $stmt->store_result();

                $stmt->bind_result($useridDB, $usernameDB);

                if ($stmt->num_rows > 0) {

                    echo "
                        <table>
                            <thead>  
                                <tr>
                                <th scope=\"col\">#</th>
                                <th scope=\"col\">Brukernavn</th>
                                </tr>
                            </thead>
                            <tbody>
                        ";

                    // output data of each row
                    while ($stmt->fetch()) {
                        echo "
                        <tr>
                        <td>" . $useridDB . "</td>
                        <td>" . $usernameDB . "</td>
                        </tr>
                        ";
                    }
                } else {
                    echo "0 results";
                }

                ?>

            </div>
            <div></div>
        </div>

    </main>

</body>

<?php include "elements/footer.html"; ?>