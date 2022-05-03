<meta charset="utf-8">
<form name="form1" method="post" action="#">
    <table align="center">
        <tr>
            <td align="left"><a href="seek_book.php" style="font-size: 14px;color: green">« 返回上一级</a> </td>
        </tr>
        <tr>
            <td align="center" width="150" style="font-size: 20px;font-family: 黑体;color: salmon">书名</td>
            <td align="center" width="150" style="font-size: 20px;font-family: 黑体;color: salmon">图价格</td>
            <td align="center" width="150" style="font-size: 20px;font-family: 黑体;color: salmon">出版日期</td>
            <td align="center" width="300" style="font-size: 20px;font-family: 黑体;color: salmon">出版社</td>
            <td style="font-size: 20px;font-family: 黑体;color: salmon">操作</td>
        </tr>
        <?php
        $con = mysqli_connect("localhost", "root", "root", "tushu") or die("数据库服务器连接错误" . mysqli_connect_error());
        mysqli_set_charset($con, "utf8");
        $bookname = $_POST['bookname'];
        $pattern = $_POST['pattern'];
        switch ($pattern)
        {
            case "普通查找":
                $sql = "select * from book where bookname='$bookname'";
                break;
            case "模糊查找":
                $sql = "select * from book where bookname like '%$bookname%'";
                break;
        }
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_object($result);
        if (!$row){
            echo "<script>alert('无查找结果');window.location.href='seek_book.php';</script>";
        }
        do{
        ?>
            <tr>
                <td style="text-align: center"><?php echo $row->bookname; ?></td>
                <td style="text-align: center"><?php echo $row->price; ?></td>
                <td style="text-align: center"><?php echo $row->date; ?></td>
                <td style="text-align: center"><?php echo $row->publisher; ?></td>
                <td align="center"><a href="modify.php?id=<?php echo $row->id; ?>">修改</a></td>
                <td align="center"><a href="delete.php?id=<?php echo $row->id; ?>">删除</a></td>
            </tr>
        <?php
        }while($row = mysqli_fetch_object($result));
        mysqli_free_result($result);
        mysqli_close($con);
        ?>
    </table>
</form>