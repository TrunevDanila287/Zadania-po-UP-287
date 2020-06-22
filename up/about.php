<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Связь с нами</title>
</head>
<body>
<?php require "bloks/header.php"?>
<div class="container mt-5">
<h3>Контактная форма</h3>
<form action="check.php" method="post">
    <input type="email" name="email" placeholder="Введите Email" class="form-control"><br>
    <textarea name="message" placeholder="Введите ваше сообщение" class="form-control"></textarea><br>
    <button type="submit" name="send" class="btn btn-success">Отправить</button>
</form>
</div>
<?php require "bloks/footer.php"?>
</body>
</head>
</html>

