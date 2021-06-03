<?php
include "../db_connect.php";

$asin = $_POST['asin'];
$actorID = $_POST['actorID'];

$sql = "INSERT INTO actormoviership(asin, actorID) " . 
        "VALUES ('$asin', '$actorID')";

$query = $connection->query($sql) or die ("Problem in storing the new asin and actor id"); 

if($query)
{
?>
<script language="JavaScript">document.location="asin_actors.php"</script>
<?php
}
?>