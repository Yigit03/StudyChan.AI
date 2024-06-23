<?php
include('vt_conn.php');

session_start();
session_destroy();
header('Location:/sat_4/Front_End_Files/tr_guest_home.php');
?>