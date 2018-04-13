<?php 

require_once(__DIR__ . '/config.php');
require_once(__DIR__ . '/Talk.php');

$talk = new \MyAPP\Talk();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $talk->post();
}

if(isset($_SESSION['repeat'])){
  $repeat = $_SESSION['repeat'];
} else {
  $repeat = '';
}

// if(isset($_SESSION['messege'])){
  // $tanuMesseges = $_SESSION['messege'];
  // var_dump($tanuMesseges);
// }

// $ensei = $talk->getAll();
// var_dump($ensei);
 ?>

<!DOCTYPE html>
<html>
  <head>
    <title>人口無脳たぬき</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel='stylesheet' href='<?php echo h($css); ?>' />
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    
    <script src="<?php echo h($js); ?>jquery-3.3.1.min.js"></script>
    <script src="<?php echo h($js); ?>getWord.js"></script>
    <script src="<?php echo h($js); ?>talking.js"></script>
  </head>
  <body>
    <header><h1>おしゃべり</h1></header>
    <main>
    <content>
      <p id="token"><?php echo '何か言って！'; ?></p>
        <input id="input_word" type="text" name="input_word">
        <input type="button" id="btn" value='発言' class="btn bt-start">
      <form action="" id="saniwa_form" method="post">
        <input type="hidden" id="mode" name="mode" value="">
        <input type="hidden" id="saniwa_message" name="saniwa_message" value="">
      </form>
    </content>
    <content id="saniwa">
      <div class="balloon-left"><?php echo $repeat; ?></div>
    </content>
    <content id="tanuki">
      <?php if(isset($_SESSION['messege'])): ?>
        <?php $tanuMesseges = $_SESSION['messege']; ?>
        <?php foreach ($tanuMesseges as $key => $ms) : ?>
          <div style="display: block">
          <div class="balloon-right">
              <?php echo $ms; ?>
          </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </content>
    </main>
  </body>
</html>
