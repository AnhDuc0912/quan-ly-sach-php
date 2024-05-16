<?php
include "../model/conn.php";
if (isset($_POST['signup'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $re_pass = $_POST['re_pass'];
    $name = $_POST['name'];
    $sdt = $_POST['sdt'];
    $address = $_POST['address'];

    if ($pass != $re_pass) {
        header("location: ../view/register.php");
    } else {
        
        $sql = "SELECT * FROM admin WHERE username = '$username'";
        $query = mysqli_query($conn,$sql);   
        $num_rows = mysqli_num_rows($query);
        if ($num_rows == 1) {
            header("location: ../view/register.php");
            echo "tên đăng nhập hoặc mật khẩu không đúng !";

        } else {
            $sql = "INSERT INTO `admin`(`username`, `password`, `name`, `sdt`, `diachi`) VALUES ('$user','$pass','$name','$sdt','$address')";
            $result  = mysqli_query($conn,$sql);
            if (!$result) {
                die("Adding record failed: " . mysqli_error()); 
                
            }else { 
                # code...
                header("location: ../view/login.php");
            }
        }
    }
}
?>