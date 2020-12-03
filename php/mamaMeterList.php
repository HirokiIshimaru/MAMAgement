<?php
    include_once "mysql.php";
    $instance -> set_charset("utf8");
    if(isset($_POST["upLoad"])){
        $zairyo = $_POST["item"];
        $years = $_POST["year"];
        $month = $_POST["month"];
        $day = $_POST["day"];
        $upYears = date("Y");
        $upMonth = date("m");
        $upDay = date("d");
        $userName= "1";
        $sql = "INSERT INTO mama_met(userName,material,years,month,day,upYear,upMonth,upDay) VALUES('{$userName}','{$zairyo}','{$years}','{$month}','{$day}','{$upYears}','{$upMonth}','[$upDay]')";
        if(!$instance->query($sql)){
            print "SQL Query Error";
            exit;
        }else{
            // header("file:///Users/s2180219/Desktop/mama/materialpage.html");
        }
        // $instance -> close();
    }else{
        print_r("asd");
    }



?>