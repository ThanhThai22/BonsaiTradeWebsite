<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="color.css">
    <link rel="stylesheet" href="dangnhap.css">
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
          <a href="trangchu.php" class="navbar-brand fs-3 ms-5 ">CÂY CẢNH</a>
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
       </div>
       <main class="main">
        <!--Tạo ra 1 thanh ngăn cách header và thân-->
        <div class="gap-element clearfix " style="display:block; height:auto; padding-top:30px "></div> 
        <div class="center">
          <div class="contain">
            <h1 class="h1">Đăng Nhập</h1>
            
            <form method="post" action="login.php">
                    <p><i class="fa-solid "></i> Nhập vào thông tin đăng nhập</p>
                <div class="txt_field">
                  <input type="text" placeholder="Tên đăng nhập" name ="taikhoan" required autofocus>
                </div>

                <div class="txt_field">
                    <input type="password" placeholder="Password" name ="pass" required>
                </div>

                <div class="fogotpass">
                  Quên mật khẩu ?
                </div>
                
                <button class="sub" style="margin-bottom: 15px;" type="submit">Login</button>
                  <div class="signup_link">Chưa có tài khoản <a href="dangky.php">Đăng kí</a></div>
            </form>
          </div>
        </div>
    </main>
       </body>
</html>