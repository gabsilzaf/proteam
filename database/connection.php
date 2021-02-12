<?php

/*
Host: ec2-35-168-77-215.compute-1.amazonaws.com
Database: dap6j66mdoftpp
User: amdfaewlauirjq
Port: 5432
Password: aff37da0a4cb2bc99f86c1d2fc4c1abd346bd50aad516213a664b08bbd669e12
URI: postgres://amdfaewlauirjq:aff37da0a4cb2bc99f86c1d2fc4c1abd346bd50aad516213a664b08bbd669e12@ec2-35-168-77-215.compute-1.amazonaws.com:5432/dap6j66mdoftpp

-------

$dbhost = "ec2-35-168-77-215.compute-1.amazonaws.com";
$dbuser = "amdfaewlauirjq";
$dbpass = "aff37da0a4cb2bc99f86c1d2fc4c1abd346bd50aad516213a664b08bbd669e12";
$db = "dap6j66mdoftpp";

*/
    
$conn = pg_connect("dbname=dap6j66mdoftpp host=ec2-35-168-77-215.compute-1.amazonaws.com port=5432 user=amdfaewlauirjq password=aff37da0a4cb2bc99f86c1d2fc4c1abd346bd50aad516213a664b08bbd669e12 sslmode=require");
        
if(!$conn){
    print("Connection failed: "  . $conn->connect_error);
}

?>