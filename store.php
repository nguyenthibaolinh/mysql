<?php 
    include ('connect.php');
    $maKhoa = filter_input(INPUT_POST, 'maKhoa');
    $tenKhoa = filter_input(INPUT_POST, 'tenKhoa');
    $sql = "insert into khoa values ('$maKhoa', '$tenKhoa')";
    execute($sql);
    // redirect
    header("location: ./index.php");
?>