<?php
include "../model/conn.php";
if(isset($_POST['themmoincc'])){
    $name = $_POST['tenncc'];
    $dc = $_POST['dcncc'];
    $sdt = $_POST['sdtncc'];
    $motancc = $_POST['motancc'];

    $sql ="INSERT INTO `nhacungcap`(`id`, `name`, `diachi`, `phone`, `description`) VALUES ('','$name','$dc','$sdt','$motancc')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("location: ../view/nhacungcap.php");
    }
}
?>