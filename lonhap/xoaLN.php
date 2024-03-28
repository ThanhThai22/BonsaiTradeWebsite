<?php
    $conn = new mysqli('localhost','root','','qlbc');

    $ID = $_POST['id'];

    $sql = "delete from lonhaps where LN_MA='".$ID."' ";

    if ($conn->query($sql) == TRUE) {
        header('Location: viewLN.php');
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    $conn->close();
?>