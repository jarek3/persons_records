<?php

namespace ContainerVo7dKBE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPhoneNumberTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Misd\PhoneNumberBundle\Form\Type\PhoneNumberType' shared service.
     *
     * @return \Misd\PhoneNumberBundle\Form\Type\PhoneNumberType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'odolbeau'.\DIRECTORY_SEPARATOR.'phone-number-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'PhoneNumberType.php';

        return $container->privates['Misd\\PhoneNumberBundle\\Form\\Type\\PhoneNumberType'] = new \Misd\PhoneNumberBundle\Form\Type\PhoneNumberType();
    }
}
