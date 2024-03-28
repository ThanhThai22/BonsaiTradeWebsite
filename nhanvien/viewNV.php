<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NHÂN VIÊN</title>
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
            <a href="../donhang/viewDH.php" class="list-group-item p-3"><span class="" aria-hidden="true"></span> Danh sách ĐƠN HÀNG </a>
            <a href="../lonhap/viewLN.php" class="list-group-item p-3"><span class="" aria-hidden="true"></span> Danh sách LÔ NHẬP </a>
            <a href="../loxuat/viewLX.php" class="list-group-item p-3"><span class="" aria-hidden="true"></span> Danh sách LÔ XUẤT </a>
            <a href="viewNV.php" class="list-group-item p-3"><span class="" aria-hidden="true"></span> Danh sách NHÂN VIÊN </a>
          </div>

          <?php           
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "qlbc";
                $conn = new mysqli($servername, $username, $password, $dbname);

                $sql = " SELECT * FROM nhanviens a, chucvus b where a.cv_id=b.cv_id";    
                $result = $conn->query($sql);

                $data = [];
                $rowNum = 1;
                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    $data[] = array(
                        'NV_ID' => $row['NV_ID'], 
                        'CV_TEN' => $row['CV_TEN'],
                        'NV_HOTEN' => $row['NV_HOTEN'],
                        'NV_NGAYSINH' => $row['NV_NGAYSINH'],
                        'NV_GIOITINH' => $row['NV_GIOITINH'],
                        'NV_QUEQUAN' => $row['NV_QUEQUAN'],
                        'NV_SDT' => $row['NV_SDT'],
                        'NV_EMAIL' => $row['NV_EMAIL'],
                        'NV_CCCD' => $row['NV_CCCD'],
                        'NV_TAIKHOAN' => $row['NV_TAIKHOAN'],
                        'NV_MATKHAU' => $row['NV_MATKHAU']
                    );
                    $rowNum++;
                }
            ?>
         
        </div>
        <div class="col-md-9">
          <div class="panel panel-default">
            <div class="panel-heading main-color-bg">
              <h3 class="panel-title ">DANH SÁCH NHÂN VIÊN</h3>
            </div>
            </div>
            <br>
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
            <table class="table table-striped table-hover border">
              <tr> 
                  <th>MÃ NHÂN VIÊN</th>
                  <th>CHỨC VỤ</th>
                  <th>HỌ TÊN</th>
                  <th>NGÀY SINH</th>
                  <th>GIỚI TÍNH</th>
                  <th>QUÊ QUÁN</th>
                  <th>SỐ ĐIỆN THOẠI</th>
                  <th>EMAIL</th>
                  <th>CCCD</th>  
                  <th>TÀI KHOẢN</th>  
                  <th>MẬT KHẨU</th>  
                  <th>HÀNH ĐỘNG</th>      
              </tr>
            <tbody>
                <?php foreach ($data as $row) : ?>
                            <tr>
                                <td><?php echo $row['NV_ID']; ?></td>
                                <td><?php echo $row['CV_TEN']; ?></td>
                                <td><?php echo $row['NV_HOTEN']; ?></td>
                                <td><?php echo $row['NV_NGAYSINH']; ?></td> 
                                <td><?php echo $row['NV_GIOITINH']; ?></td>
                                <td><?php echo $row['NV_QUEQUAN']; ?></td>
                                <td><?php echo $row['NV_SDT']; ?></td>
                                <td><?php echo $row['NV_EMAIL']; ?></td>
                                <td><?php echo $row['NV_CCCD']; ?></td> 
                                <td><?php echo $row['NV_TAIKHOAN']; ?></td> 
                                <td><?php echo $row['NV_MATKHAU']; ?></td>                             
                                <td class="border">   
                                  <form action="xoaNV.php" method="post">
                                    <input type="submit" name="action" value="XÓA" class="btn btn-success mb-3">
                                    <input type="hidden" name="id" value="<?php echo $row['NV_ID']; ?>">
                                  </form>
                                  
                                  <form action="form_edit_NV.php" method="post">
                                    <input type="submit" name="action" value="SỬA" class="btn btn-success">
                                    <input type="hidden" name="id" value="<?php echo $row['NV_ID']; ?>">
                                  </form>
                                </td>
                            </tr>
                <?php endforeach; ?>
            </tbody>
            <div class="container-fluid"><a href="form_add_NV.php" class="list-group-item bg-success text-white rounded" style="text-align:center; padding: 10px;"><span class="" aria-hidden="true"></span>THÊM NHÂN VIÊN</a><br></div>
            </table>
            <?php           
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "qlbc";
                $conn = new mysqli($servername, $username, $password, $dbname);

                $sql = "select * from nhanviens";

                $result = $conn->query($sql);

                $data = [];
                $rowNum = 1;
                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    $data[] = array(
                        'NV_ID' => $row['NV_ID'], 
                        'CV_ID' => $row['CV_ID'],
                        'NV_HOTEN' => $row['NV_HOTEN'],
                        'NV_NGAYSINH' => $row['NV_NGAYSINH'],
                        'NV_GIOITINH' => $row['NV_GIOITINH'],
                        'NV_QUEQUAN' => $row['NV_QUEQUAN'],
                        'NV_SDT' => $row['NV_SDT'],
                        'NV_EMAIL' => $row['NV_EMAIL'],
                        'NV_CCCD' => $row['NV_CCCD'],
                        'NV_TAIKHOAN' => $row['NV_TAIKHOAN'],
                        'NV_MATKHAU' => $row['NV_MATKHAU']
                    );
                    $rowNum++;
                }
            ?>

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