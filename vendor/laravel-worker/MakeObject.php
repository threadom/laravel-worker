<?php

namespace laravelWorker;

function make_object($p_dir, $p_argv)
{
    $l_argv = array_values($p_argv);

    $l_split = explode('/', $l_argv[0]);
    if (count($l_split) == 2) {
        $module_dir = $p_dir . '/modules/' . $l_split[0];
        $submodule_dir = $module_dir . '/' . $l_split[1];

        create_object_file($submodule_dir, 'Migration', '.php', $l_split[0], $l_split[1]);
        create_object_file($submodule_dir, 'Model', '.php', $l_split[0], $l_split[1]);
        create_object_file($submodule_dir, 'Seeder', '.php', $l_split[0], $l_split[1]);
        create_object_file($submodule_dir, 'Factory', '.php', $l_split[0], $l_split[1]);
        create_object_file($submodule_dir, 'API', '.php', $l_split[0], $l_split[1]);
        create_object_file($submodule_dir, 'Controller', '.php', $l_split[0], $l_split[1]);
        create_object_file($submodule_dir, 'View', '.blade.php', $l_split[0], $l_split[1]);
        create_object_file($submodule_dir, 'Script', '.ts', $l_split[0], $l_split[1]);

        echo "\033[42;30m " . 'worker : make:object done.' . " \033[0m\r\n";
    } else {
        echo "\033[41;30m " . 'worker : module/submodule syntax error.' . " \033[0m\r\n";
    }
}

function create_object_file($p_dir, $p_type, $p_extension, $p_module, $p_submodule)
{
    $file_dir = $p_dir . '/' . $p_submodule . 'Object' . $p_type . $p_extension;
    if (!file_exists($file_dir)) {
        copy(__DIR__ . '/templates/object/TemplateObject' . $p_type . $p_extension, $file_dir);

        $lines = file_get_contents($file_dir);

        $lines = str_replace('\\Module\\', '\\' . $p_module . '\\',  $lines);
        $lines = str_replace('\\Submodule\\', '\\' . $p_submodule . '\\',  $lines);
        $lines = str_replace('\\Submodule;', '\\' . $p_submodule . ';',  $lines);
        $lines = str_replace('TemplateObject', $p_submodule . 'Object',  $lines);
        $lines = str_replace('templates', strtolower($p_submodule) . 's',  $lines);
        $lines = str_replace('_Module_', '_' . $p_module . '_',  $lines);
        $lines = str_replace('_Submodule\'', '_' . $p_submodule . '\'',  $lines);
        $lines = str_replace('_Submodule::', '_' . $p_submodule . '::',  $lines);
        $lines = str_replace('{MODULE}', $p_module,  $lines);
        $lines = str_replace('{SUBMODULE}', $p_submodule,  $lines);

        $json = loadConfig($p_dir, $p_module, $p_submodule);

        $lines = str_replace('{TITLE}', $json['title'],  $lines);
        $lines = str_replace('{THEME}', $json['theme'],  $lines);
        $lines = str_replace('{TEMPLATE}', $json['template'],  $lines);

        file_put_contents($file_dir, $lines);
    } else {
        echo "\033[41;30m " . 'worker : ' . strtolower($p_type) . ' file already exist for "' . $p_submodule . '".' . " \033[0m\r\n";
    }
}

function loadConfig($p_dir, $module, $submodule)
{
    $config_dir = $p_dir . '/config/modules/' . $module . '/' . $submodule . '.json';
    $config = json_decode('{
        "title":"default",
        "theme":"default",
        "template":"default"
    }', true);
    if (file_exists($config_dir)) {
        $config = json_decode(file_get_contents($config_dir), true);
    }
    return $config;
}
