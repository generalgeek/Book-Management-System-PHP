<meta charset="utf-8">
<?php
$con = mysqli_connect("localhost", "root", "root", "tushu") or die("数据库服务器连接错误" . mysqli_connect_error());
mysqli_set_charset($con, "utf8");
$user = $_POST['user'];
$pwd = $_POST['pwd'];
$name = $_POST['username'];
$sex = $_POST['sex'];
$QQ = $_POST['qq'];
$phone = $_POST['phone'];
$mail = $_POST['mail'];
$sql = "insert into account (user,pwd,name,sex,qq,phone,mail) values ('$user','$pwd','$name','$sex','$QQ','$phone','$mail')";
$result = mysqli_query($con, $sql);
if ($result){
    echo "<script>alert('注册成功!');window.location.href='login.php';</script>";
}else{
    echo "<script>alert('注册失败!账号重复！');history.back();window.location.href='regist.php';</script>";
}
mysqli_free_result($result);
mysqli_close($con);
?>