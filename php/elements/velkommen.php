<hgroup>
    <?php
    echo "
    <h1>Velkommen " . $_SESSION['userName'] . "</h1>
    ";
    ?>
    <h2>Du er nå logget inn på siden.</h2>
</hgroup>

<div class="grid">
    <div>
        <a href="addUser.php" role="button">Ny Bruker</a>
    </div>
    <div>
        <a href="showUsers.php" role="button">Vis Brukere</a>

    </div>
    <div>
        <a href="logon.php" role="button" class="secondary outline">Logg ut</a>
    </div>

</div>