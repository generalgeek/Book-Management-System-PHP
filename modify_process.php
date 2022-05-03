<meta charset="utf-8">
<?php
$con = mysqli_connect("localhost", "root", "root", "tushu") or die("数据库服务器连接错误" . mysqli_connect_error());
mysqli_set_charset($con, "utf8");
$id = $_POST['id'];
$bookname = $_POST['bookname'];
$price = $_POST['price'];
$date = $_POST['date'];
$publisher = $_POST['publisher'];
$sql = "update book set bookname='$bookname', price='$price', 
    date='$date',publisher='$publisher' where id='$id'";
$result = mysqli_query($con, $sql);
if ($result) {
    echo "<script>alert('修改成功!');window.location.href='main.php';</script>";
} else {
    echo "<script>alert('修改失败！');history.back();window.location.href='modify.php';</script>";
}
mysqli_free_result($result);
mysqli_close($con);
?>