<?php
include("connect.php");
$query = "SELECT * FROM USERS";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);

if($total != 0)
{
    while($result = mysqli_fetch_assoc($data))
    {
        echo $result["Name"]." ".$result["Number"]." ".$result["Gender"]." ".$result["Address"]." ".$result["Email"]."<br>";
    }
}
else
{
    echo "No records found";
}
<p><?php echo $message; ?>user_display.html</p>
?>