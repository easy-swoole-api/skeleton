<?php
declare(strict_types=1);
return [
    [
        'enable'                => false,
        'process_name'          => '',
        'process_group'         => '',
        'arg'                   => [],
        'redirect_stdin_stdout' => false,
        'pipe_type'             => \EasySwoole\Component\Process\Config::PIPE_TYPE_SOCK_DGRAM,
        'enable_coroutine'      => false,
        'max_exit_wait_time'    => 3,
        'class'                 => \App\Process\DemoProcess::class,
    ]
];
