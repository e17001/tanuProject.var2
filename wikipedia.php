<?php
  $keyword = "キーワード";
  
  $json = file_get_contents("https://ja.wikipedia.org/w/api.php?action=query&format=json&prop=extracts&redirects=1&explaintext=1&titles=".urlencode($keyword));
  $wiki = json_decode($json, true);
  $page = current(array_slice($wiki['query']['pages'], 0, 1, true));
  $title = $page['title'];
  $body = rtrim(strstr($page['extract'], "==", true), "\n");
  
  // 例
  echo "$titleとは...<br>\n$body";