<?php 
include "../model/conn.php";
if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $sql = "SELECT * FROM sach WHERE name like '%$search%'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){

        foreach ($result as $items) {
            echo '';
        }
    }else {
        echo '
        <tr>
        <td colspan="4">No Record Found</td>
        </tr>
        ';
    }
}
?>