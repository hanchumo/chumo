<?php
$servername="localhost";
$username="root";
$password="";
(connection)
$conn=mysqli_connect($servername,$dbusername,$dbpassword);
if($conn){
    die("connection failed:"mysqli_connect_error());
}