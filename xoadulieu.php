<?php
include_once("connect.php");
session_start();

$maSV=$_GET["idSV"];

$sql = "DELETE FROM sinhvien WHERE idSV = '$maSV' ";

if (mysqli_query($conn,$sql))
{
    header('location: admin.php');
}
else
{
    $result = "Xóa không thành công" . mysqli_error($conn);
}

mysqli_close($conn);
?>
