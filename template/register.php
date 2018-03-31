<?php require "header.php"; ?>

<?php
    if (\classes\input::exists())
    {

        if (\classes\input::get('register'))
        {
            $register = new \classes\register();
            $register->setName($_POST["name"]);
            $register->setMail($_POST["mail"]);
            $register->setPassword($_POST["password-1"], $_POST['password-2']);
            $register->setAdmin(false);

            if($register->submit()) {
                \classes\redirect::to('index.php');
            }
        }
    }
?>

<script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
        $('span#privacy-policy').click(function() {
            $('div#privacy-policy-content').toggle();
        });
    });
</script>

<div class="head">
    <h1>Register</h1>
</div>

<div class="container">

	<form method="post" accept-charset="utf-8">

        <label>Username: *</label>
		<input type="textbox" name="name" placeholder="Username" autocomplete="off" required>

        <label>Password: *</label>
		<input type="password" name="password-1" placeholder="Password" required>

        <label>Password again: *</label>
        <input type="password" name="password-2" placeholder="Password again" required>

        <label>E-mail: *</label>
        <input type="email" name="mail" placeholder="Email" required>

        <input type="checkbox" name="accept" required>
        <span id="privacy-policy">Accept the Privacy policy.</span>

        <div id="privacy-policy-content" style="display: none;">
            <?php require "privacy-policy.php";?>
        </div>

		<input type="submit" name="register" value="Register" class="button-green">
	</form>

</div>

<?php require "footer.php"; ?>