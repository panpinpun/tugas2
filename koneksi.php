<?php
    // deve
    // $kon = mysqli_connect("localhost", "root",'toor',"akademik");
    
    // production
    $kon = mysqli_connect("localhost", "id8194880_panpan",'panpan',"id8194880_pan");
    if (mysqli_connect_errno()) {
        echo "Koneksi database gagal : " .mysqli_connect_error();
    }
?>