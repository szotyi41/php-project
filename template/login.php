<?php require "header.php"; ?>

<?php

    if(\classes\input::exists())
    {
        if(\classes\input::get("login"))
        {
            $login = new \classes\login();
            $login->check();

            if (isset($login) and ($_SESSION['login'])) {
                \classes\redirect::to('index.php');
            }
        }
    }

?>

<div class="head">
    <h1>Log In</h1>
</div>

<div class="container">

    <h2>Welcome</h2>
    <p>You can register here or log in now.</p>

	<form method="post" accept-charset="utf-8">
        <label>Username:</label>
		<input type="textbox" name="name" placeholder="Username" required>

        <label>Password:</label>
		<input type="password" name="password" placeholder="Password" required>

		<input type="submit" name="login" value="Log In" id="button-next">
	</form>
</div>

<?php require "footer.php"; ?>