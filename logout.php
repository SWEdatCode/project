<?php
	session_start();
	session_destroy();
	header("location:website1.php");
?>