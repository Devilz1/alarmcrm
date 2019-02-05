<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style.css">
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script>
        $(function () {
            $(".form__submit").on("click", function () {
                $.ajax({
                    type: "POST",
                    url: "Zodiak.php",
                    data: $("#myForm").serialize(),
                    success: function(msg){
                        $(".conclusion__text").empty().append(msg);
                    }
                });
            });
        });
    </script>
    <title>Task #2</title>
</head>
<body>
    <nav>
        <a href="../index.php">Назад</a>
    </nav>
    <div class="task-2">
        <div class="task-2__form">
            <h2 class="form__title">Узнайте кто вы по знаку зодиака!</h2>
            <form action="Zodiak.php" method="post" name="myForm" id="myForm">
                <label for="dateZodiac">Введите дату рождения</label><br><br>
                <input type="date" id="dateZodiac" name="zodiak" required><br><br>
                <button type="button" class="form__submit">Узнать!</button>
            </form>
        </div>
        <div class="task-2__conclusion">
            <h2 class="conclusion__text"></h2>
        </div>
    </div>
</body>
</html>