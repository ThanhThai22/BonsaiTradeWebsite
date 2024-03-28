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


if($_POST['taikhoan'] == "admin@gmail.com" AND $_POST['taikhoan'] = "123"){
    header('Location:./sanpham/viewSP.php');
  }


else{
  $sql = "select KH_ID, KH_HOTEN ,KH_TAIKHOAN from khachhangs where KH_TAIKHOAN = '".$_POST["taikhoan"]."' and KH_MATKHAU = '".($_POST["pass"])."'";
  $sql1 = "select NV_ID, NV_HOTEN, NV_TAIKHOAN from nhanviens where NV_TAIKHOAN = '".$_POST["taikhoan"]."' and NV_MATKHAU = '".($_POST["pass"])."'";    
 
$result = $conn->query($sql);
$result1 = $conn->query($sql1);


if ($result->num_rows > 0) {
 
  $row = $result->fetch_assoc();
  $cookie_name = "user";
  $cookie_value = $row['KH_TAIKHOAN'] ;
  setcookie($cookie_name, $cookie_value, time() + (86400 / 24), "/");
  setcookie("KH_HOTEN", $row['KH_HOTEN'], time() + (86400 / 24), "/");
  setcookie("KH_ID", $row['KH_ID'], time() + (86400 / 24), "/");
//thử
      
  header('Location: trangchu_kh.php');  
} 
 else if ($result1->num_rows > 0) {
  $row = $result1->fetch_assoc();
  $cookie_name = "user";
  $cookie_value = $row['NV_TAIKHOAN'] ;
 
  setcookie($cookie_name, $cookie_value, time() + (86400 / 24), "/");
  setcookie("NV_HOTEN", $row['NV_HOTEN'], time() + (86400 / 24), "/");
  setcookie("NV_ID", $row['NV_ID'], time() + (86400 / 24), "/");

  //thử
  
  header('Location:./sanpham/viewSP.php'); 
 }

else {
 
  //Tro ve trang dang nhap sau 3 giay
  echo"Đăng Nhập Không Thành Công.Mời Nhập Lại";
  header('Refresh: 3;url=login.php');

}


}
 
  $conn->close();

?>
