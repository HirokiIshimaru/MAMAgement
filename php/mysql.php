<?php
    $instance = new mysqli("localhost", "choi", "eccMyAdmin", "choi");
    if($instance -> connect_error){
        print "DB connect Error";
        exit;
    }
?>