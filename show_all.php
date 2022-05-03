<meta charset="utf-8">
<title>主页面</title>
<meta http-equiv="refresh" content="20"><!--每20秒刷新一次页面-->
<h1 align="center">图书基本信息</h1>
<body>
<form name="form1" method="post" action="#">
    <table align="center">
        <tr>
            <td align="left"><a href="main.php" style="font-size: 14px;color: green">« 返回上一级</a></td>
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
        if ($_GET['page'] == "") {
            $_GET['page'] = 1;
        }
        if (is_numeric($_GET['page'])) {
            $page_size = 10;
            $query = "select id from book order by id asc";
            $result = mysqli_query($con, $query);
            $message_count = mysqli_num_rows($result);
            $page_count = ceil($message_count / $page_size);
            $offset = ($_GET['page'] - 1) * $page_size;
            $sql = mysqli_query($con, "select * from book order by id asc limit $offset,$page_size");
            $row = mysqli_fetch_object($sql);
            if (!$row) {
                echo "暂无图书信息!";
            }
            do {
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
            } while ($row = mysqli_fetch_object($sql));
        }
        ?>
    </table>
    <table align="center" width="800">
        <tr>
            <td align="left" width="600" style="color: deepskyblue">页次:<?php echo $_GET['page']; ?>
                /<?php echo $page_count; ?>页 记录:<?php echo $message_count; ?>条
            </td>
            <td align="right" width="200">
                <?php
                if ($_GET['page'] != 1) {
                    echo "<a href=show_all.php?page=1 style='color: deepskyblue'>首页</a>";
                    echo "<a href=show_all.php?page=" . ($_GET['page'] - 1) . " style='color: deepskyblue'>上一页</a>";
                }
                if ($_GET['page'] < $page_count) {
                    echo "<a href=show_all.php?page=" . ($_GET['page'] + 1) . " style='color: deepskyblue'>下一页&nbsp;&nbsp;&nbsp;&nbsp;</a>";
                    echo "<a href=show_all.php?page=" . $page_count . " style='color: deepskyblue'>尾页</a>";
                }
                mysqli_free_result($sql);
                mysqli_close($con);
                ?>
            </td>
        </tr>
    </table>
</form>
</body>
