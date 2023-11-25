<?php
if(!isset($_POST['submit'])) 
{
 $username=$_POST['username'];
 $password=$_POST['password'];
 $con=mysqli_connect("localhost","root","","sampledb");
 $sql="SELECT * FROM usr_reg Where uname='$username' AND pass='$password'";
 
 $result=mysqli_query($con,$sql);
 $resultcheck=mysqli_num_rows($result); 
 if($resultcheck>0)
 {
    header("Location: ../ui.html");
    exit();
 }
 else
{
 echo"username or password incorrect";
} 
} 
?>