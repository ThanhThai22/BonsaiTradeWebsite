<?php
    $conn = new mysqli('localhost','root','','qlbc');

    $ID = $_POST['id'];

    $sql = "delete from sanphams where SP_ID = '".$ID."' ";

    if ($conn->query($sql) == TRUE) {
        header('Location: viewSP.php');
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      

    header('Location: viewSP.php');
    $conn->close();
?>