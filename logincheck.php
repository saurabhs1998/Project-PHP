<?php 
session_start();

$con =mysqli_connect('localhost','root','');
if($con){
	echo 'connection successful';
 }
 else{
 	echo 'no connection';
 }

$db =mysqli_select_db($con, 'loginadmin');

if(isset($_POST['submit'])){
   $username =$_POST['user'];
   $password =$_POST['pass'];

   $sql ="select *from admintable where user ='$username' and pass = '$password'";

   $query =mysqli_query($con,$sql);

   $row = mysqli_num_rows($query);
   	if($row==1){
   	  	echo 'login succeessful';
   	  	$_SESSION['user']=$username;
   	  	header('location:explore.php');
         console.log("here");
   	  }
   	  else{
   	  	echo 'login failed';
   	  	header('location:adminlogin.php');
   	  }
}
?>
