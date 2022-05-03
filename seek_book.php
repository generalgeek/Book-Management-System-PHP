<meta charset="utf-8">
<script language="JavaScript">
    function check(form) {
        if (form1.bookname.value==""){
            alert("不合法的图书名！");
            form1.bookname.focus();
            return false;
        }
        form1.submit();
    }
</script>
<form name="form1" method="post" action="seek_process.php">
    <table align="center">
        <tr>
            <td align="left"><a href="main.php" style="font-size: 14px;color: green">« 返回上一级</a> </td>
        </tr>
        <tr>
            <td style="font-size: 24px">请选择查询模式:&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td colspan="2" style="font-family: 楷体;font-size:20px">
                <input name="pattern" type="radio" value="普通查找" checked>普通查找&nbsp;&nbsp;&nbsp;&nbsp;
                <input name="pattern" type="radio" value="模糊查找">模糊查找
            </td>
        </tr>
        <tr>
            <td style="font-size: 24px">请输入要查找的图书名:</td>
            <td><input name="bookname" type="text"></td>
        </tr>
        <tr>
            <td align="right"><input name="Submit" type="submit" value="查找" onclick="return check(form)"></td>
        </tr>
    </table>
</form>