<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRUNG TÂM ĐÁNH GIÁ NĂNG LỰC NGOẠI NGỮ</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
    function del(tenSV){
      return confirm("Bạn có chắc muốn xóa sản phẩm " +tenSV+ "?");
    }
</script> 
    <link rel="stylesheet" href="css/mystyle.css">

</head>
<body>
    <header id="header">
        <div id="dheader">
            <div>
                <div class="float-right">
                    <a href="index.php"><i class="fa-solid fa-user float-right icon"></i><b style="color: white;">Đăng xuất</b></a>
                </div>
                
            </div>

            <form action="" id="frm" class="">
                <input required type="text">
                <i class="fa-solid fa-magnifying-glass icon"></i>
            </form>
            <br>

            <img id="ima" class="float-left" src="ima/logo.png" alt="">
            <span id="spa">
                <h3>TRUNG TÂM ĐÁNH GIÁ NĂNG LỰC NGOẠI NGỮ</h3>
                <h5>Lầu 6, Nhà Điều Hành, Khu II. Đường 3/2, P.Xuân Khánh, Q.Ninh Kiều, TP.Cần Thơ</h5>
            </span>


            <nav class="nav">
                <ul class="menu">
                    <li><a href="index.php"><b>TRANG CHỦ</b></a></li>
                    <li><a href="gioithieu.php"><b>GIỚI THIỆU</b></a></li>
                    
                    <li><a href="lienhe.php"><b>LIÊN HỆ</b></a></li>
                    <li><a href="dangky.php"><b>ĐĂNG KÝ THI</b></a></li>
                    <li><a href="admin.php"><b style="color: yellow;">ADMIN</b></a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            
            <div>
                <?php
                include_once("connect.php");
                if (isset($_GET["search"]) && !empty($_GET["search"]))
                {
                    $key = $_GET["search"];
                    $sql = "SELECT * FROM sinhvien WHERE idSV LIKE '%$key%' OR fullname LIKE '%$key%' OR gender LIKE '%$key%' OR address LIKE '%$key%' OR date LIKE '%$key%' OR CCCD LIKE '%$key%' ";

                }
                else {
                    $sql = "SELECT * FROM sinhvien";
                }
                $result = mysqli_query($conn, $sql);
                
                ?>
                <h3 align = "center">Danh sách sinh viên</h3>

                <table class = "search-form" align = "center" cellpadding = "5">
                    <tr>
                        <td>
                            <form action="" method="get">
                                <input type="text" name="search" placeholder="Nhập từ khóa tìm kiếm" value="<?php if(isset($_GET["search"])) {echo $_GET["search"];} ?>">
                                <input type="submit" value="Tìm">
                                <input type="submit" value="Tất Cả">
                            </form>
                        </td>
                    </tr>
                </table>
                <table border = "1" align = "center" cellspacing = "0" cellpadding = "5">
                    <tr>
                        <th>ID Sinh Viên</th>
                        <th>Họ và Tên</th>
                        <th>Giới Tính</th>
                        <th>Quê Quán</th>
                        <th>Ngày Sinh</th>
                        <th>CCCD</th>
                        <th>Tác Vụ</th>
                    </tr>

                <?php
                while($row = mysqli_fetch_assoc($result))
                {
                    $maSV = $row["idSV"];
                    $tenSV = $row["fullname"];
                    $gioitinh = $row["gender"];
                    $diachi = $row["address"];
                    $ngaysinh = $row["date"];
                    $cccd = $row["CCCD"];
                
                ?>

                <tr>
                    <td><?php echo $maSV ?></td>
                    <td><?php echo $tenSV ?></td>
                    <td><?php if ($gioitinh == 0) echo "Nữ"; else echo "Nam"; ?></td>
                    <td><?php echo $diachi ?></td>
                    <td><?php echo $ngaysinh ?></td>
                    <td><?php echo $cccd ?></td>
                    <td>
                        <a href="suadulieu.php?idSV=<?php echo $maSV; ?>">sửa</a> ||
                        <a href="xoadulieu.php?idSV=<?php echo $maSV; ?>">Xóa</a>
                    </td>
                </tr>
                    
                
                
                <?php
                }
                ?>
                <?php
                mysqli_close($conn); ?>
                <tr>
                    <td colspan="7" align="center"><button type="button" onclick="myFunction()">Thêm mới</button></td>
                </tr>


                </table>

            </div>
        </div>
    </main>

    <footer id="footer">
        <div id="dfooter">
            <div class="row">
                <div class="col-1">
                    <img id="ima" class="float-left" src="ima/logo.png" alt="">
                </div>
                <div class="col-8" style="color: white;">
                    <h5><b>Lầu 6, Nhà Điều Hành, Khu II. Đường 3/2, P.Xuân Khánh, Q.Ninh Kiều, TP.Cần Thơ</b></h5>
                    <h5>TRUNG TÂM ĐÁNH GIÁ NĂNG LỰC NGOẠI NGỮ</h5>
                </div>
                <div class="col-3" style="color: white;">
                    <h5><b>Liên hệ</b></h5>
                    <a style="color: white;" class="float-left" href=""><i class="fa-solid fa-envelope icon"></i> khangb1910389@student.ctu.edu.vn</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>


<script>
    function myFunction() {
        location.replace("themdulieu.php");
    }
</script>