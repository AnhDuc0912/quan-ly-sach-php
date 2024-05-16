<?php 
include "../model/conn.php";
$name = $_POST['name'];
$sql = "SELECT * FROM sach Where sach.name like '%$name%'";
$result = mysqli_query($conn, $sql);
$data="";
while ($row = mysqli_fetch_assoc($result)) {
    $data.=' <div class="form-group">
    <div class="form-group col-md-12">
        <label for="">Tên Sách</label>
        <input type="text" class="form-control" readonly value="'.$row['name'].'">
    </div>
</div>';
}
echo $data;
?>