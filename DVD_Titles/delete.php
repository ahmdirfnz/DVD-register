<?php
include "../db_connect.php";

$asin= $_GET['asin'];
$sql = "DELETE FROM dvdtitles WHERE asin = '$asin'";

$query = $connection->query($sql) or
die ("Problem in deleting the student data"); 
if($query)
{
?>
<script language="JavaScript">document.location="dvdTitles.php"</script>
<?php
}
?>
