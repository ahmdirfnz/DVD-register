<?php
include '../db_connect.php';
$actorID = $_GET['actorID'];
$sql = "SELECT * FROM dvdactors WHERE actorID = $actorID";
$query = $connection->query ($sql);
if ($row = $query->fetch_array())
{
	$actorID = $row['actorID'];
	$fname = $row['fname'];
    $lname = $row['lname'];
}
?>

<html>
<body>
<center>
<h1>Edit Form</h1>
<form method="post"
action="update.php?asin=<?php echo $actorID ?>">
<br>
<table>
<tr>
<td>Actor ID</td><td>:</td>
<td><input type="text" name="actorID"
value="<?php echo $actorID?>" size='30'>&nbsp;</td>
</tr>
<tr>
<td>First Name</td>
<td>:</td>
<td><input type="text" name="fname"
value="<?php echo $fname?>" size='30'>&nbsp;</td>
</tr>
<tr>
<td>Last Name</td>
<td>:</td>
<td><input type="text" name="lname"
value="<?php echo $lname?>" size='30'>&nbsp;</td>
</tr>
<tr>
<td></td><td></td>
<td><input type="submit" name="submit" value="Submit"/></td>
</tr>
</table>
</form>
<center>
</body>
</html>