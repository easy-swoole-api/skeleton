<?php
declare(strict_types=1);

namespace App\Exception\HttpException;

use EasySwoole\EasySwoole\Trigger;
use EasySwoole\Http\Message\Status;
use EasySwoole\Http\Request;
use EasySwoole\Http\Response;
use EasySwooleApi\Core\Env\EnvManager;
use Throwable;

class Handler
{
    public static function handler(Throwable $throwable, Request $request, Response $response)
    {
        $response->withStatus(Status::CODE_INTERNAL_SERVER_ERROR);
        if (EnvManager::isDevMode() || EnvManager::isTestMode()) {
            $response->write(nl2br($throwable->getMessage() . "\n" . $throwable->getTraceAsString()));
        } else {
            $response->write('error');
        }
        Trigger::getInstance()->throwable($throwable);
    }
}
