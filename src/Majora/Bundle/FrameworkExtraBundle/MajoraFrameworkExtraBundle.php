<?php

namespace Majora\Bundle\FrameworkExtraBundle;

use Majora\Bundle\FrameworkExtraBundle\DependencyInjection\Compiler\ActionRegisterCompilerPass;
use Majora\Bundle\FrameworkExtraBundle\DependencyInjection\Compiler\AgnosticRouteCompilerPass;
use Majora\Bundle\FrameworkExtraBundle\DependencyInjection\Compiler\AliasRegisterCompilerPass;
use Majora\Bundle\FrameworkExtraBundle\DependencyInjection\Compiler\FixturesCompilerPass;
use Majora\Bundle\FrameworkExtraBundle\DependencyInjection\Compiler\LoaderCompilerPass;
use Majora\Bundle\FrameworkExtraBundle\DependencyInjection\Compiler\SerializerCompilerPass;
use Majora\Bundle\FrameworkExtraBundle\DependencyInjection\Compiler\ValidationCompilerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class MajoraFrameworkExtraBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new SerializerCompilerPass());
        $container->addCompilerPass(new ValidationCompilerPass());
        $container->addCompilerPass(new FixturesCompilerPass());
        $container->addCompilerPass(new LoaderCompilerPass());
        $container->addCompilerPass(new ActionRegisterCompilerPass());
        $container->addCompilerPass(new AliasRegisterCompilerPass());
    }
}
