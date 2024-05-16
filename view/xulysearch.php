<?php 
include "../model/conn.php";
$searchbook = $_POST['searchbook'];
$sql = "SELECT * FROM sach WHERE sach.name LIKE '%$searchbook%'";
$query = mysqli_query($conn, $sql);
$data = '';
$data .= '<div class="list-group">';
if (mysqli_num_rows($query) > 0) {
    while ($row = mysqli_fetch_assoc($query)) {
        $data .= '
        <a href="#" class="list-group-item list-group-item-action" data-id="'.$row['id'].'">'.$row['name'].'</a>
        ';
    }
} else {
    $data .= '
        <a href="#" class="list-group-item list-group-item-action disabled"><h9>Không có bản ghi.</h9></a>
        ';
}
$data .= '</div>';

echo $data;
?>
