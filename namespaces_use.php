<?php

declare(strict_types=1);

namespace App\Domain\Forum;
class Message
{}

use \App\Domain\Forum;
$message  = new Message;
var_dump(get_class($message));


$date = new \DateTime();
var_dump(get_class($date));