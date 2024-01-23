<?php
declare(strict_types=1);
return [
    'enable'            => true,
    'allow_mode'        => [\EasySwooleApi\Core\Env\EnvManager::RUN_MODE_DEV],
    'monitor_dir'       => EASYSWOOLE_ROOT . "/App",
    'on_change_handler' => [\App\HotReload\FileWatcher::class, 'onChange'],
];
