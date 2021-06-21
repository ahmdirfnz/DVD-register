<?php
include '../db_connect.php';

$actorID = $_POST['actorID'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$sql = "UPDATE dvdactors SET fname = '$fname', lname = '$lname'  WHERE actorID = $actorID";

if ($connection->query($sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $connection->error;
}

$connection->close();

header( "refresh:1;url=dvdActors.php" );

?>