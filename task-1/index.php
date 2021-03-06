<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style.css">
    <script src="script.js"></script>
    <title>Task #1</title>
</head>
<body>
    <nav>
        <a href="../index.php">Назад</a>
    </nav>
    <div class="task-1">
        <div class="task-1__way">
            <fieldset>
                <legend>Способ с нажатием кнопки подсчёта</legend>
                <input type="number" name="kilometre_per_hour" class="task-1__input" placeholder="км/ч" required><br>
                <button type="button" name="counting" class="button">Расчитать</button>
                <p class="task-1__answer"></p>
            </fieldset>
        </div>
        <div class="task-2__way">
            <fieldset>
                <legend>Способ без нажатия кнопки</legend>
                <textarea type="number" name="kilometre_per_hour" class="task-2__input" placeholder="км/ч" required></textarea><br>
                <input type="text" name="meter_per_second" class="task-2__input" placeholder="м/с" disabled><br>
            </fieldset>
        </div>
    </div>
</body>
</html>