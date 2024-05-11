<?php
if (isset($_POST['update'])) {
    include_once('config.php');
    $id = $_POST['id'];
    $subject = $_POST['subject'];
    $hour = $_POST['hour'];

    $sql = "UPDATE mapel SET subject='$subject', hour='$hour'";
    $result = mysqli_query($con, $sql);


    if ($result) {
        header('location: index.php?m=mapel&s=view');
    } else {
        include "index.php?m=mapel&s=view";
        echo '<script language="JavaScript">';
            echo 'alert("Data Gagal Ditambahkan.")';
        echo '</script>';
    }
}