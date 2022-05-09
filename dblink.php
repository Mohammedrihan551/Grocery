<?php
  $servername="localhost";
  $username="root";
  $password="";
  $databasename="grocery";

  $con=mysqli_connect($servername,$username,$password,$databasename);
  if(!$con){
      die("Connection Failed".mysqli_connect_error());
  }else{
      "Connectoion Done Sussesfully";
  }
?>