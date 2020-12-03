<?php
    include_once "mysql.php";
    $del = $_GET["id"];
    $sql = "DELETE FROM `mama_met` WHERE `id`='{$del}'";
    $query = $instance -> query($sql);
    if(!$query){
        print "Error";
    }else{
        header('Location: ../materialpage.php');
    }
?>