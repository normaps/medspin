<!--References : http://scele.cs.ui.ac.id/mod/resource/view.php?id=74239-->
<?php
	session_start();
	session_unset();
	session_destroy();
	header("Location: login.php");
?>