<?php 

require_once(__DIR__ . '/config.php');

 ?>

<!DOCTYPE html>
<html>
  <head>
    <title>今日の内番</title>
    <link rel='stylesheet' href='<?php echo h($css); ?>' />
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    
    <script src="<?php echo h($js); ?>jquery-3.3.1.min.js"></script>
    <script src="<?php echo h($js); ?>getWord.js"></script>
    <script src="<?php echo h($js); ?>uchiban.js"></script>
  </head>
  <body>
    <header><h1>今日の内番</h1></header>
    <main>
    <p id="token"><?php echo '今日の内番をランダムできめるぜ！'; ?></p>
    <input type="button" id="start" value="start" class="btn bt-start">
    </main>
  </body>
</html>
