<?php 
require_once(__DIR__ . '/functions.php');

$css = '/styles.css';

 ?>

<!DOCTYPE html>
<html>
  <head>
    <title>今日の内番</title>
    <link rel='stylesheet' href='<?php echo $css; ?>' />
  </head>
  <body>
    <header><h1>今日の内番</h1></header>
    <main>
    <p id="token"><?php echo '今日の内番をランダムできめるぜ！'; ?></p>
    <input type="button" id="start" value="start" class="btn bt-start">
    </main>
  </body>
</html>
