<?php

namespace laravelWorker;

require_once __DIR__ . '/MakeModule.php';
require_once __DIR__ . '/MakeSubModule.php';
require_once __DIR__ . '/MakeRoutes.php';

function modules_exist($p_dir)
{
    // Check if modules directory exist
    if (!file_exists($p_dir . '/modules/')) {
        mkdir($p_dir . '/modules/');
        copy(__DIR__ . '/templates/routes/ModulesRoutes.json', $p_dir . '/modules/ModulesRoutes.json');
        copy(__DIR__ . '/templates/routes/ModulesRoutes.php', $p_dir . '/modules/ModulesRoutes.php');
    }
    if (!file_exists($p_dir . '/resources/views/modules/')) {
        mkdir($p_dir . '/resources/views/modules/');
        recurse_copy(__DIR__ . '/templates/views/', $p_dir . '/resources/views/modules/');
        mkdir($p_dir . '/resources/views/modules/themes/');
        recurse_copy(__DIR__ . '/templates/themes/', $p_dir . '/resources/views/modules/themes/');
    }
    if (is_dir($p_dir . '/modules/')) {
        return true;
    } else {
        echo '"modules" is not a directory';
    }
    return false;
}

function dispatch_command($p_dir, $p_argv)
{
    switch (strtolower($p_argv[1])) {
        case 'make:module':
            if (modules_exist($p_dir)) {
                unset($p_argv[1]);
                make_module($p_dir, $p_argv);
            }
            break;
        case 'make:submodule':
            if (modules_exist($p_dir)) {
                unset($p_argv[1]);
                make_submodule($p_dir, $p_argv);
            }
            break;
        case 'make:routes':
            if (modules_exist($p_dir)) {
                unset($p_argv[1]);
                make_routes($p_dir, $p_argv);
            }
            break;
        default:
            echo "\033[41;30m " . 'Worker : Command "' . $p_argv[1] . '" is not defined.' . " \033[0m\r\n";
            break;
    }
}

function recurse_copy($src, $dst)
{
    $dir = opendir($src);
    @mkdir($dst);
    while (false !== ($file = readdir($dir))) {
        if (($file != '.') && ($file != '..')) {
            if (is_dir($src . '/' . $file)) {
                recurse_copy($src . '/' . $file, $dst . '/' . $file);
            } else {
                copy($src . '/' . $file, $dst . '/' . $file);
            }
        }
    }
    closedir($dir);
}
