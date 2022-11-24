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
                    <li><a href="gioithieu.php"><b style="color: yellow;">GIỚI THIỆU</b></a></li>
                    
                    <li><a href="lienhe.php"><b>LIÊN HỆ</b></a></li>
                    <li><a href="dangky.php"><b>ĐĂNG KÝ THI</b></a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
            <div class="container">
                <hr>
                <h2 class="text-center">Chức năng và nhiệm vụ</h2>
                <hr/>
                <div class="row">
                    <div class="col-sm-6"><img alt="ve-chung-toi" class="w-100" src="ima/article.jpg" /></div>
                    <div class="col-sm-6">
                        
                        <p>1. Tổ chức đánh giá năng lực ngoại ngữ và cấp chứng chỉ/chứng nhận cho người đạt các trình độ theo quy định của Bộ Giáo dục và Đào tạo theo Khung năng lực ngoại ngữ 6 bậc dùng cho Việt Nam.</p>
                        <p>2. Phối hợp với Trung tâm Quốc gia Đánh giá năng lực ngoại ngữ tổ chức các kỳ thi đánh giá năng lực ngoại ngữ quốc gia tổ chức tại Trường Đại học Cần Thơ.</p>
                        
                        
                    </div>
                
                </div>
                <div>
                        <p>3. Phối hợp với các tổ chức đào tạo và đánh giá năng lực ngoại ngữ quốc tế thực hiện đánh giá các loại hình năng lực ngoại ngữ như TOEFL iBT, IELTS, TOEIC, ESP, Cambridge, Michigan Proficiency,...</p>
                        <p>4. Tham gia các hoạt động chuyên môn của Trung tâm Quốc gia Đánh giá năng lực ngoại ngữ</p>
                        <p>5. Xây dựng và tham gia xây dựng hệ thống ngân hàng đề thi đánh giá năng lực ngoại ngữ theo các loại hình chứng chỉ/chứng nhận và trình độ khác nhau đối với ngôn ngữ tiếng Anh, tiếng Pháp, và các ngôn ngữ khác theo qui định hiện hành của Bộ Giáo dục và Đào tạo.</p>
                        <p>6. Đào tạo đội ngũ cán bộ có năng lực và chuyên nghiệp trong tổ chức khảo thí năng lực ngoại ngữ.</p>
                        <p>7. Xây dựng các chương trình liên kết với các trung tâm Khảo thí ngoại ngữ quốc tế tại Việt Nam và nước ngoài tổ chức đào tạo và đánh giá năng lực ngoại ngữ theo tiêu chuẩn quốc tế.</p>
                        <p>8. Phối hợp với các trường đại học nước ngoài đánh giá năng lực ngoại ngữ cho ứng viên cao học và nghiên cứu sinh trước khi du học theo yêu cầu/tiêu chuẩn của trường nhận học viên và nghiên cứu sinh.</p>
                        <p>9. Phát triển cơ sở vật chất phục vụ công tác đánh giá năng lực ngoại ngữ.</p>
                        <p>10. Thực hiện nhiệm vụ lập kế hoạch, báo cáo công tác cho Trung tâm Quốc gia Đánh giá năng lực ngoại ngữ khi được công nhận là thành viên.</p>
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