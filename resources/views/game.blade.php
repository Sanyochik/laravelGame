<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Кликер</title>
  <link rel="stylesheet" href="/css/style.css">
  <link rel="icon" href="/images/mouse.png">
</head>
<body>
<?php
$money = auth()->user();
$money = $money->money;
$lvl = auth()->user();
$lvl = $lvl->lvl;
?>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<body>
  <main>
    <h1 id ="score">100<img src="images/coins.png"></h1>
    <button id="clickbtn" onclick="clickBtn()">+$</button>
    <br><input type="button" value="Прокачать на 1 уровень|-100$" onclick="update()">
    <br><input type="button" value="Прокачать на 2 уровня|-150$" onclick="update1()">
    <br><input type="button" value="Прокачать на 3 уровня|-250$" onclick="update2()">
    <br><input type="button" value="Прокачать на 10 уровней|-500$" onclick="update3()">
    <br><input type="button" value="Автокликер|-10000$" onclick="auto()">
    <br><input type="button" value="посмотреть прогресс" onclick="reboot()">
      <form action="save.blade.php">
    <br><input type="submit" value="Сохранить текущий прогресс">
      </form>
  <?php
      $user = auth()->user();
      $user->name;
      DB::table('users')->where('name', $user->name)->update(array('money' => $money,'lvl' => $lvl));
  ?>
    <img src="images/profit.png" class="img" onclick="cheat()">
  </main>
</body>
  <script  src="/js/script.js"></script>
</body>
</html>
