<?php
include_once 'koneksi.php';
$id_barang = $_GET['id_barang'];
$sql = "DELETE FROM data_barang WHERE id_barang = '{$id_barang}'";
$result = mysqli_query($conn, $sql);
header('location: index.php');
?>
