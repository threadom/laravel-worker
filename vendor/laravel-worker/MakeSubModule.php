<?php

namespace laravelWorker;

require_once __DIR__ . '/MakeObject.php';
require_once __DIR__ . '/MakeList.php';

function make_submodule($p_dir, $p_argv)
{
    $l_argv = array_values($p_argv);
    echo "\033[44;30m " . 'worker : make:submodule ' . implode(' ', $l_argv) . '.' . " \033[0m\r\n";

    $l_split = explode('/', $l_argv[0]);
    if (count($l_split) == 2) {
        $module_dir = $p_dir . '/modules/' . $l_split[0];
        $submodule_dir = $module_dir . '/' . $l_split[1];
        if (file_exists($module_dir)) {
            if (is_dir($module_dir)) {
                if (!file_exists($submodule_dir)) {
                    mkdir($submodule_dir);

                    make_object($p_dir, $l_argv);
                    
                    echo "\033[42;30m " . 'worker : done.' . " \033[0m\r\n";
                } else {
                    if (is_dir($submodule_dir)) {
                        echo "\033[41;30m " . 'worker : submodule folder "' . $l_split[1] . '" already exist in module "'.$l_split[0].'".' . " \033[0m\r\n";

                        make_object($p_dir, $l_argv);
                        echo "\033[42;30m " . 'worker : done.' . " \033[0m\r\n";
                    } else {
                        echo "\033[41;30m " . 'worker : submodule "' . $l_split[1] . '" is not a folder.' . " \033[0m\r\n";
                    }
                }
            } else {
                echo "\033[41;30m " . 'worker : module "' . $l_split[0] . '" is not a folder.' . " \033[0m\r\n";
            }
        } else {
            echo "\033[41;30m " . 'worker : module folder "' . $l_split[0] . '" already exist.' . " \033[0m\r\n";
        }
    } else {
        echo "\033[41;30m " . 'worker : module/submodule syntax error.' . " \033[0m\r\n";
    }
}
