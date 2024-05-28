<?php
include_once('config.php');
$id = $_GET['id'];
$sql = "DELETE from guru WHERE id='$id'";
$result =  mysqli_query($con, $sql);
if ($result) {
    header('location: index.php?m=guru&s=view');
} else {
    include "index.php?m=guru&s=view";
    echo '<script language="JavaScript">';
        echo 'alert("Data Gagal Ditambahkan.")';
    echo '</script>';
}