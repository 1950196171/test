<?php
use Workerman\Worker;
require_once "./Workerman-master/Autoloader.php";

$http_worker = new Worker("http://0.0.0.0:9999");

$http_worker->count = 1;

$http_worker->onConnect = function($connection){
    $connection->send('hello,world');
};
Worker::runAll();
// <?php
// use Workerman\Worker;
// require_once './Workerman-master/Autoloader.php';



// $worker = new Worker('websocket://127.0.0.1:9999');

// $worker->count = 1;

// $worker->onConnect = function($connection) {
//     $connection->send('欢迎{}加入');
// };
// Worker::runAll();

// ?>
