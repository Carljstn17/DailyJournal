<?php
session_start();

include("controller/function.php");
include_once("controller/connection.php");

check_login($conn);
?>
