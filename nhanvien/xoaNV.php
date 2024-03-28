<?php
    $conn = new mysqli('localhost','root','','qlbc');

    $ID = $_POST['id'];

    $sql = "delete from nhanviens where NV_ID='".$ID."' ";

    if ($conn->query($sql) == TRUE) {
        header('Location: viewNV.php');
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      

    header('Location: viewNV.php');
    $conn->close();
?>