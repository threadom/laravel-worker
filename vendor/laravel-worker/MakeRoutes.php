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

                $config_dir = $p_dir . '/config/modules/' . $l_argv[0] . '/'. $l_argv[0].'.json';
                if (file_exists($config_dir)) {
                    $config = json_decode(file_get_contents($config_dir), true);
                    if (isset($config['routes'])) {
                        if (isset($config['routes']['web'])) {
                            foreach ($config['routes']['web'] as $key => $route) {
                                $parse_module = explode('/', $route);
                                $module_dir = $p_dir . '/modules/' . $parse_module[0];
                                if (is_dir($module_dir.'/'.$parse_module[1].'/')) {
                                    if (file_exists($module_dir.'/'.$parse_module[1].'/'.$parse_module[1].'ObjectController.php')) {
                                        $json['WebRoutes'][$key] = '\Modules\\'.$l_argv[0].'\\'.$parse_module[1].'\\'.$parse_module[1].'ObjectController';
                                    }
                                    if (file_exists($module_dir.'/'.$parse_module[1].'/'.$parse_module[1].'ListController.php')) {
                                        $json['WebRoutes'][$key] = '\Modules\\'.$l_argv[0].'\\'.$parse_module[1].'\\'.$parse_module[1].'ListController';
                                    }
                                }
                            }
                        }
                        if (isset($config['routes']['api'])) {
                            foreach ($config['routes']['api'] as $key => $route) {
                                $parse_module = explode('/', $route);
                                $module_dir = $p_dir . '/modules/' . $parse_module[0];
                                if (is_dir($module_dir.'/'.$parse_module[1].'/')) {
                                    if (file_exists($module_dir.'/'.$parse_module[1].'/'.$parse_module[1].'APIController.php')) {
                                        $json['APIRoutes'][$key] = '\Modules\\'.$l_argv[0].'\\'.$parse_module[1].'\\'.$parse_module[1].'APIController';
                                    }
                                }
                            }
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
