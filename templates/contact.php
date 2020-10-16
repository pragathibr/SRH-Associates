<?php
$db_connect=mysqli_connect("localhost","root","","client_database") or die();
if (mysqli_connect_error())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$contact=$_REQUEST['contact'];
$content=$_REQUEST['content'];
/*
 * Inserting data to table
 * */

$query=mysqli_query($db_connect,"INSERT INTO user (name, email, contact, content) VALUES ('$name','$email','$contact','$content')") or die(mysqli_error($db_connect));
?>