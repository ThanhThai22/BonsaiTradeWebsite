<?php
    $conn = new mysqli('localhost','root','','qlbc');

                        // LN_MA
                        // LN_TEN
                        // LN_NGAYNHAP
    $sql = "insert into dichvus(DV_ID, DV_TEN, DV_MOTA, DV_DONGIA) 
values ('', '".$_POST['DV_TEN']."', '".$_POST['DV_MOTA']."', '".$_POST['DV_DONGIA']."')";

    if($conn->query($sql) == true){
        echo "Them DICH VU complete";
        header('Location: viewDV.php');
    }else{
        echo "Error: ".$sql."<br>".$conn->error;
    }

    $conn->close();
?>