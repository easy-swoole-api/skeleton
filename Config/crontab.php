<?php
declare(strict_types=1);
return [
    'enable'     => false,
    'worker_num' => 3,
    'crontab'    => [
        \App\Crontab\DemoCrontab::class,
    ]
];
