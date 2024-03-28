<?php
    $conn = new mysqli('localhost','root','','qlbc');
    $sql = "insert into giohangs(SP_ID, LOAISP_ID, SP_TEN, SP_DONGIA) 
values ('', '".$_POST['SP_ID']."', '".$_POST['LOAISP_ID']."', '".$_POST['SP_TEN']."', '".$_POST['SP_DONGIA']."')";

    if($conn->query($sql) == true){
        echo "Them san pham vao gio hang complete";
        header('Location: viewGH.php');
    }else{
        echo "Error: ".$sql."<br>".$conn->error;
    }

    $conn->close();
?>