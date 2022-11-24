<?php
    include_once("connect.php");
    session_start();
    // session_destroy();
?>
<?php 
    if(isset($_POST['dangnhap'])){
      $email=$_POST['email'];
      $password=$_POST['password'];
      if($email== '' || $password==''){
        echo '<script>alert("Vui lòng nhập đủ email và mật khẩu")</script>';
      }
      else{
        $sql_admin_login=mysqli_query($conn,"select * from admin where email_admin='$email' and password_admin='$password' limit 1");
        $count=mysqli_num_rows($sql_admin_login);
        $row_admin_login=mysqli_fetch_array($sql_admin_login);
        
        $sql_user_login=mysqli_query($conn,"select * from user where email_user='$email' and password_user='$password' limit 1");
        $dem=mysqli_num_rows($sql_user_login);
        $row_user_login=mysqli_fetch_array($sql_user_login);
        if($count>0){
          $_SESSION['dangnhap']=$row_admin_login['ten_admin'];
          $_SESSION['id_admin']=$row_admin_login['id_admin'];
          header('Location: admin.php');
        }
        elseif($dem>0){
          $_SESSION['username']=$row_user_login['ten_user'];
          $_SESSION['id_user']=$row_user_login['id_user'];
          header('Location: user.php');
        }
        else{
          echo '<script>alert("Tài khoản hoặc mật khẩu không đúng!")</script>';
        }
      }
    }
?>

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
                <a style="text-decoration: none; color: black;" class="float-right" href="" class="btn btn-info btn-lg a" data-toggle="modal" data-target="#modal1"> <i class="fa-solid fa-user float-right icon"></i><b>Đăng nhập</b></a>
                <div id="modal1" class="modal fade" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header text-center d-block">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h2 class="modal-title"><i class="fas fa-lock"></i>Đăng nhập</h2>
                            </div>
                            <div class="modal-body">
                                <form action="" method="POST">
                                    <div class="form-group">
                                        <label for="usernameInput"><i class="fas fa-user"></i><b>Người dùng: </b></label>
                                        <input type="text" class="form-control" placeholder="Nhập tên người dùng" name="email" id="username">
                                    </div>
                                    <div class="form-group">
                                        <label for="passwordInput"><i class="fas fa-eye"></i><b>Mật khẩu: </b></label>
                                        <input type="text" class="form-control" placeholder="Nhập mật khẩu" name="password" id="password">
                                    </div>
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input">
                                        <label for="" class="form-check-label">Ghi nhớ tôi</label>
                                    </div>
                                    <button class="btn btn-success btn-block" name="dangnhap" type="submit">
                                        <i class="fas fa-power-off"></i>Đăng nhập
                                    </button>
                                </form>
                            </div>
        
                            <div class="modal-footer row">
                                <div class="col-4"><a href="" class="btn btn-danger mr-auto float-left" data-dismiss="modal"><i class="fas fa-times"></i>Hủy bỏ</a></div>
                                <div>
                                    <p>Bạn chưa phải là thành viên? <a href="#">Đăng ký</a></p>
                                </div>
                                <div><p class="float-right">Quên <a href="#">Mật khẩu</a></p></div>
                            </div>
                        </div>
                    </div>
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
                    
                    <li><a href="lienhe.php"><b  style="color: yellow;">LIÊN HỆ</b></a></li>
                    <li><a href="dangky.php"><b>ĐĂNG KÝ THI</b></a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-sm-9">
                    <h3>Liên hệ với chúng tôi!</h3>
                    <p>Chúng tôi mong muốn lắng nghe từ bạn. Hãy liên hệ với chúng tôi và một thành viên của chúng tôi sẽ liên lạc với bạn trong thời gian sớm nhất. Chúng tôi yêu thích việc nhận được email của bạn mỗi ngày <em>mỗi ngày</em>.</p>
                    <form>
                        <div class="row form-group">
                            <label for="name" class="col-sm-4"><b>Tên của bạn</b></label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" placeholder="Tên của bạn" />
                            </div> <br><br><br>
                            <label class="col-sm-4" for="email"><b>Email của bạn</b></label>
                            <div class="col-sm-8">
                                <input class="form-control" type="email" placeholder="Email của bạn" />
                            </div> <br><br><br>
                            <label class="col-sm-4"><b>Nội dung</b></label>
                            <div class="col-sm-8">
                                <textarea rows="3" cols="70"></textarea>
                            </div>
                            <label class="col-sm-4"><b></b></label>
                            <div class="col-sm-8">
                                <button>
                                    <b>GỬI</b>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-3">
                    <h5>Bản đồ</h5>
                    <p>
                        <a href="#">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15714.681564549866!2d105.77034015000001!3d10.0440341!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1667568749793!5m2!1svi!2s" width="250" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <br />
                        </a>
                        <br />
                        <a href="https://www.google.com/maps/place/Tr%C6%B0%E1%BB%9Dng+%C4%90%E1%BA%A1i+h%E1%BB%8Dc+C%E1%BA%A7n+Th%C6%A1/@10.0299337,105.7684266,17z/data=!4m5!3m4!1s0x31a0895a51d60719:0x9d76b0035f6d53d0!8m2!3d10.0299337!4d105.7706153">
                            Xem bản đồ</a>
                    </p>
                    <p>
                        <b>Địa chỉ:</b> Lầu 6, Nhà điều hành, khu II, Đường 3/2, P. Xuân Khánh, Q. Ninh Kiều, TP. Cần Thơ
                    
                    </p>
                </div>
            </div>
            <hr/>
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