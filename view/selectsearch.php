<?php
include "../model/conn.php";
$select_data = $_POST['select_data'];
$sql = "SELECT * FROM sach where sach.name = '$select_data'";
$query = mysqli_query($conn, $sql);
$data = '';

if (mysqli_num_rows($query) > 0) {
    while ($row = mysqli_fetch_assoc($query)) {
        $data .= '
        <div id="formdata">
            <div class="form-group">
                <div class="form-group col-md-12">
                    <label for="">Tên Sách</label>
                    <input class="form-control" readonly id="tensach" value="'.$row['name'].'">
                </div>
            </div>


            <div class="form-group">
                <div class="form-group col-md-12">
                    <label for="">Giá Bán</label>

                    <input class="form-control" readonly id="giaban" value="'.$row['giaban'].'">

                </div>
            </div>
        </div>
        ';
    }
}
$data .= '</div>';

echo $data;
?>