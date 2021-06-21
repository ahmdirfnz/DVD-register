<?php
include "../db_connect.php"
?>

<html>

<head>
  <link rel="stylesheet" href="style.css">
  <title>Movie Register</title>
</head>

<body>
  <form action="./upload.php" method="POST" enctype="multipart/form-data">
    <div class="container">
      <h1>Register Movie Titles</h1>
      <p>Please fill in this form to register movies.</p>
      <hr>

      <label for="asin"><b>ASIN</b></label>
      <input type="text" placeholder="Enter ASIN" name="asin" size="30" required>

      <label for="title"><b>Title</b></label>
      <input type="text" placeholder="Enter Title" name="title" size="30" required>

      <label for="price"><b>Price</b></label>
      <input type="text" placeholder="Enter Price" name="price" required>

      <label for="title"><b>Select Image File:</b></label>
      <input type="file" name="image">

      <hr>
      <button type="submit" class="registerbtn" name="submit" value="Upload">Register</button>
    </div>
  </form>

  <table style="width:100%">
    <tr>
      <th>ASIN</th>
      <th>Title</th>
      <th>Price</th>
      <th>Image</th>
      <th>Delete/Insert</th>
    </tr>

    <?php
    $result = $connection->query("SELECT * FROM dvdtitles ORDER BY asin");
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
        echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'" width="170px" height="200px"/>';
        echo "</td>";
        echo "<td>";
        echo "<a href=\"delete.php?asin=" . $row['asin'] . "\"" . ">Delete</a>";
        echo "<a href=\"edit.php?asin=" . $row['asin'] . "\"" . ">/Edit</a>";
        echo "</td></tr>\n";
      }
    }
    $connection->close();
    ?>
  </table>
  <!-- <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" width="40%" height="40%" /> -->
</body>

</html>