<?php
/**
 * Created by PhpStorm.
 * User: oracle
 * Date: 3/28/17
 * Time: 6:45 PM
 */

$transactionDate	="27-03-17 17:11";
$pieces	            =explode(" ", $transactionDate);
$date               ="$pieces[0]";

$myDateTime = DateTime::createFromFormat('d-m-y', $date);
$newDateString = $myDateTime->format('Y-m-d');
echo $newDateString;


$newTotalAmount		=preg_replace('/[^A-Za-z0-9.\-" "]/', '', 10000.00);
echo $newTotalAmount;