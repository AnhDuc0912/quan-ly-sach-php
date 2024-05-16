<?php
include "../model/conn.php";
if (isset($_GET['idkh'])) {
    $id = $_GET['idkh'];
    $sql = "DELETE FROM `khachhang` WHERE khachhang.id = $id";
    // echo $sql;
    $result = mysqli_query($conn, $sql);
    if ($result) {
       
        header("location: ../view/danhsachkhachhang.php");
    }else {
        echo("Error description: " .mysqli_error($conn));
    }
}
else{
    header("location: ../view/danhsachkhachhang.php");
}
?>