<?php require HEADER; ?>

<?php
    \classes\install::steps();
    \classes\install::database();
    \classes\install::register();
?>

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
        <p>Telepítés előtt bizonyosodjon meg róla, hogy joga van írni és olvasni fájlokat a webszerveren, valamint hogy az összes függőséget megfelelően letöltötte. Majd haladjon végig a telepítő lépésein.</p>
        <p>A függőségeket a terminálban, vagy a Command Promptban kiadott <code>composer install</code> paranccsal tölthei le. Amennyiben a composer nincs telepítve <a href="https://getcomposer.org/" target="_blank">ide</a> kattintva kaphat útmutatást. </p>

        <h3>Követelmények</h3>
        <p>Az alkalmazás a következő függőségeket, vagy alternatíváit követeli meg:</p>
        <ul>
            <li>Apache2 webszerver</li>
            <li>PHP 7.*.*</li>
            <li>MySQL adatbázis szerver</li>
            <li>Composer dependenciakezelő</li>
        </ul>

        <h3>Implementáció</h3>
        <p>Az alkalmazás PHPStorm fejlesztői környezetben készült.</p>

        <form method="post" accept-charset="utf-8">
            <input type="submit" name="next-1" value="Next" class="button-green">
        </form>

    </div>

<?php endif; ?>

<?php if($_GET['step'] === 2): ?>

    <script src="js/installdb.js"></script>

    <div class="container">
        <h2><i class="fa fa-database"></i> Connect to database - <?=$_GET['step']?>/3</h2>
        <p>You need to have a database server and an existing user to use my project. This section create a config.ini file to your server and save the access from your database connection.</p>
        <p>If you fill all of inputs correctly, the next button will be active automatically.</p>

        <form method="post" accept-charset="utf-8">
            <label>Database hostname: *</label>
            <input type="textbox" name="dbhost" id="dbhost" placeholder="Database server hostname">

            <label>Database name: *</label>
            <input type="textbox" name="dbname" id="dbname" placeholder="Database name">

            <label>Database username: *</label>
            <input type="textbox" name="dbuser" id="dbuser"  placeholder="Database username" autocomplete="off">

            <label>Database password: *</label>
            <input type="password" name="dbpass" id="dbpass" placeholder="Database password" autocomplete="off">

            <input type="submit" name="back-2" value="Back" class="button-red">
            <input type="submit" name="next-2" value="Next" id="button-next" class="button-green" disabled>
        </form>
    </div>

<?php endif; ?>

<?php if($_GET['step'] === 3): ?>

    <div class="container">

        <h2><i class="fa fa-user"></i> Create first users - <?=$_GET['step']?>/3</h2>
        <p>Do you want to use this application? How? You need to create an Admin user first.</p>

        <form method="post" accept-charset="utf-8">
            <label>Admin username: *</label>
            <input type="textbox" name="name" placeholder="Username" autocomplete="off">

            <label>Admin password: *</label>
            <input type="password" name="password-1" placeholder="Password" autocomplete="off">

            <label>Admin password again: *</label>
            <input type="password" name="password-2" placeholder="Password again" autocomplete="off">

            <label>Admin email: *</label>
            <input type="email" name="mail" placeholder="Email">

            <input type="submit" name="back-3" value="Back" class="button-red">
            <input type="submit" name="next-3" value="Next" class="button-green">
        </form>
    </div>


<?php endif; ?>

<?php if($_GET['step'] === 4): ?>

    <div class="container">

        <h2><i class="fa fa-check"></i> Installation complete</h2>
        <p>Congratulations. You can use the application now.</p>

        <form method="post" accept-charset="utf-8">
            <input type="submit" name="next-4" value="Next" class="button-green">
        </form>
    </div>

<?php endif; ?>

<?php require FOOTER; ?>
