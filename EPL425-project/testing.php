<?php
  $str = file_get_contents('https://api.foody.com.cy//orders/resume/57?auth=fe5df6b03af002742b6539e6122009e35538b24c&skey=SKEY_5821cb5262f35&XDEBUG_SESSION_START=PHPSTORM');
  $json = json_decode($str,true);
  echo '<pre>' . print_r($json,true) . '</pre>';
 ?>
