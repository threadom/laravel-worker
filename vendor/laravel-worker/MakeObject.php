<?php

namespace laravelWorker;

function make_object($p_dir, $p_argv)
{
    $l_argv = array_values($p_argv);

    $l_split = explode('/', $l_argv[0]);
    if (count($l_split) == 2) {
        $module_dir = $p_dir . '/modules/' . $l_split[0];
        $submodule_dir = $module_dir . '/' . $l_split[1];

        create_object_file($submodule_dir, 'Migration', '.php', $l_split[1]);
        create_object_file($submodule_dir, 'Model', '.php', $l_split[1]);
        create_object_file($submodule_dir, 'Seeder', '.php', $l_split[1]);
        create_object_file($submodule_dir, 'Factory', '.php', $l_split[1]);
        create_object_file($submodule_dir, 'API', '.php', $l_split[1]);
        create_object_file($submodule_dir, 'Controller', '.php', $l_split[1]);
        create_object_file($submodule_dir, 'View', '.blade.php', $l_split[1]);
        create_object_file($submodule_dir, 'Script', '.ts', $l_split[1]);
    } else {
        echo "\033[41;30m " . 'worker : module/submodule syntax error.' . " \033[0m\r\n";
    }
}

function create_object_file($p_dir, $p_type, $p_extension, $p_submodule)
{
    $file_dir = $p_dir . '/' . $p_submodule . 'Object' . $p_type . $p_extension;
    if (!file_exists($file_dir)) {
        copy(__DIR__ . '/templates/object/TemplateObject' . $p_type . $p_extension, $file_dir);
    } else {
        echo "\033[41;30m " . 'worker : ' . strtolower($p_type) . ' file already exist for "' . $p_submodule . '".' . " \033[0m\r\n";
    }
}
