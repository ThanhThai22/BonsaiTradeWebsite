<?php
    $conn = new mysqli('localhost','root','','qlbc');

//     <!-- San pham
//   nv_id, lsp_id, sp_ten, sp_mota, sp_linkanh, sp_dongia -->  
// if(isset($_POST['sbm'])){
    //     $nv_id = $_POST['nv_id'];
    //     $lsp_id = $_POST['lsp_id'];
    //     $sp_ten = $_POST['sp_ten'];
    //     $sp_mota = $_POST['sp_mota'];
    //     $sp_linkanh = $_POST['sp_linkanh'];
    //     $sp_dongia = $_POST['sp_dongia'];
    $id = $_POST['id'];

    $sql = "update sanphams set NV_ID='".$_POST['nv_id']."', LSP_ID='".$_POST['lsp_id']."', SP_TEN='".$_POST['sp_ten']."', SP_MOTA='".$_POST['sp_mota']."', 
    SP_LINKANH='".$_POST['sp_linkanh']."', SP_DONGIA='".$_POST['sp_dongia']."' where SP_ID='".$id."'";

    if($conn->query($sql) == true){
        echo "Sua san pham complete!";
        header('Location: viewSP.php');
    }else{
        echo "Error: ".$sql."<br>".$conn->error;
    }

    $conn->close();
?>