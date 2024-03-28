<?php
    $conn = new mysqli('localhost','root','','qlbc');

    $ID = $_POST['id'];

    $sql = "delete from dichvus where DV_ID='".$ID."' ";

    if ($conn->query($sql) == TRUE) {
        header('Location: viewDV.php');
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    $conn->close();
?>