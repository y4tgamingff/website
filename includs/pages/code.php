<?php
  $conn=mysqli_connect("localhost","root","","web");
    if(isset($_POST['went'])){
      $Email=$_POST['Email'];
      $password=$_POST['password'];
      if(!$conn){
          echo "<h1>data not connected</h1>";
          
      }   
      else{
        $sql1="SELECT * FROM admin_login where Email='$Email' and password='$password'";
        $arrey=mysqli_query($conn,$sql1);
        if(mysqli_num_rows($arrey)>0){
          header("Location:map.html");
          }
        else{
            header("Location:sign-in.php");
        }
        }
    }
  ?>