<?php
include_once("connect.php");
session_start();

if (isset($_POST["btnSave"]))
{
    //lay du lieu tren form luu vao bien
    $maSV = $_POST["txt_maSV"];
    $tenSV = $_POST["txt_tenSV"];
    $gioitinh = $_POST["rd_gt"];
    $diachi = $_POST["txt_diachi"];
    $ngaysinh = $_POST["txt_date"];
    $cccd = $_POST["txt_cccd"];
}
//truy van du lieu
$sql = "INSERT INTO sinhvien VALUES ('$maSV', '$tenSV', '$gioitinh', '$diachi', '$ngaysinh', '$cccd')";
if(mysqli_query($conn, $sql))
{
    header('location: admin.php');
}
else {
    $result = "Lỗi thêm mới" . mysqli_error($conn);
}
?>