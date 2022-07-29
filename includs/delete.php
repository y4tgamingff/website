<?php

$conn=mysqli_connect("localhost","root","","web");

    $no = $_GET['no'];

    $sql = " DELETE FROM `product_add` WHERE no = $no";

    mysqli_query($conn,$sql);

    header('location:admin.php');

    $id = $_GET['id'];

    $sql1= " DELETE FROM `slider_tbl` WHERE id = $id";

    mysqli_query($conn,$sql1);

    header('location:pages/slider.php');
    ?>