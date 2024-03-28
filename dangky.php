<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="color.css">
    <link rel="stylesheet" href="dangnhap.css">
    <link rel="stylesheet" href="style-header.css">
    <link rel="stylesheet" href="style-footer.css">
    <link rel="stylesheet" href="./themify-icons-font/themify-icons/themify-icons.css">
    <link rel="stylesheet"   href="./bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <script src="./bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js" ></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
       
       <?php 
              $servername = "localhost";
              $username = "root";
              $password = "";
              $dbname = "qlbc";


            if (isset($_POST["btn_submit"])) {
                //lấy thông tin từ các form bằng phương thức POST
                $KH_HOTEN = $_POST["KH_HOTEN"];
                $KH_DIACHI = $_POST["KH_DIACHI"];
                $KH_SDT = $_POST["KH_SDT"];
                $KH_TAIKHOAN = $_POST["KH_TAIKHOAN"];
                $KH_MATKHAU = $_POST["KH_MATKHAU"];

                //Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
                if ($KH_HOTEN == "" || $KH_DIACHI == "" || $KH_SDT == "" || $KH_TAIKHOAN == ""|| $KH_MATKHAU == "") {
                  echo "bạn vui lòng nhập đầy đủ thông tin";
                }else{
                    // Kiểm tra tài khoản đã tồn tại chưa
                    $sql="select * from khachhangs where KH_TAIKHOAN='$KH_TAIKHOAN'";
                    $result=mysqli_query($conn, $sql);

                  if(mysqli_num_rows($result)  > 0){
                    echo "Tài khoản đã tồn tại";
                  }else{
                    //thực hiện việc lưu trữ dữ liệu vào db
                      $sql = "INSERT INTO khachhangs (KH_HOTEN, KH_DIACHI, KH_SDT, KH_TAIKHOAN, KH_MATKHAU) 
                                      VALUES ('$KH_HOTEN', '$KH_DIACHI', '$KH_SDT', '$KH_TAIKHOAN', '$KH_MATKHAU  ')";
                      // thực thi câu $sql với biến conn lấy từ file connection.php
                      mysqli_query($conn,$sql);
                      echo "chúc mừng bạn đã đăng ký thành công";
                  }
                              
                  
                }
          }
	?>

       <main class="main">
        <!--Tạo ra 1 thanh ngăn cách header và thân-->
        <div class="gap-element clearfix " style="display:block; height:auto; padding-top:30px "></div> 
        <div class="center">
          <div class="contain">
            <h1 class="h1">Đăng kí</h1>
            <form method="post" action="dangky.php">
                <div class="txt_field">
                <input type="text" placeholder="Tên người dùng" id="KH_HOTEN" name="KH_HOTEN"  required>
                </div>

                <div class="txt_field">
                <input type="text" placeholder="Địa chỉ" id="KH_DIACHI" name="KH_DIACHI"   required>
                </div>

                <div class="txt_field">
                <input type="text" placeholder="Số điện thoại" id="KH_SDT" name="KH_SDT"  required>
                </div>
                <div class="txt_field">
                <input type="text" placeholder="Tên đăng nhập" id="KH_TAIKHOAN" name="KH_TAIKHOAN"  required>
                </div>
                
                <div class="txt_field">

                <input type="password" placeholder="Mật khẩu" id="KH_MATKHAU" name="KH_MATKHAU"   required>
                </div>
                <div class="txt_field">
                  <input type="password" placeholder="Nhập lại mật khẩu" id="KH_MATKHAU" name="KH_MATKHAU"  required>
                </div>

                <td colspan="2" align="center"><input type="submit" name="btn_submit" value="Dang ky"></td>
                  <div class="signup_link">Đã có tài khoản <a href="dangnhap.php">Đăng nhập</a></div>
            </form>
          </div>
        </div>
        <div class="gap-element clearfix" style="display:block; height:auto; padding-top:30px "></div> 
    </main>
    
    </body>
</html>