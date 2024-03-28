<?php
    $conn = new mysqli('localhost','root','','qlbc');

                        // LN_MA
                        // LN_TEN
                        // LN_NGAYNHAP
    $sql = "insert into loxuats(LX_MA, LX_TEN, LX_NGAYXUAT) 
values ('', '".$_POST['LX_TEN']."', '".$_POST['LX_NGAYXUAT']."')";

    if($conn->query($sql) == true){
        echo "Them lo xuat complete";
        header('Location: viewLX.php');
    }else{
        echo "Error: ".$sql."<br>".$conn->error;
    }

    $conn->close();
?>