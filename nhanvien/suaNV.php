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
    $id = $_POST['id'];

$sql = "update nhanviens set CV_ID='".$_POST['CV_ID']."', NV_HOTEN='".$_POST['NV_HOTEN']."', 
NV_NGAYSINH='".$_POST['NV_NGAYSINH']."', NV_GIOITINH='".$_POST['NV_GIOITINH']."', 
NV_QUEQUAN='".$_POST['NV_QUEQUAN']."', NV_SDT='".$_POST['NV_SDT']."', NV_EMAIL='".$_POST['NV_EMAIL']."', NV_CCCD='".$_POST['NV_CCCD']."',
NV_TAIKHOAN='".$_POST['NV_TAIKHOAN']."', NV_MATKHAU='".$_POST['NV_MATKHAU']."' where NV_ID='".$id."'";

    if($conn->query($sql) == true){
        echo "Sua san pham complete!";
        header('Location: viewNV.php');
    }else{
        echo "Error: ".$sql."<br>".$conn->error;
    }

    $conn->close();
?>