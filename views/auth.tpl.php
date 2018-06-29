<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?echo $page_data['title']?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="./../css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="./../css/style.css"/>
    <script src="main.js"></script>
</head>
<body>


  	
<header>

</header>

<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4">
                <div class="account-wall">
                    <h1 class="text-center login-title">Вход в личный кабинет</h1>
                    <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                        alt="">
                    <form class="form-signin" method="POST" action="/authorization/login">
                    <input type="text" class="form-control" placeholder="Логин" name="login" id="login" required autofocus>
                    <input type="password" class="form-control" placeholder="Пароль" name="password" id="password" required>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">
                        Войти
                    </button>
                    </form>
                    <p class="text-center">
                    Нет аккаунта?
                    <a href="/registration" class="text-center new-account">Зарегестрируйся</a>
                </p>
                </div>
                
            </div>
        </div>
    </div>
</div>

<footer>
    
</footer>


<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/angular.min.js"></script>
<script src="/js/script.js"></script>


</body>
</html>