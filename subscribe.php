<?php # Script must return TRUE (if allright) or FALSE (if e-mail not valid)

	/** Your code here **/
	echo filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
?>