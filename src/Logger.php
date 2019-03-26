<?php

namespace Aspect;

class Logger {

    public function error($message) {
        $file = fopen("./logs/exception.txt", "a+");
        fwrite($file, "Erro: {$message}\n");
        fclose($file);
    }

}