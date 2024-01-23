<?php
declare(strict_types=1);

namespace App\Router;

use EasySwoole\Http\Request;
use EasySwoole\Http\Response;
use EasySwooleApi\Core\Router\IRouterInterface;
use FastRoute\RouteCollector;
use function json;
use function response;

class DemoRouter implements IRouterInterface
{
    public function register(RouteCollector &$routeCollector): void
    {
        $routeCollector->get('/', '/');

        $routeCollector->addRoute('GET', '/hello/{id:\d+}', '/Index/hello');
        $routeCollector->addRoute('POST', '/hello/{name}', '/Index/hello');

        $routeCollector->addRoute('GET', '/json', function (Request $request, Response $response) {
            return json('This is json.');
        });

        $routeCollector->addRoute('GET', '/text', function (Request $request, Response $response) {
            return response('This is simple text.');
        });
    }
}
