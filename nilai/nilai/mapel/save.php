<?php
if (isset($_POST['simpan'])) {
    include_once('config.php');
    $mapel = $_POST['mapel'];
    $sks = $_POST['sks'];

    $sql = "INSERT INTO mapel SET mapel='$mapel', sks='$sks' ";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location: index.php?m=mapel&s=view');
    } else {
        include "index.php";
        echo '<script language="JavaScript">';
            echo 'alert("Data Gagal Ditambahkan.")';
        echo '</script>';
    }
}