<?php

$conn = new mysqli('localhost:3655', 'adminaf', 'monitor2020', 'af');

if($conn->connect_error){
    echo $conn->connect_error;
}

$conn->set_charset('utf8');