<?php

namespace laravelWorker;

function make_module($p_argv) {
    $l_argv = array_values($p_argv);
    echo "\033[44;30m ".'worker : make:module '.implode(' ',$l_argv).'.'." \033[0m\r\n";
    echo "\033[42;30m ".'worker : done.'." \033[0m\r\n";
}