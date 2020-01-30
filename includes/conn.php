<?php
$db_name = 'squad';
$db_user = 'root';
$db_password = '';
$db_host = 'localhost';

$connection = mysqli_connect($db_host,$db_user,$db_password,$db_name);

if(!$connection){
    die("The connection failed because " . mysqli_error($connection));
}


?> ~