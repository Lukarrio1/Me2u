<?php 
session_start();
$userid = $_SESSION['user']['id'];
exit($userid);
    