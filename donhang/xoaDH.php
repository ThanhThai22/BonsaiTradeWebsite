<?php
    $conn = new mysqli('localhost','root','','qlbc');

    $ID = $_POST['id'];

    $sql = "delete from donhang where DH_ID='".$ID."' ";

    if ($conn->query($sql) == TRUE) {
        header('Location: viewDH.php');
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    $conn->close();
?>