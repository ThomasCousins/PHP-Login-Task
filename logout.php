<?php
session_start();
//Destroy the session
session_destroy();
header("Location: http://localhost/index.php");
?>