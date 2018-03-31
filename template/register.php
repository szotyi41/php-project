<?php require "header.php"; ?>

<?php
    if(\classes\input::exists()) {
        if(\classes\input::get('mail')) {

        }
    }
?>

<div class="head">
    <h1>Register</h1>
</div>

<div class="container">

	<form method="post" accept-charset="utf-8">
        <label>E-mail: *</label>
        <input type="email" name="mail" placeholder="Email" required>

        <label>Username: *</label>
		<input type="textbox" name="name" placeholder="Username" autocomplete="off" required>

        <label>Password: *</label>
		<input type="password" name="password" placeholder="Password" required>

        <label>Password again: *</label>
        <input type="password" name="pass-again" placeholder="Password again" required>

        <input type="checkbox" name="accept" required>
        <span>You accept the <a target="_blank" href="https://privacypolicies.com/privacy/view/xMjmQA">Privacy policy</a>.</span>

		<input type="submit" name="register" value="Register" id="button-next">
	</form>
</div>

<?php require "footer.php"; ?>