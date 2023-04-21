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
      <h1>並べ替え</h1>
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
      <br>
      <input type="text" name="text" value="" class="sort">
      <input type="submit" name="" value="検索" class="sort_button">
      <br>
      <br>
      <?php
        // $word = '123';
        $word = $_POST[text];
        $command="python3 sort.py ".$word;
        echo shell_exec("export LANG=ja_JP.UTF-8; python3 sort.py ".$word);
        // echo $command;
        ?>
      　<br>
      </form>
    </div>
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
      <br>
      <br>
      <br>
      </div>
    </div>
  </body>
</html>
