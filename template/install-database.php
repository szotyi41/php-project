<?php require "header.php"; ?>

<div class="head">
    <h1>Installation</h1>
</div>

<div class="container">
	<h2><i class="fa fa-database"></i> Connect to database - 2/3</h2>
	<p>You need to have a database server and an existing user to use my project. This section create a config.ini file to your server and save the access from your database connection.</p>

	<form method="post" accept-charset="utf-8">
        <label>Database hostname: *</label>
		<input type="textbox" name="dbhost" namespace="Database server hostname" required>

        <label>Database name: *</label>
		<input type="textbox" name="dbname" namespace="Database name" required>

        <label>Database username: *</label>
		<input type="textbox" name="dbuser" namespace="Database username" required>

        <label>Database password: *</label>
		<input type="password" name="dbpass" namespace="Database password" required>

		<input type="submit" name="submit" value="Next" id="button-next">
	</form>
</div>

<?php require "footer.php"; ?>