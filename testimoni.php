<?php
include 'koneksi.php';
$query = "SELECT * FROM ratings ORDER BY idRatings DESC LIMIT 10";
$result = mysqli_query($conn, $query);
$data_testi = [];
while($row = mysqli_fetch_assoc($result)) {
    $data_testi[] = $row;
}
?>