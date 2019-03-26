<?php

namespace Aspect;

abstract class Model {
    public function persist() {
        throw new \Exception('Erro ao invocar método');
    }
}