<?php

$connect = new mysqli("localhost", "root", "", "futsal_db");

if ($connect) {
    
} else {
    echo "Connection Failed";
    exit();
}