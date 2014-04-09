<?php
	session_start();
	session_destroy();
	header("Location: http://411vas.cs.odu.edu:8080/vas/");
?>