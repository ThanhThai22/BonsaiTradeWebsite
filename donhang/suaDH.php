<?php
    $conn = new mysqli('localhost','root','','qlbc');
                        // DH_ID
                // TTDH_ID
                // KH_ID
                // DH_NGAYTAO
    $id = $_POST['id'];

$sql = "update donhang set DH_ID='".$_POST['DH_ID']."', TTDH_ID='".$_POST['TTDH_ID']."', KH_ID='".$_POST['KH_ID']."', 
DH_NGAYTAO='".$_POST['DH_NGAYTAO']."' where DH_ID='".$id."'";

    if($conn->query($sql) == true){
        echo "Sua don hang complete!";
        header('Location: viewDH.php');
    }else{
        echo "Error: ".$sql."<br>".$conn->error;
    }

    $conn->close();
?>