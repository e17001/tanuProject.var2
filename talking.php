<?php 

require_once(__DIR__ . '/config.php');
require_once(__DIR__ . '/Talk.php');

$talk = new \MyAPP\Talk();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $talk->post();
}

// $ensei = $talk->getAll();
// var_dump($ensei);
 ?>

<!DOCTYPE html>
<html>
  <head>
    <title>人口無脳たぬき</title>
    <link rel='stylesheet' href='<?php echo h($css); ?>' />
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    
    <script src="<?php echo h($js); ?>jquery-3.3.1.min.js"></script>
    <script src="<?php echo h($js); ?>getWord.js"></script>
    <script src="<?php echo h($js); ?>talking.js"></script>
  </head>
  <body>
    <header><h1>おしゃべり</h1></header>
    <main>
    <p id="token"><?php echo '何か言って！'; ?></p>
    <form action="" id="saniwa_form" method="post">
      <input id="saniwa_message" type="text" name="saniwa_message">
      <input type="hidden" id="mode" name="mode" value="">
      <input type="button" id="btn" value='さにわ' class="btn bt-start">
    </form>

    <p><div id="repeat"></div></p>
    <p id="tanuki"></p>
    </main>
  </body>
</html>
