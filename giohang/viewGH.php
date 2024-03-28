
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Quản lý cay canh</title>

  <link rel="stylesheet"   href="./bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.min.css">
  <link href="./sanpham/css/stylechutro" rel="stylesheet">
  <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>


<body>


        <?php           
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "qlbc";
                $conn = new mysqli($servername, $username, $password, $dbname);

                $sql = " SELECT * FROM giohangs a, sanphams b, chitietgiohangs c where a.sp_id=b.sp_id and a.gh_id=c.gh_id";    
                $result = mysqli_query($conn, $sql);
                $data = [];
                $rowNum = 1;
                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    $data[] = array(
                        'GH_ID' => $row['GH_ID'], 
                        'SP_ID' => $row['SP_ID'],
                        'LOAISP_ID' => $row['LOAISP_ID'],
                        'SP_TEN' => $row['SP_TEN'],
                        'SP_DONGIA' => $row['SP_DONGIA']
                    );
                    $rowNum++;
                }
            ?>
         
        </div>
        <div class="col-md-9">
          <div class="panel panel-default">
            <div class="panel-heading main-color-bg">
              <h3 class="panel-title ">GIO HANG</h3>
            </div>
            </div>
            <br>
              
            <table class="table table-striped table-hover border">
              <tr> 
                  <th>MA GH</th>
                  <th>MA SP</th>
                  <th>MA LOAISP</th>
                  <th>TEN SAN PHAM</th>    
                  <th>DON GIA</th>      
              </tr>
            <tbody>
                <?php foreach ($data as $row) : ?>
                            <tr>
                                <td><?php echo $row['GH_ID']; ?></td>
                                <td><?php echo $row['SP_ID']; ?></td>
                                <td><?php echo $row['LOIASP_ID']; ?></td> 
                                <td><?php echo $row['SP_TEN']; ?></td>
                                <td><?php echo $row['SP_DONGIA']; ?></td>                                
                                <td class="border">   
                                  <form action="xoaGH.php" method="post">
                                    <input type="submit" name="action" value="xoa" class="btn btn-success mb-3">
                                    <input type="hidden" name="id" value="<?php echo $row['GH_ID']; ?>">
                                  </form>
                                  
                                  <form action="form_edit_GH.php" method="post">
                                    <input type="submit" name="action" value="sua" class="btn btn-success">
                                    <input type="hidden" name="id" value="<?php echo $row['GH_ID']; ?>">
                                  </form>
                                </td>
                            </tr>
                <?php endforeach; ?>
            </tbody>
            <div class="container-fluid"><a href="form_add_GH.php" class="list-group-item bg-success text-white rounded" style="text-align:center; padding: 10px;"><span class="" aria-hidden="true"></span> Them san pham vao gio hang</a><br></div>
            </table>
            <?php           
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "qlbc";
                $conn = new mysqli($servername, $username, $password, $dbname);

                $sql = "select * from giohangs";

                $result = mysqli_query($conn, $sql);

                $data = [];
                $rowNum = 1;
                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    $data[] = array(
                      'GH_ID' => $row['GH_ID'], 
                      'SP_ID' => $row['SP_ID'],
                      'LOAISP_ID' => $row['LOAISP_ID'],
                      'SP_TEN' => $row['SP_TEN'],
                      'SP_DONGIA' => $row['SP_DONGIA']
                    );
                    $rowNum++;
                }
            ?>

          </div>
        </div>

      </div>
    </div>
  </section>
  <footer id="footer">

  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
