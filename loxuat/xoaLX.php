<?php
    $conn = new mysqli('localhost','root','','qlbc');

    $ID = $_POST['id'];

    $sql = "delete from loxuats where LX_MA='".$ID."' ";

    if ($conn->query($sql) == TRUE) {
        header('Location: viewLX.php');
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    $conn->close();
?>