<!-- <?php
include "../db_connect.php";

$asin = $_POST['asin'];
$title = $_POST['title'];
$price = $_POST['price'];

$sql = "INSERT INTO dvdtitles(asin, title, price) " . 
        "VALUES ('$asin', '$title', $price)";

$query = $connection->query($sql) or die ("Problem in storing the new student"); 

if($query)
{
?>
<script language="JavaScript">document.location="dvdTitles.php"</script>
<?php
}
?> -->