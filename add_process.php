<meta charset="utf-8">
<?php
$con = mysqli_connect("localhost", "root", "root", "tushu") or die("数据库服务器连接错误" . mysqli_connect_error());
mysqli_set_charset($con, "utf8");
$bookname = $_POST['bookname'];
$price = $_POST['price'];
$date = $_POST['date'];
$publisher = $_POST['publisher'];
$sql = "insert into book (bookname,price,date,publisher)
    values ('$bookname','$price', '$date', '$publisher')";
$result = mysqli_query($con, $sql);
if ($result) {
    echo "<script>alert('添加成功!');window.location.href='main.php';</script>";
} else {
    echo "<script>alert('添加失败！');history.back();window.location.href='add_book.php';</script>";
}
mysqli_free_result($result);
mysqli_close($con);
?>