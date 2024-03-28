<?php
    $conn = new mysqli('localhost','root','','qlbc');
          
    $id = $_POST['id'];

$sql = "update giohangs set SP_ID='".$_POST['SP_ID']."', LOAISP_ID='".$_POST['LOAISP_ID']."', 
SP_TEN='".$_POST['SP_TEN']."', SP_DONGIA='".$_POST['SP_DONGIA']."' where GH_ID='".$id."'";

    if($conn->query($sql) == true){
        echo "Sua gio hang complete!";
        header('Location: viewDH.php');
    }else{
        echo "Error: ".$sql."<br>".$conn->error;
    }

    $conn->close();
?>