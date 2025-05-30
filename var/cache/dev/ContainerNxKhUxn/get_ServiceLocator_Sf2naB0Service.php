<?php

namespace ContainerNxKhUxn;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Sf2naB0Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Sf2naB0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Sf2naB0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'puestoTrabajo' => ['privates', '.errored..service_locator.Sf2naB0.App\\Entity\\RRHH\\PuestoTrabajo', NULL, 'Cannot autowire service ".service_locator.Sf2naB0": it needs an instance of "App\\Entity\\RRHH\\PuestoTrabajo" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'puestoTrabajo' => 'App\\Entity\\RRHH\\PuestoTrabajo',
        ]);
    }
}
