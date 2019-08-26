<?php

$db_host = "dbsosmed-widiani.cf4kbdfuw9lt.us-east-2.rds.amazonaws.com";
$db_user = "widi";
$db_pass = "jaringan";
$db_name = "dbsosmedwidiani";

try {    
    //create PDO connection 
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch(PDOException $e) {
    //show error
    die("Terjadi masalah: " . $e->getMessage());
}
