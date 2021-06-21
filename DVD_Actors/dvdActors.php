<?php
include "../db_connect.php"
?>

<html>

<head>
  <link rel="stylesheet" href="style.css">
  <title>Movie Actors Register</title>
</head>

<body>
  <form action="insert.php" method="POST" method="GET">
    <div class="container">
      <h1>Register Movie Actors</h1>
      <p>Please fill in this form to register actors.</p>
      <hr>

      <label for="fName"><b>First Name</b></label>
      <input type="text" placeholder="Enter First Name" name="fName" size="20" required>

      <label for="lName"><b>Last Name</b></label>
      <input type="text" placeholder="Enter Last Name" name="lName" size="20" required>
      <hr>
      <button type="submit" class="registerbtn">Register</button>
    </div>
  </form>

  <table style="width:100%">
    <tr>
      <th>ACTOR ID</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Delete/Insert</th>
    </tr>

    <?php

    $result = $connection->query("SELECT * FROM dvdactors ORDER BY actorID");
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_array()) {
        echo "<tr>";
        echo "<td>";
        echo $row["actorID"];
        echo "</td>";
        echo "<td>";
        echo $row["fname"];
        echo "</td>";
        echo "<td>";
        echo $row["lname"];
        echo "</td>";
        echo "<td>";
        echo "<a href=\"delete.php?actorID=" . $row['actorID'] . "\"" .">Delete</a>";
        echo "<a href=\"edit.php?actorID=" . $row['actorID'] . "\"" .">/Edit</a>";
        echo "</td></tr>\n";
      }
    }

    $connection->close();

    ?>

  </table>
</body>

</html>