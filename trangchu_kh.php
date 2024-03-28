<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
    <link rel="stylesheet" href="color.css">
    <link rel="stylesheet" href="trangchu.css">
    <link rel="stylesheet" href="style-header.css">
    <link rel="stylesheet" href="style-footer.css">
    <link rel="stylesheet" href="./themify-icons-font/themify-icons/themify-icons.css">
    <link rel="stylesheet"   href="./bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <script src="./bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js" ></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
                  <li class="nav-item"><a href="trangchu_kh.php" class="nav-link ms-2  ">Trang Chủ</a></li>
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
    <div id="bg">
        <div class="text-content ">
            <h1 style="text-align: center; color:rgb(98, 72, 5);">CHUYÊN CUNG CẤP CÂY CẢNH DECOR</h1>
           
        </div>
     </div>
    
   <main id="main">
       <!--Phần giữa trang-->
            <div class="container">
                <div class="row">
                    <div class="home">
                        <div class="home-left">
                            <a href="trangchu.html">Trang chủ</a>
                            <span class="divider">/</span>
                            <p>Cửa hàng</p>
                        </div>
                    </div>
                </div>
            </div>
                <!--Hiển thị các mục-->


            <div class="gap-element clearfix" style="display:block; height:auto; padding-top:80px"></div> 
            <!--Sản phẩm-->
            <div class="headline">
                <h3 class="sp">Sản Phẩm </h3>
            </div>
            <div class="container">
                <div class="row">
                    <div id="wrapper">
                        <ul class="products">
                                <li>
                                    <div class="products-item">
                                        <div class="products-top">
                                            <a class="products-thumb">
                                                <img src="./picCay/cay1.png" alt="">
                                            </a>  
                                            <a class="buy-now" href="giohang.html">Mua Ngay</a> 
                                        </div>
                                        <div class="products-info">
                                            <a  class="products-name">Bạch mã hoàng tử</a>
                                            <div href="" class="products-price">Giá: 300,000 VNĐ</div>
                                            <div class="products-add">
                                                <a class="count">Số lượng:</a>
                                                <input aria-label="quantity" class="input-qty" max="50" min="0" name="" type="number" value="">
    
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="products-item">
                                        <div class="products-top">
                                            <a href="" class="products-thumb">
                                                <img src="./picCay/cay2.png" alt="">
                                            </a>  
                                            <a class="buy-now" href="giohang.html">Mua Ngay</a>  
                                        </div>
                                        <div class="products-info">
                                            <a href="" class="products-name">Lưỡi hổ </a>
                                            <div href="" class="products-price">Giá: 300,000 VNĐ</div>
                                            <div class="products-add">
                                                <a class="count">Số lượng:</a>
                                                <input aria-label="quantity" class="input-qty" max="50" min="0" name="" type="number" value="">
                                            </div>
                                        </div>
                                    </div>
                                </li><li>
                                    <div class="products-item">
                                        <div class="products-top">
                                            <a href="" class="products-thumb">
                                                <img src="./picCay/cay3.png" alt="">
                                            </a>   
                                            <a class="buy-now" href="giohang.html">Mua Ngay</a> 
                                        </div>
                                        <div class="products-info">
                                            <a href="" class="products-name">Cây trúc nhật</a>
                                            <div href="" class="products-price">Giá: 300,000 VNĐ</div>
                                            <div class="products-add">
                                                <a class="count">Số lượng:</a>
                                                <input aria-label="quantity" class="input-qty" max="50" min="0" name="" type="number" value="">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                        </ul>
                </div>
            </div>
        
            <!--view more-->
            <div class="headline">
                <h3 class="sp"><a href="sanpham.html"> Xem Thêm Sản Phẩm</a> </h3>
            </div>
        <div class="info">   
        <div class="container">           
            <div class="row">
                    <div class=" col-sm-6">
                        <div class="left" style="background: url(./picCay/bg3\ \(Custom\).jpg); width:100;">
                            <p>Hãy trao cho chúng tôi</p>
                            <p>50% sự tin tưởng</p>
                        </div>
                    </div>
                    <div class=" col-sm-6">
                        <div class="right" style="background: url(./picCay/bg2\ \(Custom\).png); width:100%;">
                            <p>Chúng tôi mang lại cho bạn</p>
                            <p>100% sự hài lòng</p>
                        </div>
                    </div>
            </div>

        </div> 
        </div>
    </main>
   <!--Phần cuối chân trang-->
   <footer>
    <div class="step"> 
    <div class="container">       
        <div class="row">
            <div class="col-sm-4 mb-5">
            <p>
            <a class="picture">
                <i class="fa fa-paper-plane" aria-hidden="true" style="color: white;"></i>
            </a>
            <a class="service">
                Giao hàng toàn quốc
            </a>
            <a class="content_service">
                Giao hàng trên toàn quốc với mức phí ưu đãi nhất
            </a>
            </p>
            </div>
            <div class="col-sm-4 mb-5">
            <p>
                <a class="picture">
                    <i class="fa fa-headphones" aria-hidden="true" style="color: white;"></i>
                </a>
                <a class="service">
                    Hỗ trợ khách hàng
                </a>
                <a class="content_service">
                    Hỗ trợ khách hàng trực tuyến 24/7. Hãy gọi cho chúng tôi khi các bạn cần
                </a>
            </p>
            </div>
            <div class="col-sm-4 mb-5">
                <p>
                    <a class="picture">
                        <i class="fa fa-gift" aria-hidden="true" style="color: white;"></i>
                    </a>
                    <a class="service">
                        Gói chăm sóc miễn phí
                    </a>
                    <a class="content_service">
                        Gói chăm sóc miễn phí khi mua tại cửa hàng nhanh nhất hoặc đơn tối thiểu 1 triệu VNĐ
                    </a>
                </p>
            </div>
        </div>
    </div>
    </div>
        <!--phần cuối footer-->
<div class="container">
<div class="row">
        <div class="col-sm-4 mb-5">
            <div class="gray">
<br>
                <p>
                    <i class="fa-solid fa-location-dot"></i>
                      Đ/c: đường 3/2, phường Xuân Khánh, quận Ninh Kiều, thành phố Cần Thơ
                </p>
                <p>
                    <i class="fa-solid fa-phone"></i>
                    0999999999
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