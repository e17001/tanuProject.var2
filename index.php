<?php 

require_once(__DIR__ . '/config.php');

 ?>

<!DOCTYPE html>
<html>
  <head>
    <title>近侍のたぬき</title>
    <link rel='stylesheet' href='<?php echo h($css); ?>' />
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    
    <script src="<?php echo h($js); ?>jquery-3.3.1.min.js"></script>
    <script src="<?php echo h($js); ?>getWord.js"></script>
    <script src="<?php echo h($js); ?>uchiban.js"></script>
  </head>
  <body>
    <header><h1>近侍のたぬき</h1></header>
    <main>
      <p>使いたい機能を選んでください</p>

      <p><a href="uchiban.php">今日の内番</a></p>
      <p><a href="talking.php">おしゃべり正国くん</a></p>
    </main>
  </body>
</html>
