<?php
    $conn = new mysqli('localhost','root','','qlbc');
                        // LN_MA
                        // LN_TEN
                        // LN_NGAYNHAP
    $id = $_POST['id'];

$sql = "update loxuats set LX_TEN='".$_POST['LX_TEN']."', LX_NGAYXUAT='".$_POST['LX_NGAYXUAT']."' where LX_MA='".$id."'";

    if($conn->query($sql) == true){
        echo "Sua lo xuat complete!";
        header('Location: viewLX.php');
    }else{
        echo "Error: ".$sql."<br>".$conn->error;
    }

    $conn->close();
?>