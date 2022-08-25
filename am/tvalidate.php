<?php


session_start();
if(!isset($_SESSION['tid'])){
    header('location:tlogin.php');
    die();
}
$tid=$_SESSION['tid'];
