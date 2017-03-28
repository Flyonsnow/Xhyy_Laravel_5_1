<?php
/**
 * Dev开发环境配置
 */
return [
    'CLIENT_URL' => '*',//客户端域名,js请求跨域使用

    /**
     * DB配置
     */
    'DB_CONNECTION'    => 'mysql',
    'DB_DRIVER'        => 'mysql',
    'DB_HOST'          => '127.0.0.1',
    'DB_DATABASE'      => 'homestead',
    'DB_USERNAME'      => 'homestead',
    'DB_PASSWORD'      => 'secret',
    'DB_PREFIX'        => '',


    /**
     * Redis配置
     */
    'REDIS_HOST'       => '127.0.0.1',
    'REDIS_PASSWORD'   => 'null',
    'REDIS_PORT'       => '6379',
    'REDIS_DATABASE'   => 0, //阿里云Redis支持0-255
];
