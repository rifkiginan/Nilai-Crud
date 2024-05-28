<?php
if (isset($_POST['simpan'])) {
    include_once('config.php');
    $id = $_POST['id'];
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $telepon = $_POST['telepon'];
    $foto = $_POST['foto'];

    $sql = "INSERT INTO guru SET nip='$nip', nama='$nama', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', telepon='$telepon', foto='$foto'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location: index.php?m=guru&s=view');
    } else {
        include "index.php";
        echo '<script language="JavaScript">';
            echo 'alert("Data Gagal Ditambahkan.")';
        echo '</script>';
    }
}