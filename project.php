<?php
    $conn = mysqli_connect(
        <35.232.72.220>, 
        <root>, 
        'Cupcake12!', 
        'Connect');
    if(!$conn){
        echo 'Connection error: ' . mysqli_connect_error();
    }
    $sql = $_GET["query"];
    $result = mysqli_query($conn, $sql);
    $connect = mysqli_fetch_all($result, MYSQLI_ASSOC);
    print_r($connect);
?>