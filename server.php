<?php 
include_once("conn.php");

$sql="select * from users";
	$result=mysqli_query($con,$sql);

	while ($row = mysql_fetch_assoc($result)) {
    $value[] = $row;
	}
}

//check empty data
if(empty($value))
	$results = "An error has occurred";
else
	$results = $value;

//return JSON array
exit(json_encode($results));
?>