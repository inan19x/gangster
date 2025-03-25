<?php
session_start();
unset($_SESSION['member']);
session_destroy();
header("Location:index.php");
?>
