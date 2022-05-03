<meta charset="utf-8">
<?php
$con = mysqli_connect("localhost", "root", "root", "tushu") or die("数据库服务器连接错误" . mysqli_connect_error());
mysqli_set_charset($con, "utf8");
$id = $_GET['id'];
$sql = "delete from book where id='$id'";
$result = mysqli_query($con, $sql);
if ($result) {
    echo "<script>alert('删除成功!');history.back();</script>";
} else {
    echo "<script>alert('删除失败！');history.back();</script>";
}
mysqli_free_result($result);
mysqli_close($con);
?>