<?php
declare (strict_types=1);

spl_autoload_register(function($fqcn){
    $path = str_replace('\\', '/', $fqcn) . '.php';
    require_once($path);
});

//replace this with spl_autoload_register
// include_once('Domain/Forum/Message.php');
// include_once('Domain/User/User.php');

use \Domain\User\User;
use \Domain\Forum\Message; 
use \Domain\Display
$user = new User;
$user->name = "Arthur";

$forumMessage = new Message($user,"This Message is from arthur");

var_dump($forumMessage);
