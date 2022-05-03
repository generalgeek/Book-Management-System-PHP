<meta charset="utf-8">
<h2 align="center">添加图书</h2>
<script language="JavaScript">
    function mycheck(form) {
        if (form1.bookname.value == "") {
            alert("请输入图书名！");
            form1.bookname.focus();
            return false;
        } else if (form1.price.value == "") {
            alert("请输入定价！");
            form1.price.focus();
            return false;
        } else if (form1.date.value == "") {
            alert("请输入出版日期！");
            form1.date.focus();
            return false;
        } else if (form1.publisher.value == "") {
            alert("请输入出版社！");
            form1.publisher.focus();
            return false;
        }
    }
</script>
<form name="form1" method="post" action="add_process.php">
    <table align="center">
        <tr>
            <td align="left"><a href="main.php" style="font-size: 14px;color: green">« 返回上一级</a> </td>
        </tr>
        <tr>
            <td>图书名</td>
            <td><input name="bookname" type="text"></td>
        </tr>
        <tr>
            <td>定价</td>
            <td><input name="price" type="text"></td>
        </tr>
        <tr>
            <td>出版日期</td>
            <td><input name="date" type="text"></td>
        </tr>
        <tr>
            <td>出版社</td>
            <td><input name="publisher" type="text"></input></td>
        </tr>
        <tr>
            <td align="center"><input name="Submit" type="submit" value="提交" onclick="return mycheck(form)"></td>
        </tr>
    </table>
</form>