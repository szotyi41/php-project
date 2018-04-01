<?php require 'header.php'; ?>

<div class="head">
    <h1>Something went wrong</h1>
</div>

<div class="container">
    <p>
    	<?php 
	    	if(isset($_POST["error"])) {
	    		echo $_POST["error"]; 
	    	} else { 
	    		echo "<h3>404 error</h3>" . "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI] not found.";
	    	}
    	?>
    </p>
</div>

<?php require 'footer.php'; ?>