<?php
  $str = file_get_contents('https://api.foody.com.cy/branch/multimenu/13?auth=c237b4132fff95103441b7231417f7bf39de9e04&skey=SKEY_5823119c798fd&XDEBUG_SESSION_START=PHPSTORM');
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
