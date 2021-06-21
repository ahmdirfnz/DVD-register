<?php
include '../db_connect.php';
$asin = $_GET['asin'];
$sql = "SELECT * FROM dvdtitles WHERE asin = '$asin'";
$query = $connection->query ($sql);
if ($row = $query->fetch_array())
{
	$asin = $row['asin'];
	$title = $row['title'];
    $price = $row['price'];
    // $image = $row['title'];

}
?>

<html>
<body>
<h1>Update Database</h1>
<form method="post"
action="update.php?asin=<?php echo $asin ?>" enctype="multipart/form-data">
<br>
<table>
<tr>
<td>Asin</td><td>:</td>
<td><input type="text" name="asin"
value="<?php echo $asin?>" size='30'>&nbsp;</td>
</tr>
<tr>
<td>Title</td>
<td>:</td>
<td><input type="text" name="title"
value="<?php echo $title?>" size='30'>&nbsp;</td>
</tr>
<tr>
<td>Price</td>
<td>:</td>
<td><input type="text" name="price"
value="<?php echo $price?>" size='30'>&nbsp;</td>
</tr>
<tr>
<td>Image</td>
<td>:</td>
<td><label for="title"><b>Select Image File:</b></label>
      <input type="file" name="image"></td>
</tr>
<tr>
<td></td><td></td>
<td><input type="submit" name="submit" value="Submit"/></td>
</tr>
</table>
<form>
</body>
</html>