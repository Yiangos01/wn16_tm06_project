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
 <nav class="navbar navbar-inverse navbar-static-top">
 <div class="container">
   <a href="#" class="navbar-brand ">POS</a>
     <button class = "navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
     </button>
     <div class="collapse navbar-collapse navHeaderCollapse">
       <ul class="nav navbar-nav navbar-right">
         <li class="active"><a href="#">home</a></li>
         <li><a href="#">home</a></li>
         <li><a href="#">help</a></li>
         <li class="dropdown">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings<span class="caret"></span></a>
           <ul class="dropdown-menu">
             <li><a href="#">Twitter</a></li>
             <li><a href="#">Facebook</a></li>
           </ul>
         </li>
       </ul>
     </div>
   </div>
 </nav>
