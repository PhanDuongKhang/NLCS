<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Sinh Viên</title>
</head>
<body>
    <form action="xulydulieuthemsv.php" method="post">
        <table>
            <tr>
                <td colspan="2"><h3>Thêm sinh viên</h3></td>
            </tr>
            <tr>
                <td>ID sinh viên</td>
                <td><input type="text" id="txt_maSV" name="txt_maSV" value="" size="30"></td>
            </tr>
            <tr>
                <td>Họ và tên</td>
                <td><input type="text" id="txt_tenSV" name="txt_tenSV" value="" size="30"></td>
            </tr>
            <tr>
                <td>Giới tính</td>
                <td>
                    <input type="radio" id="rd_gt_0" name="rd_gt" value="0">Nữ
                    <input type="radio" id="rd_gt_1" name="rd_gt" value="1">Nam
                </td>
            </tr>
            <tr>
                <td>Quê quán</td>
                <td><input type="text" id="txt_diachi" name="txt_diachi" value="" size="30"></td>
            </tr>
            <tr>
                <td>Năm sinh</td>
                <td><input type="year" id="txt_date" name="txt_date" value=""></td>
            </tr>
            <tr>
                <td>CCCD</td>
                <td><input type="text" id="txt_cccd" name="txt_cccd" value="" size="30"></td>
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