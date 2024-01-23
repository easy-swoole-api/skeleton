<?php
declare(strict_types=1);

namespace App\Exec\Command;

use EasySwooleApi\Core\Exec\Command\BaseCommand;

class
DemoCommand extends BaseCommand
{
    public function commandName(): string
    {
        return 'demo';
    }

    public function exec(): ?string
    {
        echo "this is demo.";
        return parent::exec();
    }
}
