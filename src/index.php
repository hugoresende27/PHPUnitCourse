<?php

require 'Queue.php';
$queue = new Queue;
$count = 0;
while ($count < 6) {
    $queue->push($count);
    $count++;
    var_dump($queue);
}