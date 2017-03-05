<?php
  include 'db_connection.php';

  $conn = OpenCon();
  echo "connect Successfully" . "<br>";

  $sql = "SELECT id, name, url FROM artists";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - URL:" . $row["url"]. "<br>";
    }
  } else {
    echo "0 results";
  }

  CloseCon($conn);
?>
