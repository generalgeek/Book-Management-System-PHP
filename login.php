<meta charset="utf-8">
<title>登录</title>
<h1 align="center">会员登陆</h1>
<?php unset($_SESSION) ?>
<script language="JavaScript">
    function mycheck(form) {
        if (form1.user.value==""){
            alert("请输入账号！");
            form1.user.focus();
            return false;
        }
        else if (form1.pwd.value=="") {
            alert("请输入密码！");
            form1.pwd.focus();
            return false;
        }
        form1.submit();
    }
</script>
<form name="form1" method="post" action="login_process.php">
    <table align="center">
        <tr>
            <td>用户名：</td><td><input name="user" type="text" ></td>
        </tr>
        <tr>
            <td>密码：</td><td><input name="pwd" type="password" ></td>
        </tr>
        <tr>
            <td><input name="login" type="submit" value="登录" onclick="return mycheck(form)"></td>
            <td><a href="regist.php">没有账号？注册账号</a></td>
        </tr>
    </table>
</form>