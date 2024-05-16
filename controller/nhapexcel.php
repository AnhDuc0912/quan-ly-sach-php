<?php
session_start();
include "../model/conn.php";
require '../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

if (isset($_POST['save_excel_data'])) {
    $fileName = $_FILES['import_file']['name'];
    $file_ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowed_ext = ['xls', 'csv', 'xlsx'];

    if (in_array($file_ext, $allowed_ext)) {
        $inputFileNamePath = $_FILES['import_file']['tmp_name'];
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileNamePath);
        $data = $spreadsheet->getActiveSheet()->toArray();

        $count = "0";
        foreach ($data as $row) {
            if ($count > 0) {
                $id = $row['0'];
                $name = $row['1'];
                $img = $row['2'];
                $id_theloai = $row['3'];
                $ngaynhapkho = $row['4'];
                $mota = $row['5'];
                $soluong = $row['6'];
                $gia = $row['7'];
                $tacgia = $row['8'];

                // echo $id; echo $name; echo $img; echo $id_theloai; echo $ngaynhapkho; echo $mota; echo $soluong; echo $gia; echo $tacgia;

                $sql = "INSERT INTO `sach`(`id`, `name`, `img`, `id_theloai`, `ngaynhapkho`, `mota`, `soluong`, `gia`, `tacgia`) 
                VALUES ('$id','$name','$img','$id_theloai','$ngaynhapkho','$mota','$soluong','$gia','$tacgia')";
                $result = mysqli_query($conn, $sql);
                $msg = true;
            } else {
                $count = "1";
            }
        }

            if (isset($msg)) {
                $_SESSION['message'] = "Successfully Imported";
                header('Location: ../view/listsach.php');
                exit(0);
            } else {
                $_SESSION['message'] = "Not Imported";
                header('Location: ../view/listsach.php');
                exit(0);
            }
        } else {
            $_SESSION['message'] = "Invalid File";
            header('Location: ../view/listsach.php');
            exit(0);
    }
}
?>