<?php
    $conn = new mysqli('localhost','root','','qlbc');
                        // LN_MA
                        // LN_TEN
                        // LN_NGAYNHAP

$sql = "update dichvus set DV_TEN='".$_POST['DV_TEN']."', DV_MOTA='".$_POST['DV_MOTA']."', 
DV_DONGIA='".$_POST['DV_DONGIA']."' where DV_ID='".$DV_ID."'";

    if($conn->query($sql) == true){
        echo "Sua san pham complete!";
        header('Location: viewDV.php');
    }else{
        echo "Error: ".$sql."<br>".$conn->error;
    }

    $conn->close();
?>