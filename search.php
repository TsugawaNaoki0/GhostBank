<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./main.css">
    <title>SEARCH</title>
  </head>
  <body>
    <div class="main">
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="top">
      <h1>検索</h1>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <hr>
    <div class="middle">
      <form class="" action="" method="post">
        <br>
        <br>
        <br>
        <br>
        <br>
        <input type="text" name="text" value="" class="search">
        <input type="submit" name="" value="検索" class="search_button">
        <?php
          $word = $_POST[text];
          echo shell_exec("export LANG=ja_JP.UTF-8; python3 search.py ".$word);
        ?>
        <br>
      </form>
    </div>
    <br>
    <center>
    <audio controls loop class="audio" src="./music/undercover.mp3"></audio><br>
    <br>
    <img src="./keyboard.png" alt="" class="keyboard" width="40%">
    </center>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      </div>
    </div>
  </body>
</html>
