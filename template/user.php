<?php require "header.php"; ?>

<?php

    $users = \classes\admin::getAllUsers();

    if(\classes\input::exists())
    {
        \classes\login::logout();
    }
?>

    <div class="head">
        <h1>Welcome, <?=$_SESSION['name']?></h1>
    </div>

    <div class="container">

        <h2 id="time">Current time: </h2>

        <p>Your email: <?=$_SESSION['mail']?></p>
        <p>You are registered: <?=$_SESSION['registered']?></p>
        <p>Last logged in: <?=$_SESSION['lastloggedin']?></p>

        <?php if($_SESSION['admin']): ?>

        <table>

            <?php foreach ($users as $user): ?>
            <tr>
                <td><?=$user["id"]?></td>
                <td><?=$user["name"]?></td>
                <td><?=$user["mail"]?></td>
                <td><?=$user["registered"]?></td>
                <td><?=$user["lastloggedin"]?></td>
                <td><?=$user["admin"] ? 'Admin' : 'Normal'; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>

        <?php else: ?>
            <p>You are a normal user.</p>
        <?php endif; ?>

        <form method="post" accept-charset="utf-8">
            <input type="submit" name="logout" value="Log Out" placeholder="LogOut" id="button-logout">
        </form>
    </div>

<?php require "footer.php"; ?>