<?php
    include "../db_connect.php";
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
    <title>Movies Listing</title>
</head>
<body>
<h1>Movies titles</h1>
<table id="movies">
  <tr>
    <th>ASIN</th>
    <th>Title</th>
    <th>Price</th>
    <th>Actors</th>
    <th>Poster</th>
  </tr>
<?php

$result = $connection->query("SELECT 
                                dvdtitles.asin,
                                dvdtitles.title,
                                dvdtitles.price,
                                dvdtitles.image,
                                GROUP_CONCAT(CONCAT_WS(' ',fname , lname) SEPARATOR ' , ')
                              FROM dvdtitles
                              JOIN actormoviership
                                ON dvdtitles.asin = actormoviership.asin
                              JOIN dvdactors
                                ON dvdactors.actorID = actormoviership.actorID
                              GROUP BY dvdtitles.asin");
if ($result->num_rows > 0) {
  while ($row = $result->fetch_array()) {
    echo "<tr>";
    echo "<td>";
    echo $row["asin"];
    echo "</td>";
    echo "<td>";
    echo $row["title"];
    echo "</td>";
    echo "<td>";
    echo $row["price"];
    echo "</td>";
    echo "<td>";
    echo $row["GROUP_CONCAT(CONCAT_WS(' ',fname , lname) SEPARATOR ' , ')"];
    echo "</td>";
    echo "<td>";
    echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'" width="170px" height="200px"/>';
    echo "</td>";
    echo "</tr>\n";
  }
}

$connection->close();

?>
  
</table>

</body>
</html>