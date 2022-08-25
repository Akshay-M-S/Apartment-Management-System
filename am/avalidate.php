<?php


session_start();
if(!isset($_SESSION['alogin'])){
    header('location:index.php');
    die();
}

