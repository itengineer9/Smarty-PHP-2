<?php

require 'classes/Smarty.class.php';
$smarty = new Smarty();

//if(isset($_GET['nav'])){
//    $nav = $_GET['nav'];
//} else {
//    $nav = 'startseite';
//}
//
//switch ($nav){
//    case 'kontakt':
//        $content_str = $smarty->fetch('kontakt.html');
//        break;
//    case 'impressum':
//        $content_str = $smarty->fetch('impressum.html');
//        break;
//    default :
//        $content_str = $smarty->fetch('startseite.html');
//        break;
//}
//$smarty->
        
$smarty->display('layout.tpl');
