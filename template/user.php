<?php require HEADER; ?>

<?php

    $users = \classes\admin::getAllUsers();

    if(\classes\input::exists())
    {
        if(\classes\input::get("logout")) {
            \classes\login::logout();
        }
    }
?>
    <script src="js/time.js"></script>

    <div class="head">
        <h1>Welcome, <?=$_SESSION['name']?></h1>
    </div>

    <div class="container">

        <h2 id="time">Current time: </h2>

        <p>Your email: <?=$_SESSION['mail']?></p>
        <p>You are registered: <?=$_SESSION['registered'] . " (" . classes\timing::elapsed($_SESSION['registered']) . ")"?></p>
        <p>Last logged in: <?=$_SESSION['lastloggedin'] . " (" . classes\timing::elapsed($_SESSION['lastloggedin']) . ")"?></p>

        <?php if($_SESSION['admin']): ?>

            <script src="js/admin.js"></script>

            <table class="user-list">
                <?php foreach ($users as $user): ?>

                <tr class="user">
                    <td class="id"><?=$user["id"]?></td>
                    <td class="name"><?=$user["name"]?></td>
                    <td class="mail"><?=$user["mail"]?></td>
                    <td class="registered"><?=$user["registered"]?></td>
                    <td class="lastloggedin"><?=$user["lastloggedin"]?></td>
                    <td class="permission"><?=$user["admin"] ? 'Admin' : 'Normal';?></td>
                </tr>

                <?php endforeach; ?>
            </table>

        <?php else: ?>
            <p>You are a normal user.</p>
        <?php endif; ?>

        <form method="post" accept-charset="utf-8">
            <input type="submit" name="logout" value="Log Out" placeholder="Log Out" class="button-red">
        </form>
    </div>

<?php require FOOTER; ?>