<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 3/13/17
 * Time: 4:38 PM
 */

//DB details
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '733securex';
$dbName = 'dyna101';

//Create connection and select DB
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Unable to connect database: " . $db->connect_error);
}