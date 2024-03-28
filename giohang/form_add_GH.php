<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Them san pham vao gio hang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>

<?php
    $conn = new mysqli('localhost','root','','qlbc');
     $sql_gh = "select * from chitietgiohangs";
     $sql_sp = "select * from sanphams";
     $query_gh = $conn->query($sql_ctgh);
     $query_sp = $conn->query($sql_sp);
  ?>

<body>
    <div class="container-fluid col-10">
        <strong><b>Them san pham vao gio hang</b></strong>
    </div>
    <div class="container-fluid">
            <div class="col-3 mb-3">
                <label for="" class="">SAN PHAM</label>
                <select name="SP_ID" class="form-control">
                    <?php
                        while($rowkh = mysqli_fetch_assoc($query_sp)){?>
                        <option value="<?php echo $rowkh['SP_ID']; ?>"> <?php echo $rowkh['LOAISP_ID']; ?>, <?php echo $rowkh['SP_TEN']; ?>, <?php echo $rowkh['SP_DONGIA']; ?> </option>
                        <?php } ?>
                </select>
                        </div>
            <div class="col-3 mb-3">
                <label for="" class="">CHI TIET GIO HANG</label>
                <select name="GH_ID" class="form-control">
                    <?php
                        while($rowkh = mysqli_fetch_assoc($query_ctgh)){?>
                        <option value="<?php echo $rowkh['CTGH_SOLUONG']; ?>"> </option>
                        <?php } ?>
                </select>
                        </div>
            <div class="col-3 mt-3">
                <button name="sbm" class="btn btn-success" type="submit">Thêm vào CSDL</button>
            </div>
            
            </form>
        </div>
    </div>
</body>
</html>