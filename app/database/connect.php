<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'blog';

$conn = new mysqli($host, $user, $pass, $db_name);

if ($conn->connect_errno){
    die('Database connection error: ' . $conn->connect_errno);
} else{
    echo "database connection successfull";
}