<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>
<body>


<?php
require_once __DIR__.'/boot.php';

$user = null;

if (check_auth()) {
    // Получим данные пользователя по сохранённому идентификатору
    $stmt = pdo()->prepare("SELECT * FROM `users` WHERE `id` = :id");
    $stmt->execute(['id' => $_SESSION['user_id']]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>


<?php if ($user) { ?>

    <h1>Welcome back, <?=htmlspecialchars($user['username'])?>!</h1>

    <form class="mt-5" method="post" action="do_logout.php">
        <button type="submit" class="btn btn-primary">Logout</button>
    </form>

    <?php  include 'main.php'?>

<?php } else { ?>



<div class="container p-5">
<h1 class="mb-5">Регистрация</h1>

<?php flash(); ?>

<form method="post" action="do_register.php">
  <div class="mb-3">
    <label for="username" class="form-label">Логин</label>
    <input type="text" class="form-control" id="username" name="username" required>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Пароль</label>
    <input type="password" class="form-control" id="password" name="password" required>
  </div>
  <div class="d-flex justify-content-start">
  <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
</div>

<div class="p-5 border-bottom">
<h5>У вас уже есть аккаунт? Войдите</h5>
<div class="d-flex justify-content-start p-3">
  <a class="btn btn-outline-primary" href="login.php">ВОЙТИ</a>
  </div>
  </div>

</form>
</div>

<?php } ?>

    
</body>
</html>

