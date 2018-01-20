<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "collegebooth";

$connection_string = mysqli_connect($host,$user,$password,$database);

    function formatDate($date){
    return date("g:i a",strtotime($date));
  }
 ?>
