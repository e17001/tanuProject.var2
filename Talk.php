<?php 

namespace MyAPP;

class Talk {
  private $_db;

  public function __construct() {
    $this->_connectDB();

  }

  public function post() {
    // echo 'post ok!';
    // var_dump($_POST);
    switch($_POST['mode']) {
      case 'wiki':
        $this->_wiki();

    //   case 'ensei':
    //     return $this->_ensei();
    //   case 'replay':
    //     // var_dump($_POST);
    //     echo 'post ok!';
    //     // return $_POST['message'];
    }
  }

  private function _connectDB() {
    try {
      $this->_db = new \PDO(DSN, DB_USERNAME, DB_PASSWORD);
      $this->_db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
      // echo 'DB ok!';
    } catch (\PDOException $e) {
      echo $e->getMessage();
      exit;
    }
  }

  private function _wiki() {
    $query = $this->_serchWiki();
    // $reqry = makeWikiMessage($query);
    // var_dump($query);

    $_SESSION['repeat'] = $_POST['saniwa_message'];
    $_SESSION['messege'] = array(
      0 => $query['keyword'] . '?</br>調べてくるからちょっと待ってろ！',
      1 => $query['overview'] . '... だとよ。',
      2 => '気になるなら、自分で調べてくれ</br>' . $query['url']
      );

    // var_dump($_SESSION);
  }

  private function _serchWiki() {
      $keyword = $_POST['saniwa_message'];
      $json = file_get_contents("https://ja.wikipedia.org/w/api.php?action=query&format=json&prop=extracts&redirects=1&explaintext=1&titles=".urlencode($keyword));
      $wiki = json_decode($json, true);
      $page = current(array_slice($wiki['query']['pages'], 0, 1, true));

      return array(
      'keyword' => $page['title'],
      'overview' => substr($page['extract'], 0, 100),
      'url' => 'https://ja.wikipedia.org/wiki/' . $page['title']
      );
  }

  private function _makeWikiMessage() {
    
    // return ;
  }

}


 ?>
