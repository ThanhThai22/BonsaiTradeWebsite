<?php
    $conn = new mysqli('localhost','root','','qlbc');

                         // NV_ID
                        // CV_TEN
                        // NV_HOTEN
                        // NV_NGAYSINH
                        // NV_GIOITINH
                        // NV_QUEQUAN
                        // NV_SDT
                        // NV_EMAIL
                        // NV_CCCD
                        // NV_TAIKHOAN
                        // NV_MATKHAU
    $sql = "insert into nhanviens(NV_ID, CV_ID, NV_HOTEN, NV_NGAYSINH, NV_GIOITINH, NV_QUEQUAN, NV_SDT, NV_EMAIL, NV_CCCD, NV_TAIKHOAN, NV_MATKHAU) 
values ('', '".$_POST['CV_ID']."', '".$_POST['NV_HOTEN']."', '".$_POST['NV_NGAYSINH']."', '".$_POST['NV_GIOITINH']."', '".$_POST['NV_QUEQUAN']."', 
'".$_POST['NV_SDT']."', '".$_POST['NV_EMAIL']."', '".$_POST['NV_CCCD']."', '".$_POST['NV_TAIKHOAN']."', '".$_POST['NV_MATKHAU']."')";

    if($conn->query($sql) == true){
        echo "Them san pham complete";
        header('Location: viewNV.php');
    }else{
        echo "Error: ".$sql."<br>".$conn->error;
    }

    $conn->close();
?>