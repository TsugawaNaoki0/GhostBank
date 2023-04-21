<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./main.css">
    <title>REGISTER</title>
  </head>
  <body>
    <div class="main">
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="top">
      <h1>登録</h1>
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
      <textarea name="text" value="" class="register" cols="50" rows="10"></textarea>
      <input type="submit" name="" value="検索" class="register_button">
      <br>
      <br>
      <?php
        // $word = '123';
        $word = $_POST[text];
        // echo $word[0];
        // echo $word[1];
        // echo $word[2];
        // echo $word[3];
        // echo $word[4];
        // echo $word[5];
        // echo $word[6];
        // echo $word[7];
        // echo $word[8];
        // echo empty($word[9]);
        // echo $word[10];
        // echo $word[11];
        // echo $word[12];
        // echo $word[13];
        $str = "";
        $word_array = [];




        // echo $word;
        for ($i = 0; $i < count($word); $i++){
          if($word[$i] != "\n"){
            $str += $word[$i];
          }else{
            array_push($word_array, $str);
            $str = "";
          }
        }
        // echo gettype($word);
        // $word_array = explode(" ", $word);
        // echo gettype($word_array);
        // echo $word_array[0][4];
        echo $word_array[0];
        echo $word_array[1];
        echo $word_array[2];
        echo $word_array[3];
        echo $word_array[4];
        echo $word_array[5];
        echo $word_array[6];
        echo $word_array[7];
        echo $word_array[8];
        echo $word_array[9];
        echo $word_array[10];
        echo $word_array[11];
        echo $word_array[12];
        // echo count($word_array);
        echo "<textarea cols='25' rows='30'>";

        for ($num = 0; $num < count($word_array); $num++){
          // print $num;
          // echo shell_exec("export LANG=ja_JP.UTF-8; python3 register.py ".$word_array[$num]);
        }
        // echo $command;
        echo "</textarea>";

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
