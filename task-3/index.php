<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style.css">
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <title>Task #3</title>
</head>
<body>
<nav>
    <a href="../index.php">Назад</a>
</nav>
    <div class="shadow-mask"></div>
    <div class="window-auth">
        <form action="" class="formAuth">
            <label for="window-auth__login">Логин</label>
            <input type="text" name="login" id="window-auth__login" required>
            <label for="window-auth__password">Пароль</label>
            <input type="password" name="password" id="window-auth__password" required>
            <button type="button" class="window-auth__submit-yes">Войти (Успешно)</button>
            <button type="button" class="window-auth__submit-no">Войти (Не успешно)</button>
        </form>
    </div>

    <div class="window-auth2">
        <div class="result"></div>
    </div>

    <div class="task-3">
        <button class="buttonActive" type="button">Авторизоваться</button>
    </div>
</body>
</html>