<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THÊM NHÂN VIÊN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>

<?php
    $conn = new mysqli('localhost','root','','qlbc2');
    // $sql_nv = "select * from nhanviens";
    $sql_cv = "select * from chucvus";
    // $query_nv = $conn->query($sql_nv);
    $query_cv = $conn->query($sql_cv);

    // if(isset($_POST['sbm'])){
    //     $nv_id = $_POST['nv_id'];
    //     $lsp_id = $_POST['lsp_id'];
    //     $sp_ten = $_POST['sp_ten'];
    //     $sp_mota = $_POST['sp_mota'];
    //     $sp_linkanh = $_POST['sp_linkanh'];
    //     $sp_dongia = $_POST['sp_dongia'];

    //     $sql = "insert into sanphams(SP_ID, NV_ID, LSP_ID, SP_TEN, SP_MOTA, SP_LINKANH, SP_DONGIA) 
    //             values('', $nv_id, $lsp_id, $sp_ten, $sp_mota, $sp_linkanh, $sp_dongia)";
        
    //     $query = $conn->query($sql);
    //     header('Location: viewSP.php');
    // }
  ?>

<body>
    <!-- San pham
  nv_id, lsp_id, sp_ten, sp_mota, sp_linkanh, sp_dongia -->
    <div class="container-fluid d-flex">
        <div class="col-5" style="margin-left: auto; margin-right: auto;">
        <strong><b>THÊM NHÂN VIÊN</b></strong>
            <form class="mt-3" action="themNV.php" method="post" enctype="multipart/form-data">
                <!-- // NV_ID
                        // CV_TEN
                        // NV_HOTEN
                        // NV_NGAYSINH
                        // NV_GIOITINH
                        // NV_QUEQUAN
                        // NV_SDT
                        // NV_EMAIL
                        // NV_CCCD
                        // NV_TAIKHOAN
                        // NV_MATKHAU -->
            <div class="col-7">
                <label for="" class="col-form-label">CHỨC VỤ</label>
                <!-- <input type="text" class="form-control" name=""> -->
                <select name="CV_ID" class="form-control mb-3">
                    <?php
                        while($rowsp = mysqli_fetch_assoc($query_cv)){?>
                        <option value="<?php echo $rowsp['CV_ID']; ?>"> <?php echo $rowsp['CV_TEN']; ?> </option>
                        <?php } ?>
                </select>
            </div>
            <div class="col-7">
                <label for="" class="">TÊN NHÂN VIÊN</label>
                <!-- <input type="text" class="form-control" name=""> -->
                <input type="text" name="NV_HOTEN" id="NV_HOTEN" class="form-control" required>
            </div>
            <div class="col-7">
                <label for="" class="col-form-label">NGÀY SINH</label>
                <input type="text" class="form-control" name="NV_NGAYSINH" required>
            </div>
            <div class="col-7">
                <label for="" class="col-form-label">GIỚI TÍNH</label>
                <input type="text" class="form-control" name="NV_GIOITINH">
            </div>
            <div class="col-7">
                <label for="" class="col-form-label">QUÊ QUÁN</label>
                <input type="text" name="NV_QUEQUAN" class="form-control">
            </div>
            <div class="col-7">
                <label for="" class="col-form-label">SỐ ĐIỆN THOẠI</label>
                <input type="text" class="form-control" name="NV_SDT" required>
            </div>
            <div class="col-7">
                <label for="" class="col-form-label">EMAIL</label>
                <input type="text" class="form-control" name="NV_EMAIL" required>
            </div>
            <div class="col-7">
                <label for="" class="col-form-label">CCCD</label>
                <input type="text" class="form-control" name="NV_CCCD" required>
            </div>
            <div class="col-7">
                <label for="" class="col-form-label">TÀI KHOẢN NHÂN VIÊN</label>
                <input type="text" class="form-control" name="NV_TAIKHOAN" required>
            </div>
            <div class="col-7">
                <label for="" class="col-form-label">MẬT KHẨU NHÂN VIÊN</label>
                <input type="text" class="form-control" name="NV_MATKHAU" required>
            </div>
                <!-- <label for="">ID_LSP</label>
                <input type="text" name="id_sp"><br>
                <label for="">Ten_LSP</label>
                <input type="text" name="ten_sp"> -->
            
            <div class="col-7 mt-3">
                <button name="sbm" class="btn btn-success" type="submit">Thêm vào CSDL</button>
            </div>
            
            </form>
        </div>
    </div>
</body>
</html>