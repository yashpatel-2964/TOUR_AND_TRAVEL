<?php

if (isset($_POST['send']))
 {
$package_id = $_POST['package_id'];
$r_id = $_POST['r_id'];
$price=$_POST['price'];
$package_name=$_POST['package_name'];
$book_date=$_POST['book_date'];
$journey_date=$_POST['journey_date'];
$total_person=$_POST['total_person'];


$qry = "INSERT INTO `booking_table` (`book_id`, `r_id`, `package_id`, `book_date`, `journey_date`, `total_person`, `total_amount`) VALUES (NULL, '$r_id', '$package_id', '$book_date', '$journey_date', '$total_person', '$total_amount')";
echo $qry;

}

?>
