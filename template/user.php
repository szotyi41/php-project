<?php require "header.php"; ?>

<?php
    if(\classes\input::exists())
    {
        \classes\login::logout();
    }
?>

    <div class="head">
        <h1>Welcome, <?=$_SESSION['name']?></h1>
    </div>

    <div class="container">
        <form method="post" accept-charset="utf-8">
            <input type="submit" name="logout" value="Log Out" placeholder="LogOut">
        </form>
    </div>

<?php require "footer.php"; ?>