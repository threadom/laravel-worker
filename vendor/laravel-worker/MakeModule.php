<?php

namespace laravelWorker;

function make_module($p_dir, $p_argv)
{
    $l_argv = array_values($p_argv);
    echo "\033[44;30m " . 'worker : make:module ' . implode(' ', $l_argv) . '.' . " \033[0m\r\n";

    $module_dir = $p_dir . '/modules/' . $l_argv[0];
    if (!file_exists($module_dir)) {
        mkdir($module_dir);
        
        echo "\033[42;30m " . 'worker : done.' . " \033[0m\r\n";
    } else {
        if (is_dir($module_dir)) {
            echo "\033[41;30m " . 'worker : module "' . $l_argv[0] . '" already exist.' . " \033[0m\r\n";
        } else {
            echo "\033[41;30m " . 'worker : module "' . $l_argv[0] . '" is not a folder.' . " \033[0m\r\n";
        }
    }
}
