<?php

$host = 'localhost';
$username = 'any';
$password = '';
$dbname = 'toptraderdb';

//establish connection

$conn = new mysqli($host, $username, $password, $dbname);

//check connection
if($conn ->connect_error)
{
    die("Connection Failed:" ($conn ->connect_error));
}

?>