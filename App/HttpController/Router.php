<?php
declare(strict_types=1);

namespace App\HttpController;

use EasySwoole\Http\AbstractInterface\AbstractRouter;
use EasySwoole\Http\Message\Status;
use EasySwoole\Http\Request;
use EasySwoole\Http\Response;
use FastRoute\RouteCollector;
use EasySwooleApi\Core\Router\RouterManager;

class Router extends AbstractRouter
{
    public function initialize(RouteCollector $routeCollector)
    {
        $this->setGlobalMode(true);
        $this->setMethodNotAllowCallBack(function (Request $request, Response $response) {
            $response->withStatus(Status::CODE_NOT_FOUND);
            return false;
        });
        $this->setRouterNotFoundCallBack(function (Request $request, Response $response) {
            $response->withStatus(Status::CODE_NOT_FOUND);
            return false;
        });

        RouterManager::getInstance()->registerRoute($routeCollector);
    }
}
