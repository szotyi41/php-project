<?php require "header.php"; ?>

<div class="head">
    <h1>Installation</h1>
</div>

<?php if($_GET['step'] === 1): ?>

    <div class="container">

        <h2><i class="fa fa-info-circle"></i> First things - <?=$_GET['step']?>/3</h2>
        <p>This PHP app is my project to show my knowledge about programming. </p>

        <h3>Specifikáció</h3>
        <p>A webalkalmazás feladata, hogy adatbázis csatalkazással felhasználók adatait tárolja és belépést biztosítson a számukra. Amennyiben nincs megadva az adatbázis elérhetőségéhez a config.ini fájl, ezen a telepítőn vezet végig minket az alkalmazás. Amennyiben a telepítés sikeres a bejelentkezés felületre érkezünk ahol beléphetünk a telepítés során létrehozott felhasználónkkal. Sikeres bejelentkezés esetén a helyi dátumot láthatjuk és az admin felületen a felhasználók adatait.</p>

        <h3>Telepítés</h3>
        <p>Telepítés előtt kérem bizonyosodjon meg róla, hogy az összes függőséget megfelelően letöltötte. Majd haladjon végig a telepítő lépésein.</p>
        <p>A függőségeket a terminálban, vagy cmd-ben kiadott <code>composer install</code> paranccsal töltheti le.</p>

        <h3>Követelmények</h3>
        <p>Az alkalmazás a következő függőségeket, vagy alternatíváit követeli meg:</p>
        <ul>
            <li>Apache2 webszerver</li>
            <li>PHP 7.*.*</li>
            <li>MySQL adatbázis szerver</li>
            <li>Composer dependenciakezelő</li>
        </ul>

        <h3>Implementáció</h3>
        <p>Az alkalmazást PHPStorm fejlesztői környezetben fejlesztettem.</p>

        <h3>UX/UI</h3>
        <p>Egyszerű letisztult flat design</p>

        <form method="post" accept-charset="utf-8">
            <input type="submit" name="next" value="Next" id="button-next">
        </form>

    </div>

<?php endif; ?>

<?php if($_GET['step'] === 2): ?>

    <div class="container">
        <h2><i class="fa fa-database"></i> Connect to database - <?=$_GET['step']?>/3</h2>
        <p>You need to have a database server and an existing user to use my project. This section create a config.ini file to your server and save the access from your database connection.</p>

        <form method="post" accept-charset="utf-8">
            <label>Database hostname: *</label>
            <input type="textbox" name="dbhost" placeholder="Database server hostname">

            <label>Database name: *</label>
            <input type="textbox" name="dbname" placeholder="Database name">

            <label>Database username: *</label>
            <input type="textbox" name="dbuser" placeholder="Database username" autocomplete="off">

            <label>Database password: *</label>
            <input type="password" name="dbpass" placeholder="Database password">

            <input type="button" name="back" value="Back" id="button-back">
            <input type="button" name="next" value="Next" id="button-next">
        </form>
    </div>

<?php endif; ?>

<?php if($_GET['step'] === 3): ?>

    <div class="container">

        <h2><i class="fa fa-user"></i> Create first users - <?=$_GET['step']?>/3</h2>
        <p>Do you want to use this application? How? You need to create an Admin user first.</p>

        <form method="post" accept-charset="utf-8">
            <label>Admin username: *</label>
            <input type="textbox" name="user" placeholder="Username" autocomplete="off">

            <label>Admin password: *</label>
            <input type="password" name="pass" placeholder="Password">

            <label>Admin email: *</label>
            <input type="email" name="email" placeholder="Email">

            <input type="button" name="back" value="Back" id="button-back">
            <input type="button" name="next" value="Next" id="button-next">
        </form>
    </div>


<?php endif; ?>

<?php require "footer.php"; ?>
