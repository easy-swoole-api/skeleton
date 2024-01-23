<?php
declare(strict_types=1);

namespace App\Crontab;

use EasySwoole\Crontab\JobInterface;

class DemoCrontab implements JobInterface
{
    public function jobName(): string
    {
        return 'demo';
    }

    public function crontabRule(): string
    {
        return '* * * * *';
    }

    public function run()
    {
        go(function () {
            echo date('Y-m-d H:i:s') . " Welcome to use EasySwoole API Framework ^_^ [Crontab]\n";
        });
    }

    public function onException(\Throwable $throwable)
    {
        throw $throwable;
    }
}
