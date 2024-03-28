<?php
    $conn = new mysqli('localhost','root','','qlbc');

    $ID = $_POST['id'];

    $sql = "delete from giohangs where GH_ID='".$ID."' ";

    if ($conn->query($sql) == TRUE) {
        header('Location: viewGH.php');
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    $conn->close();
?>