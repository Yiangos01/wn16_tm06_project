<?php
  $str = file_get_contents('https://api.foody.com.cy/branch/multimenu/13?auth=fe5df6b03af002742b6539e6122009e35538b24c&skey=SKEY_5821c4ca697f6&XDEBUG_SESSION_START=PHPSTORM');
  $json = json_decode($str,true);
  //echo '<pre>' . print_r($json,true) . '</pre>';
  foreach ($json['categories'] as $field => $value) {
    $categories=$value;
    echo '<pre>' . print_r($categories['name'],true) . '</pre>';
    foreach ($categories['menuitems'] as $key => $Catvalue) {
      echo '<pre>' . print_r($Catvalue['name'],true) . '</pre>';
    }
}
 ?>
