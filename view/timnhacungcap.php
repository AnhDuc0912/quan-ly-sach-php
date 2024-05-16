<?php
include "../model/conn.php";
$evclickncc = $_POST['evclickncc'];
$sql = "SELECT * FROM nhacungcap where nhacungcap.name = '$evclickncc'";
$query = mysqli_query($conn, $sql);
$data = '';

if (mysqli_num_rows($query) > 0) {
    while ($row = mysqli_fetch_assoc($query)) {
        $data .= '
<div id="formdata">
        <div class="form-group">
            <div class="form-group col-md-12">
                <label for="inputAddress2">Tên Nhà Cung Cấp</label>
                <input type="text" class="form-control" readonly id="tenncc" name="tenncc" value="'.$row['name'].'">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" readonly id="address" name="address" value="'.$row['diachi'].'">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">SĐT</label>
                <input type="number" class="form-control" readonly id="sdt" name="sdt" value="'.$row['phone'].'">
            </div>
        </div>
        <div class="form-group">
            <div class="form-group col-md-12">
                <label for="inputAddress">Mô Tả</label>
                <textarea class="form-control" id="mota" readonly name="mota"
                    style="height: 100px">'.$row['description'].'</textarea>
            </div>
        </div>
    </div>
        ';
    }
}

echo $data;
?>