<?php
$conn=mysqli_connect("localhost","root","","web");
//  produts add
  if(isset($_POST['go'])){
    $name=$_POST['name'];
    $Image=$_FILES["Image"]['name'];
    $date=$_POST['date'];
    if(!$conn){
        echo "data not connected";
    }else{
    $sql2="INSERT INTO `product_add` (`Image`, `name`, `date`) VALUES ('$Image', '$name', '$date')";
        if(mysqli_query($conn,$sql2)){
            move_uploaded_file($_FILES["Image"]["tmp_name"],"uploads/".$_FILES['Image']['name']);
            header("Location:admin.php");
        }
        else{
            echo "not con";
        }
  }
}

// slider ADD
if(isset($_POST['slideradd'])){
    $slid_title=$_POST['slid_title'];
    $slid_img=$_FILES["slid_img"]['name'];
    if(!$conn){
        echo "data not connected";
    }else{
    $sql3="INSERT INTO `slider_tbl`(`slid_img`, `slid_title`) VALUES ('$slid_img','$slid_title')";
        if(mysqli_query($conn,$sql3)){
            move_uploaded_file($_FILES["slid_img"]["tmp_name"],"uploads/".$_FILES['slid_img']['name']);
            
        }
        else{
            echo "not con";
            

        }
  }
}