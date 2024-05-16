<?php
session_start();
include "../model/conn.php";
$username = $_POST['user'];
$password = $_POST['pass'];

$sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
$query = mysqli_query($conn,$sql);
$num_rows = mysqli_num_rows($query);
if ($num_rows==0) {
    
    
    echo'<script>';
    echo'alert("Tài Khoản Hoặc Mật Khẩu Không Chính Xác")';
    
    echo'</script>';
    
}else{
    //tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
    $_SESSION['login']['username'] = $username;
    
    header("location: ../view/index.php");
}
?>