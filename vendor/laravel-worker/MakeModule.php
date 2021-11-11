<?php

namespace laravelWorker;

require_once __DIR__ . '/MakeObject.php';
require_once __DIR__ . '/MakeList.php';

function make_module($p_dir, $p_argv)
{
    $l_argv = array_values($p_argv);
    echo "\033[44;30m " . 'worker : make:module ' . implode(' ', $l_argv) . '.' . " \033[0m\r\n";

    $l_split = explode('/', $l_argv[0]);
    if (count($l_split) == 1) {
        $module_dir = $p_dir . '/modules/' . $l_argv[0];
        if (!file_exists($module_dir)) {
            mkdir($module_dir);

            if ((strtolower($l_argv[1]) == '--object') or (strtolower($l_argv[2]) == '--object')) {
                $new_argv = explode(' ', $l_argv[0].'/'.$l_argv[0].' --object');
                make_submodule($p_dir, $new_argv);
            }

            if ((strtolower($l_argv[1]) == '--list') or (strtolower($l_argv[2]) == '--list')) {
                $new_argv = explode(' ', $l_argv[0].'/'.$l_argv[0].'s --list');
                make_submodule($p_dir, $new_argv);
            }

            echo "\033[42;30m " . 'worker : make:module done.' . " \033[0m\r\n";
        } else {
            if (is_dir($module_dir)) {
                echo "\033[41;30m " . 'worker : module "' . $l_argv[0] . '" already exist.' . " \033[0m\r\n";
            } else {
                echo "\033[41;30m " . 'worker : module "' . $l_argv[0] . '" is not a folder.' . " \033[0m\r\n";
            }
        }
    }
    elseif (count($l_split) > 1) {
        make_submodule($p_dir, $p_argv);
    }
}
