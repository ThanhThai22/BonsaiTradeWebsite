<?php
    $conn = new mysqli('localhost','root','','qlbc');

                        // LN_MA
                        // LN_TEN
                        // LN_NGAYNHAP
    $sql = "insert into lonhaps(LN_MA, LN_TEN, LN_NGAYNHAP) 
values ('', '".$_POST['LN_TEN']."', '".$_POST['LN_NGAYNHAP']."')";

    if($conn->query($sql) == true){
        echo "Them lo nhap complete";
        header('Location: viewLN.php');
    }else{
        echo "Error: ".$sql."<br>".$conn->error;
    }

    $conn->close();
?>