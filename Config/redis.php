<?php
/**
 * Note:     [Description]
 * Author:   longhui.huang <1592328848@qq.com>
 * DateTime: 2024/1/19 09:19
 */
declare(strict_types=1);
return [
    'default' => [
        'driverClass'       => \EasySwoole\RedisPool\RedisPool::class,
        'host'              => '127.0.0.1',
        'port'              => 6379,
        'auth'              => '',
        'db'                => 0,
        'serialize'         => \EasySwoole\Redis\Config\RedisConfig::SERIALIZE_NONE,
        'timeout'           => 3.0,
        'reconnectTimes'    => 3,
        'packageMaxLength'  => 1024 * 1024 * 2,
        'intervalCheckTime' => 15 * 1000,
        'maxIdleTime'       => 10,
        'maxObjectNum'      => 20,
        'minObjectNum'      => 5,
        'getObjectTimeout'  => 3.0,
        'loadAverageTime'   => 0.001,
    ]
];
