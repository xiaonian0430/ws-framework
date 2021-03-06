<?php
/**
 * 启动文件
 * @author: Xiao Nian
 * @contact: xiaonian030@163.com
 * @datetime: 2021-09-14 10:00
 */

ini_set('display_errors', 'on');
use Workerman\Worker;

if(strpos(strtolower(PHP_OS), 'win') === 0) {
    exit("start.php not support windows, please use start_for_win.bat\n");
}

// 检查扩展
if(!extension_loaded('pcntl')) {
    exit("Please install pcntl extension.\n");
}

if(!extension_loaded('posix')) {
    exit("Please install posix extension.\n");
}

// 标记是全局启动
define('GLOBAL_START', 1);
require_once __DIR__ . '/core/autoload.php';

// 加载所有app/*/start.php，以便启动所有服务
foreach(glob(__DIR__.'/app/*/start*.php') as $start_file) {
    require_once $start_file;
}

// 运行所有服务
Worker::runAll();
