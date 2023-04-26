<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <center>
    <form class="" action="" method="post">
    <input type="text" name="text" value="" class="sort">
    <input type="submit" name="" value="実行" class="sort_button">
    <br>
    <br>
    <?php
      $word = $_POST["text"];
      $command="python3 sort.py ".$word;
      echo shell_exec("export LANG=ja_JP.UTF-8; python3 sort.py ".$word);
      ?>
    </form>
  </center>
  </body>
</html>
