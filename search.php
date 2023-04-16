<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./home.css">
    <title>SEARCH</title>
  </head>
  <body>
    <div class="main">
      <form class="" action="" method="post">
        <div class="">
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <input type="text" name="text" value="" class="login">
          <input type="submit" name="" value="検索" class="login">
          <?php


        $word = $_POST[text];

        echo shell_exec("export LANG=ja_JP.UTF-8; python3 search.py ".$word);

            ?>
        　<br>
        </div>
      </form>
      <br>
      <br>
      <br>
      <br>
      <br>
        <br>
        <br>
        <hr>
        <br>
      <br>
      <br>
      <br>
      <br>
      <br>

    </div>

  </body>
</html>
