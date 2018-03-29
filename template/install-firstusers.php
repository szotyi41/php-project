<?php require "header.php"; ?>

<div class="head">
    <h1>Installation</h1>
</div>

<div class="container">

    <h2><i class="fa fa-user"></i> Create first users - 3/3</h2>
	<p>Do you want to use this application? How? You need to create an Admin user first.</p>

	<form method="post" accept-charset="utf-8">
        <label>Admin username: *</label>
		<input type="textbox" name="user" namespace="Username" required>

        <label>Admin password: *</label>
		<input type="password" name="pass" namespace="Password" required>

        <label>Admin email: *</label>
        <input type="email" name="email" namespace="Email" required>

		<input type="submit" name="submit" value="Next" id="button-next">
	</form>
</div>

<?php require "footer.php"; ?>