<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?echo $page_data['title']?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="./../css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="./../css/styleReg.css"/>
    <script src="main.js"></script>
    
</head>
<body>

    <div id="login">
        <form method="POST" action="/registration/add_user">
            <fieldset class="clearfix">
                <p><span class="fontawesome-user"></span><input type="text" placeholder="Login" name="login" required=""></p> <!-- JS because of IE support; better: placeholder="Username" -->
                <p><span class="fontawesome-user"></span><input type="text" placeholder="Email" id="email" name="email"  onfocus="if(this.value == 'Логин') this.value = ''" required=""></p> <!-- JS because of IE support; better: placeholder="Username" -->
                <p><span class="fontawesome-lock"></span><input type="password" value="Пароль" id="password" name="password" onblur="if(this.value == '') this.value = 'Пароль'" onfocus="if(this.value == 'Пароль') this.value = ''" required=""></p> <!-- JS because of IE support; better: placeholder="Password" -->
                <p><span class="fontawesome-lock"></span><input type="password" value="Пароль" id="password" name="password2" onblur="if(this.value == '') this.value = 'Пароль'" onfocus="if(this.value == 'Пароль') this.value = ''" required=""></p> <!-- JS because of IE support; better: placeholder="Password" -->
                <p><input type="submit" value="Создать пользователя"></p>
            </fieldset>
        </form>
        <p>Есть аккаунт? &nbsp;&nbsp;<a href="/authorization">Вход</a><span class="fontawesome-arrow-right"></span></p>
    </div>

</body>
</html>