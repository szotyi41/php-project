<?php require "header.php"; ?>

<div class="container">
	<h1>Connect to database</h1>
	<p>You need to have a database server to use my project. This section create a config.ini file to your server and save the access from your database connection.</p>

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