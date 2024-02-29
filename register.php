<?php
$link=mysqli_connect('localhost','root','','dbase');
if($link === false)
{
    die("Error:could not connect.".mysqli_connect_error());
}
else
{
    $fname=$_POST['a'];
    $lname=$_POST['b'];
    $email=$_POST['c'];
    $psw=$_POST['d'];
    echo"fname:".$fname;
    echo"lname:".$lname;
    echo"email:".$email;
    echo"psw:".$psw;
    $sql="insert into info(fname,lname,email,psw) values('$fname','$lname','$email','$psw')";


if(mysqli_query($link,$sql))
{
    echo"<br> RECORDS SUCCESSFULLY REGISTER.";
}
else
{
    echo"Error:could not able to execute $sql". mysqli_error($link);
}
mysqli_close($link);
}
?>


