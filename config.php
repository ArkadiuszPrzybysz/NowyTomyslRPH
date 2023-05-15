<?php

$server = 'localhost';

$user = 'id20646629_root';

$pass = '!&%T]?8KcPy#fcq&';

$db = 'id20646629_rph';



$conn = mysqli_connect($server,$user,$pass) or die("error");



$selectdb = mysqli_select_db($conn,$db) or die("error");

?>