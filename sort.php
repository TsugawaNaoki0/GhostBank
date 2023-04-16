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
          <a href="./search.php">検索</a>
          <br>
          <br>
          <br>
          <br>
          <input type="text" name="text" value="" class="login">
          <input type="submit" name="" value="検索" class="login">
          <?php


        // $word = '123';
        $word = $_POST[text];

        $command="python3 sort.py ".$word;
        echo shell_exec("export LANG=ja_JP.UTF-8; python3 sort.py ".$word);
        // echo $command;

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
