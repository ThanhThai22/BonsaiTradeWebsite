<?php
    $conn = new mysqli('localhost','root','','qlbc');

    // nv_id, lsp_id, sp_ten, sp_mota, sp_linkanh, sp_dongia
    //     $nv_id = $_POST['nv_id'];
    //     $lsp_id = $_POST['lsp_id'];
    //     $sp_ten = $_POST['sp_ten'];
    //     $sp_mota = $_POST['sp_mota'];
    //     $sp_linkanh = $_POST['sp_linkanh'];
    //     $sp_dongia = $_POST['sp_dongia'];
    $sql = "insert into sanphams(NV_ID, LSP_ID, SP_TEN, SP_MOTA, SP_LINKANH, SP_DONGIA) 
values ('".$_POST['nv_id']."', '".$_POST['lsp_id']."', '".$_POST['sp_ten']."', '".$_POST['sp_mota']."', '".$_POST['sp_linkanh']."', '".$_POST['sp_dongia']."')";

    if($conn->query($sql) == true){
        echo "Them san pham complete";
        header('Location: viewSP.php');
    }else{
        echo "Error: ".$sql."<br>".$conn->error;
    }

    $conn->close();
?>