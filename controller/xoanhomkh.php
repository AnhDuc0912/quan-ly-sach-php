<?php
include "../model/conn.php";
if (isset($_GET['id']) && $_GET['id']) {
    $id = $_GET['id'];
    $sql = "DELETE FROM `nhomkhachhang` WHERE id = $id";
    // echo $sql;
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo("Error description: " .mysqli_error());
    }else {
        header("location: ../view/nhomkhachhang.php");
    }
}
else{
    header("location: ../view/nhomkhachhang.php");
}
?>