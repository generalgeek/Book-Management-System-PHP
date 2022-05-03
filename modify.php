<meta charset="utf-8">
<title>修改页面</title>
<h2 align="center">修改图书信息</h2>
<body>
<?php
$con = mysqli_connect("localhost", "root", "root", "tushu") or die("数据库服务器连接错误" . mysqli_connect_error());
mysqli_set_charset($con, "utf8");
$id = $_GET['id'];
$sql = "select * from book where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_object($result);
?>
<form name="form1" method="post" action="modify_process.php">
    <table align="center">
        <tr>
            <td align="left"><a href="index.php" style="font-size: 14px;color: green">« 返回上一级</a> </td>
        </tr>
        <tr>
            <td>图书名</td>
            <td><input name="bookname" type="text" value="<?php echo $row->bookname; ?>">
                <input name="id" type="hidden" value="<?php echo $row->id; ?>"</td>
        </tr>
        <tr>
            <td>图书号</td>
            <td><input name="price" type="text" value="<?php echo $row->price; ?>">
        </tr>
        <tr>
            <td>出版社</td>
            <td><input name="date" type="text" value="<?php echo $row->date; ?>">
        </tr>
        <tr>
            <td>图书简介</td>
            <td>
                <input name="publisher" cols="50" rows="8" value="<?php echo $row->publisher; ?>"</input>
            </td>
        </tr>
        <tr>
            <td height="40" colspan="2" align="center">
                <input name="Submit" type="submit" value="修改">
                <input name="submit2" type="reset" value="重置">
            </td>
        </tr>
    </table>
</form>
</body>
