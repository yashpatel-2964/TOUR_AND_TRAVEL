<?php
 
$conn = mysqli_connect("localhost","root","","tour");   
 
?>
<?php


$package_id = $_REQUEST['package_id'];



$qry1 = "select * from package_d_table where package_id =".$package_id;
$result = mysqli_query($conn, $qry1);
while($row = mysqli_fetch_array($result))

echo"<p>".$row[1]."</p>

     <img src =".$row[3].">

"


?>