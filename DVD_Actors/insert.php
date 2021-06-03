<?php
include "../db_connect.php";

$fName = $_POST['fName'];
$lName = $_POST['lName'];

$sql = "INSERT INTO dvdactors(fname, lname) " . 
        "VALUES ('$fName', '$lName')";

$query = $connection->query($sql) or die ("Problem in storing the new student"); 

if($query)
{
?>
<script language="JavaScript">document.location="dvdActors.php"</script>
<?php
}
?>