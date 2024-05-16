<?php
include "../model/conn.php";
if (isset($_POST['uploadclick']) && $_POST['uploadclick']) {
    $name = $_POST['name'];
    $sdt = $_POST['sdt'];
    $nhomkh = $_POST['nhomkh'];
    $diachi = $_POST['diachi'];
    $sql = "INSERT INTO `khachhang`(`id`, `name`, `sdt`, `diachi`, `id_nhomkh`) 
    VALUES ('','$name','$sdt','$diachi','$nhomkh')";
     $result = mysqli_query($conn, $sql);
    //  echo"$sql";
    if ($result) {
        header("location: ../view/danhsachkhachhang.php");
        echo'<script>';
        echo'alert("Tạo Mới Thành Công")';
        echo'</script>';
        
    }else {
        echo'<script>';
        echo'alert("Tạo Mới Thất Bại")';
        echo'</script>';
    }
}
?>