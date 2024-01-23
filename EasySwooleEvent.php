<?php
declare(strict_types=1);

namespace EasySwoole\EasySwoole;

use EasySwoole\Component\Di;
use EasySwoole\EasySwoole\AbstractInterface\Event;
use EasySwoole\EasySwoole\Swoole\EventRegister;
use EasySwoole\Http\Request;
use EasySwoole\Http\Response;
use EasySwooleApi\Core\Cross\CrossManager;
use EasySwooleApi\Core\Event\GlobalEvent;

class EasySwooleEvent implements Event
{
    public static function initialize()
    {
        // EasySwoole API framework 框架 initialize 事件
        // 一定不能删掉！！！
        // 一定不能删掉！！！
        // 一定不能删掉！！！重要的事情说三遍。
        GlobalEvent::initialize();

        Di::getInstance()->set(SysConst::HTTP_GLOBAL_ON_REQUEST, function (Request $request, Response $response): bool {
            GlobalEvent::initHttpGlobalOnRequest($request, $response);
            $isOk = CrossManager::handleCross($request, $response);
            if (!$isOk) {
                return false;
            }
            return true;
        });

        Di::getInstance()->set(SysConst::HTTP_GLOBAL_AFTER_REQUEST, function (Request $request, Response $response): void {

        });
    }

    public static function mainServerCreate(EventRegister $register)
    {
        // EasySwoole API framework 框架 mainServerCreate 事件
        // 一定不能删掉！！！
        // 一定不能删掉！！！
        // 一定不能删掉！！！重要的事情说三遍。
        GlobalEvent::mainServerCreate();
    }
}
