<?php 
include_once "session.php";

unset($_SESSION['login']);

header("location:./login.php");