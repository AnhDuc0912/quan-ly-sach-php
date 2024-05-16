<?php
include "../model/conn.php";
if (isset($_GET['id']) && $_GET['id']) {
    $id = $_GET['id'];
    $nhomkh = $_POST['nhomkh'];
    $sale = $_POST['sale'];
    
    $sql = "UPDATE `nhomkhachhang` SET `name_kh`='$nhomkh',
    
    `sale`='$sale' WHERE `id`='$id'";
    //  echo $sql;
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo("Error description: " .mysqli_error());
    }else {
        header("location: ../view/nhomkhachhang.php");
    }
    
}else {
    header("location: ../view/nhomkhachhang.php");
}
?>