<?php

use EasySwoole\Log\LoggerInterface;

return [
    'SERVER_NAME' => "EasySwooleApi",
    'MAIN_SERVER' => [
        'LISTEN_ADDRESS' => '0.0.0.0',
        'PORT'           => 9501,
        'SERVER_TYPE'    => EASYSWOOLE_WEB_SERVER, //可选为 EASYSWOOLE_SERVER  EASYSWOOLE_WEB_SERVER EASYSWOOLE_WEB_SOCKET_SERVER
        'SOCK_TYPE'      => SWOOLE_TCP,
        'RUN_MODEL'      => SWOOLE_PROCESS,
        'SETTING'        => [
            'worker_num'    => swoole_cpu_num(),
            'reload_async'  => true,
            'max_wait_time' => 3
        ],
        'TASK'           => [
            'workerNum'     => config('asyncTask.enable') ? config('asyncTask.workerNum') : 0,
            'maxRunningNum' => config('asyncTask.maxRunningNum'),
            'timeout'       => config('asyncTask.timeout')
        ]
    ],
    "LOG"         => [
        'dir'            => null,
        'level'          => LoggerInterface::LOG_LEVEL_DEBUG,
        'handler'        => null,
        'logConsole'     => true,
        'displayConsole' => true,
        'ignoreCategory' => []
    ],
    'TEMP_DIR'    => null
];
