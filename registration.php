<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qlbc";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Thiết lập charset utf8
header('Content-Type: text/html; charset=utf-8');
  
// Vì tên button submit là do-register nên ta sẽ kiểm tra nếu
// tồn tại key này trong biến toàn cục $_POST thì nghĩa là người 
// dùng đã click register(submit)
	if (isset($_POST["btn_submit"])) {
		//lấy thông tin từ các form bằng phương thức POST
		$username = $_POST["username"];
		$password = $_POST["pass"];
		$name = $_POST["name"];
		$email = $_POST["email"];
		//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
		if ($username == "" || $password == "" || $name == "" || $email == "") {
			echo "bạn vui lòng nhập đầy đủ thông tin";
		}else{
			//thực hiện việc lưu trữ dữ liệu vào db
		}
	}

if (isset($_POST['register']))
{
    // Lấy thông tin
    // Để an toàn thì ta dùng hàm mssql_escape_string để
    // chống hack sql injection
    $KH_HOTEN   = isset($_POST['KH_HOTEN']) ? mysql_escape_string($_POST['KH_HOTEN']) : '';
    $KH_DIACHI   = isset($_POST['KH_DIACHI']) ? mysql_escape_string($_POST['KH_DIACHI']) : '';
    $KH_SDT   = isset($_POST['KH_SDT']) ? mysql_escape_string($_POST['KH_SDT']) : '';
    $KH_TAIKHOAN   = isset($_POST['KH_TAIKHOAN']) ? mysql_escape_string($_POST['KH_TAIKHOAN']) : '';
    $KH_MATKHAU   = isset($_POST['KH_MATKHAU']) ? md5($_POST['KH_MATKHAU']) : '';
           
      
    // Kiểm tra username hoặc email có bị trùng hay không
    $sql = "SELECT * FROM khachhangs WHERE KH_TAIKHOAN = '$KH_TAIKHOAN'";
      
    // Thực thi câu truy vấn
    $result = mysqli_query($conn, $sql);
      
    // Nếu kết quả trả về lớn hơn 1 thì nghĩa là username hoặc email đã tồn tại trong CSDL
    if (mysqli_num_rows($result) > 0)
    {
        // Sử dụng javascript để thông báo
        echo '<script language="javascript">alert("Thông tin đăng nhập bị sai"); window.location="dangky.php";</script>';
          
        // Dừng chương trình
        die ();
    }
    else {
        // Ngược lại thì thêm bình thường
        $sql = "INSERT INTO khachhangs (KH_HOTEN, KH_DIACHI, KH_SDT, KH_TAIKHOAN, KH_MATKHAU) VALUES (' $KH_HOTEN ',' $KH_DIACHI','$KH_SDT',' $KH_TAIKHOAN', '$KH_MATKHAU')";
          
        if (mysqli_query($conn, $sql)){
            echo '<script language="javascript">alert("Đăng ký thành công"); window.location="dangnhap.php";</script>';
        }
        else {
            echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="dangky.php";</script>';
        }
    }
}

?>
