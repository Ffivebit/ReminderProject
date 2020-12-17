<?php

    if(!defined("APP")) die();
    
    define("DB_HOSTNAME", "localhost");
    define("DB_USERNAME", "root");
    define("DB_PASSWORD", "");
    define("DB_DATABASE", "scheduler");

    $db = new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if ($db === false){
    die("Error: connection error." . mysql_connect_error());
}
        
?>