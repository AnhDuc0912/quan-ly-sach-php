<?php
include "../model/conn.php";
if (isset($_POST['uploadclick']) && $_POST['uploadclick']) {
    $name = $_POST['name'];
    $theloai = $_POST['theloai'];
    $ngaynhapkho = $_POST['ngaynhapkho'];
    $soluong = $_POST['soluong'];
    $gia = $_POST['gia'];
    // $img = $_POST['img'];
    $mota = $_POST['mota'];
    if (isset($_FILES['img'])) {
        $file = $_FILES['img'];
        $file_name = $file['name'];
        move_uploaded_file($file['tmp_name'],'../view/uploads/'.$file_name);
    }
    $sql = "INSERT INTO `sach`(`id`, `name`, `img`, `id_theloai`, `ngaynhapkho`, `mota`, `soluong`, `gia`) VALUES
    ('','$name','$file_name','$theloai','$ngaynhapkho','$mota','$soluong','$gia')";
     $result = mysqli_query($conn, $sql);
     echo"$sql";
    if ($result) {
        header("location: ../view/listsach.php");
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