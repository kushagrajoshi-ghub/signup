<?php
session_start();
include_once("connection.php");
      $name=$_FILES["file"]["tmp_name"]; 
      $file = fopen("$name","r");
      $admin=$_SESSION["active_user"];
echo  $admin;
    while (($data = fgetcsv($file, 1000, ",")) !== FALSE) {
      
        $username="";
         if (isset($data[0])) {
                $username = mysqli_real_escape_string($dbcon, $data[0]);
            }
        $userid="";
         if (isset($data[1])) {
                $userid = mysqli_real_escape_string($dbcon, $data[1]);
            }
        echo $username."<br>\n";
        echo $userid;
        $query = "insert into user (full_name,email,password,Created_by,is_admin)
                   values ('$username','$userid','creating','$admin','false')";
             mysqli_query($dbcon,$query);
      $msg=mysqli_error($dbcon);
      if($msg=="")  
      {
        echo "<script type='text/javascript'>
        alert('Signed up Successfully');
        window.location='index.php';
        </script>";
      }
else
    echo $msg;
    }


fclose($file);
?>