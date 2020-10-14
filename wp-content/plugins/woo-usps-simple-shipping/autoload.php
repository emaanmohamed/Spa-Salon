<?php
namespace Dgm\UspsSimple;

spl_autoload_register(static function($class) {
    $ns = __NAMESPACE__;
    if (strpos($class, $ns) === 0) {
        /** @noinspection PhpIncludeInspection */
        include(__DIR__.'/src/'.str_replace('\\', '/', substr($class, strlen($ns))).'.php');
    }
});