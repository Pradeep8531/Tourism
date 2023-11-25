<?php
if(!isset($_POST['submit']))
{
    $fn=$_POST['fn'];
    $ln=$_POST['ln'];
    $un=$_POST['un'];
    $pas=$_POST['pas'];
    $con= mysqli_connect("localhost","root","","sampledb");
    $sql="INSERT INTO usr_reg(fname,lname,uname,pass) VALUES ('$fn','$ln','$un','$pas')";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        header("Location: ../ui.html");
        exit();
    }
    else{
        echo"not succesful";
    }
}
    



?>