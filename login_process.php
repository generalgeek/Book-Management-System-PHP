<meta charset="utf-8">
<?php
$con = mysqli_connect("localhost", "root", "root", "tushu") or die("数据库服务器连接错误" . mysqli_connect_error());
mysqli_set_charset($con, "utf8");
$user = $_POST['user'];
$pwd = $_POST['pwd'];
$sql = "select * from account where user='$user'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_object($result);
$got_pwd = $row->pwd;
if ($got_pwd == $pwd) {   //核对账号密码
    echo "<script>alert('登录成功!');window.location.href='main.php';</script>";/*登录成功就进入图书管理页面*/
} else {
    echo "<script>alert('登录失败！账号或密码错误');history.back();window.location.href='login.php';</script>";/*登录失败返回登录页面*/
}
mysqli_free_result($result);
mysqli_close($con);
?>