<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ĐƠN HÀNG</title>
    <link rel="stylesheet" href="../color.css">
    <link rel="stylesheet" href="../sanpham.css">
    <link rel="stylesheet" href="../style-header.css">
    <link rel="stylesheet" href="../style-footer.css">
    <link rel="stylesheet" href="../themify-icons-font/themify-icons/themify-icons.css">
    <link rel="stylesheet"   href="../bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <script src="../bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js" ></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script language="javascript"  src="main.js"></script> 
</head>
<body> 



    <header id="header">
        <nav class=" navbar navbar-expand-sm bg ">
          <a href="trangchu.html" class="navbar-brand fs-3 ms-5 ">CÂY CẢNH</a>
          <button class="navbar-toggler" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
              <i class="fa-solid fa-bars text-white bx-md "></i>
          </button>
          <div class="collapse navbar-collapse ms-3" id="collapseExample">
              <ul class="navbar-nav ms-auto ">
                  <li class="nav-item"><a href="trangchu.php" class="nav-link ms-2  ">Trang Chủ</a></li>
                  <li class="nav-item dropdown"  href="sanpham.php">
                      <a class="nav-link dropdown-toggle " href="sanpham.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Sản Phẩm
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="sanpham.php">Cây cảnh để bàn</a></li>
                          <li><a class="dropdown-item" href="sanpham.php">Cây thủy sinh</a></li>
                          <li><a class="dropdown-item" href="sanpham.php">Terrarium</a></li>
                          <li><a class="dropdown-item" href="sanpham.php">Sen đá, Xương rồng</a></li>
                          <li><a class="dropdown-item" href="sanpham.php">Chậu cây treo</a></li>
                          <li><a class="dropdown-item" href="sanpham.php">Cây cảnh nội thất</a></li>
                          <li><a class="dropdown-item" href="sanpham.php">Cây cảnh ngoại thất</a></li>
                          <li><a class="dropdown-item" href="sanpham.php">Cây Bonsai</a></li>
                          <li><a class="dropdown-item" href="sanpham.php">Cây ăn trái</a></li>
                          <li><a class="dropdown-item" href="sanpham_chau.php">Chậu cây</a></li>
                            <li><a class="dropdown-item" href="sanpham_dungcu.php">Dụng cụ</a></li>
                      </ul>
                    </li>
                  <li><a href="dangnhap.php" class="nav-link ms-2 ">Đăng Nhập</a></li>
                  <li><a href="dangky.php" class="nav-link ms-2  ">Đăng Kí</a></li>
                  <li><a href="lienhe.php" class="nav-link ms-2  ">Liên Hệ</a></li>
              </ul>
              <!--Giỏ hàng - Tìm kiếm-->
              <div class="navbar navbar-expand ms-3 me-5 ">
                  <a href="giohang.html"><i class="fa fa-cart-shopping text-black-100 " ></i></a>
              </div>
          </div>
      </nav>
    </header>
    <!--Hết header-->

            <!--Tạo ra 1 thanh ngăn cách header và thân-->
            <div class="gap-element clearfix" style="display:block; height:auto; padding-top:30px"></div> 
   
   <main>
   <section id="main">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="list-group mt-5">
            <a href="#" class="list-group-item active bg-success text-center">
              <span class="" aria-hidden="true"></span> DANH MỤC
            </a>
            <a href="../sanpham/viewSP.php" class="list-group-item p-3"><span class="" aria-hidden="true"></span> DANH SÁCH SẢN PHẨM </a>  
            <a href="../dichvu/viewDV.php" class="list-group-item p-3"><span class="" aria-hidden="true"></span> Danh sách DỊCH VỤ </a>
            <a href="viewDH.php" class="list-group-item p-3"><span class="" aria-hidden="true"></span> Danh sách ĐƠN HÀNG </a>
            <a href="../lonhap/viewLN.php" class="list-group-item p-3"><span class="" aria-hidden="true"></span> Danh sách LÔ NHẬP </a>
            <a href="../loxuat/viewLX.php" class="list-group-item p-3"><span class="" aria-hidden="true"></span> Danh sách LÔ XUẤT </a>
            <a href="../nhanvien/viewNV.php" class="list-group-item p-3"><span class="" aria-hidden="true"></span> Danh sách NHÂN VIÊN </a>
          </div>

        
         
        </div>
        <div class="col-md-9">
          <div class="panel panel-default">
            <div class="panel-heading main-color-bg">
              <h3 class="panel-title ">DANH MỤC DỊCH VỤ</h3>
            </div>
            </div>
            <br>

            <?php
    $conn = new mysqli('localhost','root','','qlbc');
     $sql_ttdh = "select * from trangthaidonhangs";
     $sql_kh = "select * from khachhangs";
     $query_ttdh = $conn->query($sql_ttdh);
     $query_kh = $conn->query($sql_kh);

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


   <section id="main">
   <!-- San pham
  nv_id, lsp_id, sp_ten, sp_mota, sp_linkanh, sp_dongia -->
  <div class="container d-flex" style="background-color:rgb(149, 173, 149);">

<!-- <div style="margin-left: auto; margin-right: auto;">
    <strong><b>Them San Pham</b></strong>
</div> -->
<div class="col-5" style="margin-left: auto; margin-right: auto;">
        <strong><b>THÊM ĐƠN HÀNG</b></strong>
            <form class="mt-3" action="themDH.php" method="post" enctype="multipart/form-data">
                <!-- 
                        // DH_ID
                // TTDH_ID
                // KH_ID
                // DH_NGAYTAO -->
            <div class="col-7 mb-3">
                <label for="" class="">TRẠNG THÁI ĐƠN HÀNG</label>
                <!-- <input type="text" class="form-control" name=""> -->
                <select class="form-select" aria-label="Default select example" name="TTDH_ID" class="form-control">
                    <?php
                        while($rowttdh = mysqli_fetch_assoc($query_ttdh)){?>
                        <option value="<?php echo $rowttdh['TTDH_ID']; ?>"> <?php echo $rowttdh['TTDH_TEN']; ?> </option>
                        <?php } ?>
                </select>
            </div>

            <div class="col-7 mb-3">
                <label for="" class="">KHÁCH HÀNG</label>
                <!-- <input type="text" class="form-control" name=""> -->
                <select class="form-select" aria-label="Default select example"  name="KH_ID" class="form-control">
                    <?php
                        while($rowkh = mysqli_fetch_assoc($query_kh)){?>
                        <option value="<?php echo $rowkh['KH_ID']; ?>"> <?php echo $rowkh['KH_HOTEN']; ?> </option>
                        <?php } ?>
                </select>
            </div>
            <div class="col-7">
                <label for="" class="col-form-label">NGÀY TẠO</label>
                <input type="text" class="form-control" name="DH_NGAYTAO" required>
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
  </section>




          

          </div>
        </div>

      </div>
    </div>
  </section>
   

        
        
        </main>     
        <!--Phần cuối chân trang-->
    <!--Phần cuối chân trang-->
   <footer>
    <div class="step"> 
    <div class="container">       
        <div class="row">
            <div class="col-sm-4 mb-5">
                        </div>
            <div class="col-sm-4 mb-5">
                        </div>
            <div class="col-sm-4 mb-5">
                           </div>
        </div>
    </div>
    </div>
        <!--phần cuối footer-->
<div class="container">
<div class="row">
        <div class="col-sm-4 mb-5">
            <div class="gray">

                <p>
                    <i class="fa-solid fa-location-dot"></i>
                      Đ/c: đường 3/2, phường Xuân Khánh, quận Ninh Kiều, thành phố Cần Thơ
                </p>
                <p>
                    <i class="fa-solid fa-phone"></i>
                    0999999999
                </p>
                <p>
                    <i class="fa-regular fa-envelope"></i>
                    flowernature@gmail.com
                </p>  
            </div>
        </div>
        <div class="col-sm-4 mb-5">
            <h4 class="white">Chính Sách</h4>
            <div class="gray">
                <p>
                    <i class="fa-solid fa-angles-right"></i>
                    Trung tâm hỗ trợ khách hàng
                </p>
                <p>
                    <i class="fa-solid fa-angles-right"></i>
                    Kiểm tra đơn hàng
                </p>
                <p>
                    <i class="fa-solid fa-angles-right"></i>
                    Chính sách thanh toán
                </p>
                <p>
                    <i class="fa-solid fa-angles-right"></i>
                    Chính sách bảo mật thanh toán
                </p>
                <p>
                    <i class="fa-solid fa-angles-right"></i>
                    Chính sách định danh
                </p>
                <p>
                    <i class="fa-solid fa-angles-right"></i>
                    Chính sách giao hàng
                </p>
            </div>
        </div>
        <div class="col-sm-4 mb-5">
            <h4 class="white">Tin Tức Nổi Bật</h4>
            <div class="gray">
                <div class="row">
                        <div class="col-2 col-sm-6">
                            <div class="tintuc"><p><img src="./picCay/hoa-dao (Custom).png" width="150"></p></div>
                        </div>
                        <div class="col-2 col-sm-6">
                            <div class="tintuc"><p><img src="./picCay/hyvong (Custom).jpg" width="150"></p></div>
                        </div>

                    <p>
                        <div class="col-2 col-sm-6">
                            <div class="tintuc"><p>Hoa đào tinh hoa ngũ hành bởi sắc độ nhẹ nhàng, màu hoa tươi thắm. </p></div>       
                                
                        </div>
                        <div class="col-2 col-sm-6">
                            <div class="tintuc"> <p>Loài cây biểu tượng cho nghị lực sống phi thường, bền bỉ vượt qua mọi khó khăn để vươn lên trong cuộc sống.</p></div>
                        </div>
                    </p>
                </div>    
            </div>
            
        </div>
    
</div>
</div>


<div class="container">
<div class="row">
        <div class="col-4 col-md-4"> 
            <h6>
                <p  class="bq" href> &commat; Bản quyền thuộc về CT299N6 </p>
              
            </h6>  
        </div>
        <div class="col-4 col-md-4">

        </div>
        <div class="col-4 col-md-4"> 
            <div class="connect">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-solid fa-square-envelope"></i>
            </div>
        </div>
        </div>
    </div>
</div>

<a href="#top" class="gotop"><img src="./images/trangchu/up.png" width="60" style="border-radius: 12mm"></a>
    </footer>
</body>



</html>