<?php
include "../model/conn.php";
if (isset($_GET['id']) && $_GET['id']) {
    $id = $_GET['id'];
    $name = $_POST['namesach'];
    $theloai = $_POST['theloai'];
    // $img = $_POST['img'];
    $ngaynhapkho = $_POST['ngaynhapkho'];
    $mota = $_POST['mota'];
    $soluong = $_POST['soluong'];
    $giaban = $_POST['giaban'];
    if (isset($_FILES['img'])) {
        $file = $_FILES['img'];
        $file_name = $file['name'];
        move_uploaded_file($file['tmp_name'],'../view/uploads/'.$file_name);
    }
    $sql = "UPDATE `sach` SET `name`='$name',
    `img`='$file_name',
    `id_theloai`='$theloai',
    `ngaynhapkho`='$ngaynhapkho',
    `mota`='$mota',
    `soluong`='$soluong',
    `gia`='$giaban' WHERE `id`='$id'";
    //  echo $sql;
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo("Error description: " .mysqli_error());
    }else {
        header("location: ../view/listsach.php");
    }
    
}else {
    header("location: ../view/listsach.php");
}
?>