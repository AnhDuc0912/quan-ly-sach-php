<?php
include "../model/conn.php";
if(isset($_POST['themmoinhomkh'])){
    $nhomkh = $_POST['nhomkh'];
    $sale = $_POST['sale'];
    

    $sql ="INSERT INTO `nhomkhachhang`(`id`, `name_kh`, `sale`) VALUES ('','$nhomkh','$sale')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("location: ../view/nhomkhachhang.php");
    }
}
?>