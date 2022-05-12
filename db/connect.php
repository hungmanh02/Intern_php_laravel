<?php
    $host="localhost"; 
    $username="root";
    $password="";
    $dbname="form-contact";
    $conn=new mysqli($host,$username,$password,$dbname);
    if($conn->connect_error){
        die("kết nối không thành công". $conn->connect_error);

    }
    // echo "kết nối thành công";
?>
