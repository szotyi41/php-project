<?php require "header.php"; ?>

<?php

    if(isset($_POST['back'])) {
        $_GET['step'] -= 1;
        unset($_POST['back']);
    }

    if(isset($_POST['next'])) {
        $_GET['step'] += 1;
        unset($_POST['next']);
    }

?>

<div class="head">
    <h1>Installation</h1>
</div>

<?php if($_GET['step'] === 1): ?>

    <div class="container">

        <h2><i class="fa fa-info-circle"></i> First things - <?=$_GET['step']?>/3</h2>
        <p>This PHP app is my project to show my knowledge about programming. </p>

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
            <input type="textbox" name="dbuser" placeholder="Database username">

            <label>Database password: *</label>
            <input type="password" name="dbpass" placeholder="Database password">

            <input type="button" name="next" value="Next" id="button-next">
            <input type="button" name="back" value="Back" id="button-back">
        </form>
    </div>

<?php endif; ?>

<?php if($_GET['step'] === 3): ?>

    <div class="container">

        <h2><i class="fa fa-user"></i> Create first users - <?=$_GET['step']?>/3</h2>
        <p>Do you want to use this application? How? You need to create an Admin user first.</p>

        <form method="post" accept-charset="utf-8">
            <label>Admin username: *</label>
            <input type="textbox" name="user" placeholder="Username">

            <label>Admin password: *</label>
            <input type="password" name="pass" placeholder="Password">

            <label>Admin email: *</label>
            <input type="email" name="email" placeholder="Email">

            <input type="button" name="next" value="Next" id="button-next">
            <input type="button" name="back" value="Back" id="button-back">
        </form>
    </div>


<?php endif; ?>

<?php require "footer.php"; ?>
