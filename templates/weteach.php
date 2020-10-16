<?php
session_start();
$con=new mysqli("localhost","root","","client_database");
if(isset($_POST['entry_submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $content=$_POST['content'];
    $query="insert into weteach(name,email,contact,content) values ('$name','$email','$contact','$content');";
    $result=mysqli_query($con,$query);
    if($result)
      header("Location:home.html");
  }
?>