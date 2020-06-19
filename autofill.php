<?php
include 'koneksi.php';
$id_publisher = $_GET['id_publisher'];
$query = mysqli_query($koneksi, "select * from publisher where id_publisher='$id_publisher'");
$publisher = mysqli_fetch_array($query);
$data = array(
    'nama' => $publisher['nama_publisher']);
echo json_encode($data);