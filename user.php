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
                    <li><a href="user.php"><b style="color: yellow;">USER</b></a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            <div>
                <h2 class="text-center">TRA CỨU KẾT QUẢ</h2>
            </div>
            <form action="tracuu.php" method="post">
                <table>
                    <div style=" border-radius: 5px; padding: 140px 10px">

                        <div class="row">
                            <div class="col-sm-2">
                                <p class="float-right"><b>Nhập CMND/CCCD</b></p>
                            </div>
                            <div class="col-sm-10">
                                <input style="width: 100%;" type="text" name="cccd" id="cccd" placeholder="Nhập CMND/CCCD">
                            </div>
                        </div>

                        <div class="text_center" style="color: white;">
                            <div>
                            <input type="submit" id="btn" name="btnTracuu" value="Tracuu">
                            </div>
                        </div>
                    </div>
                </table>    
            </form>
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
