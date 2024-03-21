<?php 
    include 'database.php';

    $id = $_POST['id'];

    $a = new database();
    $a->delete('person_info',"id='$id'");
    if ($a == true) {
        header('location:index.php');
    }
?>