<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Form</title>
</head>
<body>
<h1>Авторизация</h1>
<form action="make_auth.php" method="POST">
    <input type="text" name="login">
    <input type="password" name="pass">
    <button type="submit">Войти</button>
</form>

<h1>Регистрация</h1>
<form action="check.php" method="POST">
    <input type="text" name="login">
    <input type="password" name="pass">
    <input type="text" name="email">
    <input type="text" name="fname">
    <input type="text" name="lname">
    <button type="submit">Зарегистрироваться</button>
</form>
</body>
</html>