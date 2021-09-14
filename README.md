# ws-framework
一款高性能支持分布式部署的实时通信框架。

## 特性
 * 使用websocket协议
 * 多浏览器支持（浏览器支持html5或者flash任意一种即可）
 * 多房间支持
 * 私聊支持
 * 掉线自动重连
 * 微博图片自动解析
 * 聊天内容支持微博表情
 * 支持多服务器部署

## 下载安装
```
composer config -g repo.packagist composer https://mirrors.aliyun.com/composer/
composer install
```

## 启动停止(Linux系统)

```
#以debug方式启动
php start.php start

#以daemon方式启动
php start.php start -d
```
