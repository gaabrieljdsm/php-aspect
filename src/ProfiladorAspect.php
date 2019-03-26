<?php

namespace Aspect;

use Go\Aop\Aspect;
use Go\Aop\Intercept\MethodInvocation;
use Go\Lang\Annotation\Before;
use Go\Lang\Annotation\AfterThrowing;

class ProfiladorAspect implements Aspect
{

    protected $objects = [];

    /**
     *
     * @param MethodInvocation $invocation Invocation
     * @AfterThrowing("execution(public *\*->create(*))")
     */
    public function AfterThrowingDispatch(MethodInvocation $invocation)
    {
    	$obj = $invocation->getThis();

    	$class = get_class($obj);
    	$method = $invocation->getMethod()->getName();

        $message = "Falha ao executar o método {$method} da classe {$class} \n";

        $logger = New Logger();
        $logger->error($message);
    }
}