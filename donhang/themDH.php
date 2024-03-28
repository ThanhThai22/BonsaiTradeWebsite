<?php
    $conn = new mysqli('localhost','root','','qlbc');

                // DH_ID
                // TTDH_ID
                // KH_ID
                // DH_NGAYTAO
    $sql = "insert into donhang(DH_ID, TTDH_ID, KH_ID, DH_NGAYTAO) 
values ('', '".$_POST['TTDH_ID']."', '".$_POST['KH_ID']."', '".$_POST['DH_NGAYTAO']."')";

    if($conn->query($sql) == true){
        echo "Them DON HANG complete";
        header('Location: viewDH.php');
    }else{
        echo "Error: ".$sql."<br>".$conn->error;
    }

    $conn->close();
?>