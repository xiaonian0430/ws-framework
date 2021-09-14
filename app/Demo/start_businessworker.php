<?php
/**
 * 业务进程
 * @author: Xiao Nian
 * @contact: xiaonian030@163.com
 * @datetime: 2021-09-14 10:00
 */
use \Workerman\Worker;
use \GatewayWorker\BusinessWorker;
use \Workerman\Autoloader;

// bussinessWorker 进程
$worker = new BusinessWorker();

// worker名称
$worker->name = 'ChatBusinessWorker';

// bussinessWorker进程数量
$worker->count = 4;

// 服务注册地址
$worker->registerAddress = '127.0.0.1:51236';

// 如果不是在根目录启动，则运行runAll方法
if(!defined('GLOBAL_START')) {
    Worker::runAll();
}

