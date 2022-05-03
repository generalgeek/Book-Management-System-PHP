<meta charset="utf-8">
<title>会员注册</title>
<h1 align="center">会员注册</h1>
<script language="JavaScript">
    function mycheck(form) {
        if (form2.user.value == "") {
            alert("请输入账号！");
            form2.user.focus();
            return false;
        } else if (form2.pwd.value == "") {
            alert("请输入密码！");
            form2.lyq.focus();
            return false;
        } else if (form2.pwd1.value == "") {
            alert("请再次输入密码！");
            form2.pwd1.focus();
            return false;
        } else if (form2.username.value == "") {
            alert("请输入姓名！");
            form2.username.focus();
            return false;
        } else if (form2.qq.value == "") {
            alert("请输入QQ号！");
            form2.qq.focus();
            return false;
        } else if (form2.phone.value == "") {
            alert("请输入联系方式！");
            form2.phone.focus();
            return false;
        } else if (form2.mail.value == "") {
            alert("请输入电子邮箱！");
            form2.mail.focus();
            return false;
        } else if (form2.pwd.value != form2.pwd1.value) {
            alert("两次密码不正确！");
            form2.pwd.focus();
            return false;
        }
        form2.submit();
    }
</script>
<form name="form2" method="post" action="resgite_process.php">
    <table align="center">
        <tr>
            <td>请输入账号:</td>
            <td><input name="user" type="text"></td>
        </tr>
        <tr>
            <td>请输入密码:</td>
            <td><input name="pwd" type="text"></td>
        </tr>
        <tr>
            <td>请确认密码:</td>
            <td><input name="pwd1" type="text"></td>
        </tr>
        <tr>
            <td>真实姓名:</td>
            <td><input name="username" type="text"></td>
        </tr>
        <tr>
            <td>性别:</td>
            <td colspan="2"><input name="sex" type="radio" value="男" checked>男
                <input type="radio" name="sex" value="女">女
            </td>
        </tr>
        <tr>
            <td>QQ:</td>
            <td><input name="qq" type="text"></td>
        </tr>
        <tr>
            <td>联系方式:</td>
            <td><input name="phone" type="text"></td>
        </tr>
        <tr>
            <td>电子邮箱:</td>
            <td><input name="mail" type="text"></td>
        </tr>
        <tr>
            <td><input name="re" type="reset" value="重置表单"></td>
            <td align="center"><input name="resgite" type="submit" value="确定注册" onclick="return mycheck(form)"></td>
        </tr>
    </table>
</form>
