<?php


session_start();
if(!isset($_SESSION['oid'])){
   
    header('location:ologin.php');
    die();
}
$oid= $_SESSION['oid'];
