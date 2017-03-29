<?php
/**
 * Created by PhpStorm.
 * User: LeeN
 * Date: 3/25/17
 * Time: 9:06 PM
 */

//load the database configuration file
include '../config/config.php';

//global variables


//Checking variables passed


   /*
    $drn                =$_POST['drn'];
    $outlet             =$_POST['outlet'];
    $post_at            = $_POST["search"]["post_at"];
    $post_at_to_date    =$_POST["search"]["post_at_to_date"];
    $page               =$_POST['page'];

    echo $post_at_to_date;
   */
$sql = "SELECT DRN, quantitySold, totalAmount FROM sales where DRN ='DK043050'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["DRN"]. " - Name: " . $row["quantitySold"]. " " . $row["totalAmount"]. "<br>";

        $total += $row["totalAmount"];
        echo "This is the total amount $total";


        $emailBody .= "This is the total amount $total";
    }
     mail("leendegwa@gmail.com", "Subject", $emailBody);

} else {
    echo "0 results";
}
$conn->close();