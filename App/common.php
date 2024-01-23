<?php
declare(strict_types=1);
if (!function_exists('echo_hello')) {
    function echo_hello()
    {
        echo date('Y-m-d H:i:s') . " Hello EasySwoole API ^_^. [Common Func]\n";
    }
}
