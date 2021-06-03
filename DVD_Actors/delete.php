<?php
include "../db_connect.php";

$actorID = $_GET['actorID'];
$sql = "DELETE FROM dvdactors WHERE actorID = $actorID";

$query = $connection->query($sql)or
die ("Problem in deleting the student data"); if($query)
{
?>
<script language="JavaScript">document.location="dvdActors.php"</script>
<?php
}
?>
