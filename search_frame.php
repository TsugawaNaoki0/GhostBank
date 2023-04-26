<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <center>
    <form class="" action="" method="post">
      <input type="text" name="text" value="" class="search">
      <input type="submit" name="" value="検索" class="search_button">
      <?php
        $word = $_POST[text];
        echo shell_exec("export LANG=ja_JP.UTF-8; python3 search.py ".$word);
      ?>
      <br>
    </form>
   </center>
  </body>
</html>
