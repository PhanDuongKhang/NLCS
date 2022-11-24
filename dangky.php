<?php 
    include_once("connect.php");

    if(isset($_POST['signup'])){
        $idSV=$_POST['idSV'];
        $tenSV=$_POST['tenSV'];
        $gioitinh=$_POST['gioitinh'];
        $diachi=$_POST['diachi'];
        $namsinh=$_POST['namsinh'];
		$cccd=$_POST['cccd'];

        $sql_user_dk=mysqli_query($conn,"insert into sinhvien(idSV,fullname,gender,address,date,CCCD) values('$idSV','$tenSV','$gioitinh','$diachi','$namsinh','$cccd')");

    }
?>

<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="utf-8">
	<title>Đăng ký</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.validate.js"></script>
	<script type="text/javascript">

		$.validator.setDefaults({
			// submitHandler: function () { alert("submited!"); }
			
		});
		$(document).ready(function (){
			$("#signupForm").validate({
				rules: {
					idSV: "required",
					tenSV: "required",
					gioitinh: "required",
					diachi: {required: true, minlength: 5},
					namsinh: {required: true, minlength: 4, maxlength: 4},
					cccd: {required: true, minlength: 10, maxlength: 10},
					chungchi: "required",
					password: {required: true, minlength: 5},
					confirm_password: {required: true, minlength: 5, equalTo: "#password"},
					email: {required: true, email: true},
					agree: "required"
				},
				messages: {
					idSV: "Bạn chưa nhập ID của bạn",
					tenSV: "Bạn chưa nhập vào tên của bạn",
					gioitinh: "Bạn chưa nhập vào giới tính của bạn",
					diachi: {
						required: "Bạn chưa nhập vào địa chỉ của bạn",
						minlength: "Địa chỉ phải có ít nhất 5 ký tự"
					},
					namsinh: {
						required: "Bạn chưa nhập vào năm sinh của bạn",
						minlength: "Năm sinh phải có ít nhất 4 ký tự",
						maxlength: "Năm sinh không được quá 4 ký tự"
					},
					cccd: {
						required: "Bạn chưa nhập vào cccd của bạn",
						minlength: "CCCD phải có ít nhất 10 ký tự",
						maxlength: "CCCD không được quá 10 ký tự"
					},
					chungchi: "Bạn chưa nhập chứng chỉ đăng ký",
					password: {
						required: "Bạn chưa nhập mật khẩu",
						minlength: "Mật khẩu phải có ít nhất 5 ký tự"
						
					},
					confirm_password: {
						required: "Bạn chưa nhập mật khẩu",
						minlength: "Mật khẩu phải có ít nhất 5 ký tự",
						equalTo: "Mật khẩu không trùng với mật khẩu đã nhập"
					},
					email: "Hộp thư điện tử không hợp lệ",
					agree: "Bạn phải đồng ý với các quy định của chúng tôi"
				},
				
				errorPlacement: function (error, element) {
					error.addClass("invalid-feedback");
					if (element.prop("type") === "checkbox") {
						error.insertAfter(element.siblings("label"));
					} else {
						error.insertAfter(element);
					}
				},
			});
		});
	</script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-8 offset-sm-2">

				<div class="mt-2">
					<div class="alert alert-info text-center" role="alert">
						<h4>TRUNG TÂM ĐÁNH GIÁ NĂNG LỰC NGOẠI NGỮ CTU</h4>
					</div>
				</div>

				<div class="card">
					<div class="card-header">
						<h3>Đăng ký thi chứng chỉ ngoại ngữ</h3>
					</div>
					<div class="card-body">
						<form id="signupForm" method="POST" class="form-horizontal" action="dangky.php" >

							<div class="form-group row">
								<label class="col-sm-4 col-form-label" for="idSV">ID của bạn</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" id="idSV" name="idSV" placeholder="ID của bạn" />
								</div>
							</div>

							<div class="form-group row">
								<label class="col-sm-4 col-form-label" for="tenSV">Họ và Tên</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" id="tenSV" name="tenSV" placeholder="Họ và tên" />
								</div>
							</div>

							<div class="form-group row">
								<label class="col-sm-4 col-form-label" for="gioitinh">Giới tính</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" id="gioitinh" name="gioitinh" placeholder="Giới tính (Nam[1], Nữ[0])" />
								</div>
							</div>

							<div class="form-group row">
								<label class="col-sm-4 col-form-label" for="email">Hộp thư điện tử</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" id="email" name="email" placeholder="Hộp thư điện tử" />
								</div>
							</div>

							<div class="form-group row">
								<label class="col-sm-4 col-form-label" for="diachi">Địa chỉ</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" id="diachi" name="diachi" placeholder="Địa Chỉ" />
								</div>
							</div>

							<div class="form-group row">
								<label class="col-sm-4 col-form-label" for="namsinh">Năm sinh</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" id="namsinh" name="namsinh" placeholder="Năm sinh" />
								</div>
							</div>
							
							<div class="form-group row">
								<label class="col-sm-4 col-form-label" for="cccd">CCCD</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" id="cccd" name="cccd" placeholder="CCCD" />
								</div>
							</div>

							<div class="form-group row">
								<label class="col-sm-4 col-form-label" for="chungchi">Loại chứng chỉ</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" id="chungchi" name="chungchi" placeholder="Loại chứng chỉ" />
								</div>
							</div>

							<div class="form-group row">
								<label class="col-sm-4 col-form-label" for="password">Mật khẩu</label>
								<div class="col-sm-5">
									<input type="password" class="form-control" id="password" name="password" placeholder="Mật khẩu" />
								</div>
							</div>

							<div class="form-group row">
								<label class="col-sm-4 col-form-label" for="confirm_password">Nhập lại mật khẩu</label>
								<div class="col-sm-5">
									<input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Nhập lại mật khẩu" />
								</div>
							</div>

							<div class="form-group form-check">
								<div class="col-sm-5 offset-sm-4">
									<input class="form-check-input" type="checkbox" id="agree" name="agree" value="agree" />
									<label class="form-check-label" for="agree">Đồng ý các quy định của chúng tôi</label>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-5 offset-sm-4">
									<button type="submit" class="btn btn-primary" name="signup" value="Sign up">Đăng ký</button>
								</div>
							</div>

                            <div class="row">
                                <div class="col-sm-5 offset-sm-8">
                                    <a href="index.php" style="list-style-type: none;">
                                        <b
                                        >Quay về Trang chủ</b>
                                    </a>
                                </div>
                            </div>

						</form>
					</div>
				</div>
			</div> <!-- Cột nội dung -->
		</div> <!-- Dòng nội dung -->
	</div> <!-- Container -->

	
</body>
</html>