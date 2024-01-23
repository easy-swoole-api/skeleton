<?php
declare(strict_types=1);

namespace App\HttpController;

use EasySwoole\Component\Context\ContextManager;
use EasySwooleApi\Core\Controller\BaseController;

class Index extends BaseController
{
    public function index()
    {
        $file = EASYSWOOLE_ROOT . '/vendor/easyswoole/easyswoole/src/Resource/Http/welcome.html';
        if (!is_file($file)) {
            $file = EASYSWOOLE_ROOT . '/src/Resource/Http/welcome.html';
        }
        $this->response()->write(file_get_contents($file));
    }

    public function hello()
    {
        $routerParams = ContextManager::getInstance()->get(Router::PARSE_PARAMS_CONTEXT_KEY);
        $id           = $routerParams['id'] ?? null;
        $name         = $routerParams['name'] ?? null;
        if ($this->_request->isGet()) {
            return response("[Api][{$this->_request->method()}] The id is {$id}, Welcome to use EasySwoole API Framework ^_^.");
        } else if ($this->_request->isPost()) {
            return response("[Api][{$this->_request->method()}] Hello {$name}, Welcome to use EasySwoole API Framework ^_^.");
        }
    }

    protected function actionNotFound(?string $action)
    {
        $this->response()->withStatus(404);
        $file = EASYSWOOLE_ROOT . '/vendor/easyswoole/easyswoole/src/Resource/Http/404.html';
        if (!is_file($file)) {
            $file = EASYSWOOLE_ROOT . '/src/Resource/Http/404.html';
        }
        $this->response()->write(file_get_contents($file));
    }
}
