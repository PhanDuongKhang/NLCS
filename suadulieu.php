<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa sinh viên</title>
</head>
<body>
    <?php
    include_once("connect.php");
    session_start();

    $maSV = $_GET["idSV"];
    $sql = "SELECT * FROM sinhvien WHERE idSV = '$maSV' ";
    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($result))
    {
        $maSV = $row["idSV"];
        $tenSV = $row["fullname"];
        $gioitinh = $row["gender"];
        $diachi = $row["address"];
        $ngaysinh = $row["date"];
        $cccd = $row["CCCD"];
    }
    ?>

    <form action="xulysua.php" method="post">
        <table>
            <tr>
                <td colspan="2"><h3>Sửa sinh viên</h3></td>
            </tr>
            <tr>
                <td>ID sinh viên</td>
                <td><input type="text" name="txt_maSV" readonly="readonly" value="<?php echo $maSV ?>" size="30"></td>
            </tr>
            <tr>
                <td>Họ và tên</td>
                <td><input type="text" name="txt_tenSV" value="<?php echo $tenSV ?>" size="30"></td>
            </tr>
            <tr>
                <td>Giới tính</td>
                <td>
                    <input type="radio" name="rd_gt" value="0" <?php echo $gioitinh == 0 ? 'checked' : '' ?> >Nữ
                    <input type="radio" name="rd_gt" value="1" <?php echo $gioitinh == 1 ? 'checked' : '' ?> >Nam
                </td>
            </tr>
            <tr>
                <td>Quê quán</td>
                <td><input type="text" name="txt_diachi" value="<?php echo $diachi ?>" size="30"></td>
            </tr>
            <tr>
                <td>Năm sinh</td>
                <td><input type="year" name="txt_date" value="<?php echo $ngaysinh ?>"></td>
            </tr>
            <tr>
                <td>CCCD</td>
                <td><input type="text" name="txt_cccd" value="<?php echo $cccd ?>" size="30"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" id="btn" name="btnSave" value="Save">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>