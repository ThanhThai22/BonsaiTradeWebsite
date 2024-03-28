<?php
    $conn = new mysqli('localhost','root','','qlbc');
                        // LN_MA
                        // LN_TEN
                        // LN_NGAYNHAP
    $id = $_POST['id'];

$sql = "update lonhaps set LN_TEN='".$_POST['LN_TEN']."', LN_NGAYNHAP='".$_POST['LN_NGAYNHAP']."' where LN_MA='".$id."'";

    if($conn->query($sql) == true){
        echo "Sua san pham complete!";
        header('Location: viewLN.php');
    }else{
        echo "Error: ".$sql."<br>".$conn->error;
    }

    $conn->close();
?>