<?php
require_once('../../koneksi.php');
$id = $_GET ['id'];
$query="DELETE FROM barang WHERE id='$id' ";

    if ($koneksi -> query ($query)===TRUE){
        header('location:index.php');
    }else {
        echo "Error: " . $query . "<br>" . $koneksi->error;
    }
?>