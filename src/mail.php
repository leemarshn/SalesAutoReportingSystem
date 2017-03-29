<?php
/**
 * Created by PhpStorm.
 * User: oracle
 * Date: 3/28/17
 * Time: 2:29 PM
 */
include_once('../config/config.php');
//include_once ('importSales.php');

$to      = 'leendegwa@gmail.com';
$subject = '';
$message = '';
$headers = 'From: wDyna 101' . "\r\n" . 'X-Mailer: PHP/' . phpversion();
$monthlySales ="";
$todaySales ="";
$mons = array(1 => "Jan", 2 => "Feb", 3 => "March", 4 => "Apr", 5 => "May", 6 => "Jun", 7 => "Jul", 8 => "Aug", 9 => "Sep", 10 => "Oct", 11 => "Nov", 12 => "Dec");
$noEmailSentError ="Not able to send an email because the sales were not imported successfully";


//to get the sales for first day of the month and current day
//if ($qstring = '?status=succ') {
    $monthly_sales = "SELECT sum(totalAmount), MONTH(transactionDate) FROM sales 
              WHERE (transactionDate BETWEEN  DATE_FORMAT(NOW() ,'%Y-%m-01') AND NOW() )
              GROUP BY MONTH(transactionDate)";
    $result = $db->query($monthly_sales);

    if ($result->num_rows > 0) {
        // output data of each row
        $row = $result->fetch_assoc();
         $salesSum = $row["sum(totalAmount)"];
         $sumSales = number_format($salesSum, 2, '.', ',');
         $monthlySales = $row["MONTH(transactionDate)"];

            echo "The total sales for $mons[$monthlySales] is Ksh.$sumSales";

            //$total += $row["totalAmount"];
            //echo "This is the total amount $total;


            //$emailBody .= "This is the total amount $total";
       // }
        //mail("leendegwa@gmail.com", "Subject", $emailBody);

    //}

//to get the total sales of the day the sales have been imported to th system

  //  $day_imported = "SELECT sum(totalAmount), transactionDate FROM sales
          //  WHERE salesDatePosted = curdate()
            //GROUP BY transactionDate";
}else {
    echo $noEmailSentError;
}