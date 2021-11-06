<?php

namespace laravelWorker;

function make_list($p_dir, $p_argv)
{
    $l_argv = array_values($p_argv);
    echo "\033[44;30m " . 'worker : make:routes ' . implode(' ', $l_argv) . '.' . " \033[0m\r\n";

    $module_dir = $p_dir . '/modules/' . $l_argv[0];
    $routes_dir = $module_dir . '/' . $l_argv[0] . 'Routes.php';
    if (file_exists($module_dir)) {
        if (is_dir($module_dir)) {
            if (!file_exists($routes_dir)) {
                copy(__DIR__ . '/templates/module/TemplateRoutes.php', $routes_dir);
                echo "\033[42;30m " . 'worker : done.' . " \033[0m\r\n";
            } else {
                echo "\033[41;30m " . 'worker : routes file "' . $l_argv[0] . '" already exist.' . " \033[0m\r\n";
            }
        } else {
            echo "\033[41;30m " . 'worker : module "' . $l_argv[0] . '" is not a folder.' . " \033[0m\r\n";
        }
    } else {
        echo "\033[41;30m " . 'worker : module folder "' . $l_argv[0] . '" already exist.' . " \033[0m\r\n";
    }
}
