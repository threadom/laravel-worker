<?php

namespace laravelWorker;

function make_routes($p_dir, $p_argv)
{
    $l_argv = array_values($p_argv);
    echo "\033[44;30m " . 'worker : make:routes ' . implode(' ', $l_argv) . '.' . " \033[0m\r\n";

    $modules_dir = $p_dir . '/modules/';
    $module_dir = $p_dir . '/modules/' . $l_argv[0];
    $file_dir = $modules_dir . '/ModulesRoutes.json';
    if (file_exists($modules_dir)) {
        if (is_dir($modules_dir)) {
            if (file_exists($file_dir)) {
                $json = json_decode(file_get_contents($file_dir), true);

                $files = array_diff(scandir($module_dir), array('..', '.'));

                foreach ($files as $key => $file) {
                    if (is_dir($module_dir.'/'.$file.'/')) {
                        if (file_exists($module_dir.'/'.$file.'/'.$file.'ObjectController.php')) {
                            $json['WebRoutes']['/'.$l_argv[0].'/'.$file] = '\Modules\\'.$l_argv[0].'\\'.$file.'\\'.$file.'ObjectController';
                        }
                        if (file_exists($module_dir.'/'.$file.'/'.$file.'APIController.php')) {
                            $json['APIRoutes']['/API/'.$l_argv[0].'/'.$file] = '\Modules\\'.$l_argv[0].'\\'.$file.'\\'.$file.'APIController';
                        }
                        if (file_exists($module_dir.'/'.$file.'/'.$file.'ListController.php')) {
                            $json['WebRoutes']['/'.$l_argv[0].'/'.$file] = '\Modules\\'.$l_argv[0].'\\'.$file.'\\'.$file.'ListController';
                        }
                    }
                }
                file_put_contents($file_dir, json_encode($json));
                
                echo "\033[42;30m " . 'worker : make:route done.' . " \033[0m\r\n";
            } else {
                echo "\033[41;30m " . 'worker : routes file "' . $l_argv[0] . '" doesn\'t exist.' . " \033[0m\r\n";
            }
        } else {
            echo "\033[41;30m " . 'worker : module "' . $l_argv[0] . '" is not a folder.' . " \033[0m\r\n";
        }
    } else {
        echo "\033[41;30m " . 'worker : module folder "' . $l_argv[0] . '" already exist.' . " \033[0m\r\n";
    }
}
