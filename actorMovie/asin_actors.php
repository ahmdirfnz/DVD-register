<?php
include "../db_connect.php"
?>

<html>

<head>
  <link rel="stylesheet" href="style.css">
  <title>ASIN AND ACTORS ID REGISTER</title>
</head>

<body>
  <form action="insert.php" method="POST">
    <div class="container">
      <h1>Register ASIN And Actors ID</h1>
      <p>Please fill in this form to register asin and actors id.</p>
      <hr>

      <label for="asin"><b>ASIN</b></label>
      <input type="text" placeholder="Enter ASIN" name="asin" size="20" required>

      <label for="actorID"><b>ACTOR ID</b></label>
      <input type="text" placeholder="Enter Actor ID" name="actorID" size="20" required>
      <hr>
      <button type="submit" class="registerbtn">Register</button>
    </div>
  </form>

  <table style="width:100%">
    <tr>
      <th>ASIN</th>
      <th>ACTOR ID</th>
      <th>Delete/Insert</th>
    </tr>

    <?php

    $result = $connection->query("SELECT * FROM actormoviership ORDER BY asin");
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_array()) {
        echo "<tr>";
        echo "<td>";
        echo $row["asin"];
        echo "</td>";
        echo "<td>";
        echo $row["actorID"];
        echo "</td>";
        echo "<td>";
        echo "<a href=\"delete.php?asin=" . $row['asin'] . "\"" .">Delete</a>";
        echo "<a href=\"edit.php?asin=" . $row['asin'] . "\"" .">Edit</a>";
        echo "</td></tr>\n";
      }
    }

    $connection->close();

    ?>

  </table>
</body>

</html>