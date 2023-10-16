<?php
include("connect.php");
$query = "SELECT * FROM USERS";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);
echo $total;
//hi
?>