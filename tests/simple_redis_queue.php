<?php
/**
 * Created by PhpStorm.
 * User: Jenner
 * Date: 14-11-10
 * Time: 下午8:32
 */

define('DS', DIRECTORY_SEPARATOR);
require dirname(__FILE__) . DS . 'vendor' . DS . 'autoload.php';
error_reporting(E_ALL);


$redis_queue = new \Jenner\Zebra\MessageQueue\RedisMessageQueue();

for($i=0; $i<100; $i++){
    $flag = $redis_queue->put(mt_rand(0, 100));
    var_dump($flag);
}

for($j=0; $j<100; $j++){
    $value = $redis_queue->get();
    var_dump($value);
}
