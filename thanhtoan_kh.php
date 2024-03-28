<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ Hàng</title>
    <link rel="stylesheet" href="./themify-icons-font/themify-icons/themify-icons.css">
    <link rel="stylesheet"   href="./bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <script src="./bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js" ></script>
    <link rel="stylesheet" href="giohang.css">
    <link rel="stylesheet" href="style-header.css">
    <link rel="stylesheet" href="color.css">
</head>
    <body>
        <header id="header">
            <nav class=" navbar navbar-expand-sm bg ">
                <a href="trangchu.html" class="navbar-brand fs-3 ms-5 ">Flowers Nature</a>
                <button class="navbar-toggler" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <i class="fa-solid fa-bars text-white bx-md "></i>
                </button>
                <div class="collapse navbar-collapse ms-3" id="collapseExample">
                    <ul class="navbar-nav ms-auto ">
                        <li class="nav-item"><a href="trangchu.html" class="nav-link ms-2  ">Trang Chủ</a></li>
                        <li class="nav-item"><a href="bloghoa.html" class="nav-link ms-2 ">Blog Hoa</a></li>
                        <li class="nav-item"><a href="tintuc.html" class="nav-link ms-2 ">Tin Tức</a></li>
                        <li class="nav-item dropdown"  href="sanpham.html">
                            <a class="nav-link dropdown-toggle " href="sanpham.html" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Sản Phẩm
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="sanpham.html">Hoa tình yêu</a></li>
                                <li><a class="dropdown-item" href="sanpham.html ">Hoa sinh nhật</a></li>
                                <li><a class="dropdown-item" href="sanpham.html">Hoa chúc mừng</a></li>
                                <li><a class="dropdown-item" href="sanpham.html">Mẫu hoa mới</a></li>
                                <li><a class="dropdown-item" href="sanpham.html">Cây văn phòng</a></li>
                                <li><a class="dropdown-item" href="sanpham.html">Lãng hoa chia buồn</a></li>
                            </ul>
                          </li>
                        <li><a href="dangnhap.html" class="nav-link ms-2 ">Đăng Nhập</a></li>
                        <li><a href="dangki.html" class="nav-link ms-2  ">Đăng Kí</a></li>
                        <li><a href="lienhe.html" class="nav-link ms-2  ">Liên Hệ</a></li>
                    </ul>
                    <!--Giỏ hàng - Tìm kiếm-->
                    <div class="navbar navbar-expand ms-3 me-5 ">
                        <a href="giohang.html"><i class="fa fa-cart-shopping text-black-100 " ></i></a>
                    </div>
                </div>
            </nav>
          </header>
        <!--Hết header-->
        <main id="main">
            <div class="container mt-4">
                <form method="post" action="#">
    
                    <div class="py-5 text-center">
                        <h2>Thanh toán</h2>
                        <p >Vui lòng kiểm tra lại thông tin trước khi đặt hàng.</p>
                    </div>
                    <div class="row">
                        <div class="col-md-4 order-md-2">
                            <h4>
                                <span class="text-muted">Giỏ hàng</span>
                            </h4>
                            <ul class="list-group mb-3 box">
                                <li class="d-flex justify-content-between ">
                                    <div>
                                        <h6 class="my-0">Hoa Hồng</h6>
                                        <small class="text-muted">52.000 x 1</small>
                                    </div>
                                    <span class="text-muted">52.000</span>
                                </li>
                                <li class="d-flex justify-content-between ">
                                    <div>
                                        <h6 class="my-0">Hoa Tulip</h6>
                                        <small class="text-muted">52.000 x 1</small>
                                    </div>
                                    <span class="text-muted">52.000</span>
                                </li>
                                <li class="d-flex justify-content-between ">
                                    <div>
                                        <h6 class="my-0">Hoa Lan</h6>
                                        <small class="text-muted">52.000 x 1</small>
                                    </div>
                                    <span class="text-muted">52.000</span>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <span>Tổng thành tiền</span>
                                    <strong>156.000</strong>
                                </li>
                            </ul>
    
    
                            <div class="input-group">
                                <input type="text" class="form-control " placeholder="Mã khuyến mãi">
                                <div>
                                    <button class="buttonaccess">Xác nhận</button>
                                </div>
                            </div>
    
                        </div>
                        <div class=" col-md-8">
                            <h4>Thông tin khách hàng</h4>
    
                            <div>
                                <div class="txt_field">
                                    <label >Họ tên</label>
                                    <input type="text" value="Trần Minh Dương" required>
                                </div>
                                <div class="txt_field">
                                    <label >Email</label>
                                    <input type="text" value="tranduong@gmail.com" required> 
                                </div>
                                <div class="txt_field">
                                    <label >Điện thoại</label>
                                    <input type="text" value="09891232101" required>
                                </div>
                                <div class="txt_field">
                                    <label >Địa chỉ</label>
                                    <input type="text"  value="62, Trần Hưng Đạo, An Khánh, Ninh Kiều, Cần Thơ" required>
                                </div>
                                
                                
                            </div>
    
                            <h4>Hình thức thanh toán</h4>
    
                            <div>
                                <div>
                                    <input  name="check" type="radio" required="">
                                    <label>Tiền mặt</label>
                                </div>
                                <div>
                                    <input  name="check" type="radio" required="">
                                    <label>Chuyển khoản</label>
                                </div>
                            </div>
                            <hr class="mb-4">
                            <div>
                                <a href="" class="buttonaccess" type="submit">Đặt hàng</a>
                            </div>
                        </div>
                    </div>
                </form>
    
            </div>
        </main>
        
        <footer>
            
        </footer>
    </body>
</html>