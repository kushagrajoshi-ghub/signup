<?php
session_start();
include_once("connection.php");
      $uid=$_POST["signupemail"];
      $pwd=$_POST["pwd"];
      $name=$_POST["username"];
     if(strlen($name)<=2)
     {
          echo "<script type='text/javascript'>
        alert('Too short for a name');
        window.location='TheTask.php';
        </script>";
     }
else
    if(strlen($pwd)<6)
    {
         echo "<script type='text/javascript'>
        alert('Password must be atleast 6 charactres');
        window.location='TheTask.php';
        </script>";
    }
      else
      {           
      $query="insert into user (full_name,email,password) values ('$name','$uid','$pwd')";


      mysqli_query($dbcon,$query);
      $msg=mysqli_error($dbcon);
      if($msg=="")  
      {
          $_SESSION["active_user"]=$uid;
           echo "<script type='text/javascript'>
        alert('Signed up Successfully');
        window.location='index.php';
        </script>";
      }
else
    echo $msg;
      
      }
  
?>
