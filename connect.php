<?php

    function cnt(){
        $host = 'localhost';
        $username ='root';
        $pass = '';
        $dbName = 'n_t_b_linh';
        $connect = mysqli_connect($host, $username, $pass, $dbName);
        return $connect;
    }
    function query($sql){
        $connect = cnt();
        $result = mysqli_query($connect, $sql);
        return $result;
    }

    function execute($sql){
        $connect = cnt();
        mysqli_query($connect,$sql);
    }
?>