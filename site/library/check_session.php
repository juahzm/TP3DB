<?php

session_start();
require_once('connex/connex.php');
if(!isset($_SESSION['fingerPrint']) || $_SESSION['fingerPrint'] !== md5($_SERVER['HTTP_USER_AGENT'].$_SERVER['REMOTE_ADDR'])){
    header('location:client_login.php');}
    ?>