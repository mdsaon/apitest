<?php
include_once("conn.php");
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$sql="insert into users (name,email) values ('".$name."','".$email."')";
	$r=mysqli_query($con,$sql);
	if($r)
	{
		print "Data Inserted";
	}
}
else
{
	$sql="select * from users";
	$r=mysqli_query($con,$sql);
	$json=array();
	while($row=mysqli_fetch_row($r))
	{
		$json []=$row;
	}
	echo json_encode($json);
	$fp = fopen('data.json', 'w');
    fwrite($fp, json_encode($json));
    fclose($fp);
}
?>
<form action="" method="post">
<p><label>Name</label>
    <input type="text" name="name" id="name" ">
  </label></p>
  
  <p><label>Email</label>
    <input type="text" name="email" id="name">
  </label></p>

  <input type="submit" name="submit" id="submit" value="Submit">
  </form>