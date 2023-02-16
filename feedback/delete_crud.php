<?php

include 'config/database.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE from `feedback` WHERE id=$id";
    $querry = mysqli_query($conn, $sql);
}

header('location: view_crud.php');

mysqli_close($querry);


?>