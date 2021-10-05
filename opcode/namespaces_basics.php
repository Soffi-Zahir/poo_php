<?php

declare(strict_types=1);

namespace Forum;
class Message
{}

namespace Messenger;
class Message
{}


$forumMessage = new \Forum\Message;
$messengerMessage = new \Messenger\Message;
echo 'Current namespace : "', __NAMESPACE__, '"';
$date = new \DateTime();
//with php 7.4

var_dump(get_class($forumMessage));
var_dump(get_class($messengerMessage));

//with php 8.0
//var_dump($forumMessage::class);
//var_dump($messengerMessage::class);