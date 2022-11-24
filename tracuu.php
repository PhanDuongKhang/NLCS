<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tra cứu</title>
</head>
<body>
    <?php
    include_once("connect.php");
    session_start();
    if(isset($_POST['btnTracuu'])) {
        $cccd=$_POST['cccd'];
    }

    $sql = "SELECT * FROM tracuu  WHERE CCCD = '$cccd' ";
    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($result))
    {
        $txt_kythi = $row["kythi"];
        $txt_tenSV = $row["fullname"];
        $txt_cccd = $row["CCCD"];
        $txt_bang = $row["loaibang"];
    }
    ?>
    <form action="xulytracuusv.php" method="post">
        <table>
            <tr>
                <td colspan="2"><h3>Thông tin tra cứu</h3></td>
            </tr>
            <tr>
                <td>Họ và tên</td>
                <td><input type="text" id="txt_tenSV" name="txt_tenSV" value="<?php echo $txt_tenSV ?>" size="30"></td>
            </tr>
            <tr>
                <td>CCCD</td>
                <td><input type="text" id="txt_cccd" name="txt_cccd" value="<?php echo $txt_cccd ?>" size="30"></td>
            </tr>
            <tr>
                <td>Kỳ thi</td>
                <td><input type="text" id="txt_kythi" name="txtkythi" value="<?php echo $txt_kythi ?>" size="30"></td>
            </tr>
            <tr>
                <td>Loại bằng</td>
                <td><input type="text" id="txt_bang" name="txt_bang" value="<?php echo $txt_bang ?>" size="30"></td>
            </tr>
            <tr>
            <td colspan="2" align="center"><button type="button" onclick="tracuuFunction()">Quay về</button></td>
            </tr>
        </table>
    </form>
</body>
</html>

<script>
    function tracuuFunction() {
        location.replace("user.php");
    }
</script>