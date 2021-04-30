<?php

require_once("init.php");

$session = $_SESSION['username'];
// function logout
logout($session);

header('Location: ./login.php');