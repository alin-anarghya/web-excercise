<?php
include 'koneksi.php';  

$sql = "SELECT tahun, jumlahCust FROM performance ORDER BY tahun ASC";
$result = $conn->query($sql);

$tahun = [];
$jumlah = [];

while($row = $result->fetch_assoc()) {
    $tahun[] = $row['tahun'];
    $jumlah[] = $row['jumlahCust'];
}

echo json_encode([
    'labels' => $tahun,
    'data' => $jumlah
]);
?>