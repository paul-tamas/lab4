<?php

$dbUsername="qTJJ25Uy3Z";
$dbPassword="m7Mk0TC0Eg";
$hostName="remotemysql.com";
$dbName="qTJJ25Uy3Z";
$dbPort=3306;
$con=mysqli_connect($hostName,$dbUsername,$dbPassword,$dbName);

if(!$con){
die("Connetion Error");
$string=" not connected!";
    echo ("<script>console.log('".$string."');</script>");
}else{$string="connected!";
    echo ("<script>console.log('".$string."');</script>");
}
?>