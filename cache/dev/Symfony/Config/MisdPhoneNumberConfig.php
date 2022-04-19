<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'MisdPhoneNumber'.\DIRECTORY_SEPARATOR.'TwigConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'MisdPhoneNumber'.\DIRECTORY_SEPARATOR.'FormConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'MisdPhoneNumber'.\DIRECTORY_SEPARATOR.'SerializerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'MisdPhoneNumber'.\DIRECTORY_SEPARATOR.'ValidatorConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class MisdPhoneNumberConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $twig;
    private $form;
    private $serializer;
    private $validator;
    private $_usedProperties = [];
    
    public function twig(array $value = []): \Symfony\Config\MisdPhoneNumber\TwigConfig
    {
        if (null === $this->twig) {
            $this->_usedProperties['twig'] = true;
            $this->twig = new \Symfony\Config\MisdPhoneNumber\TwigConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "twig()" has already been initialized. You cannot pass values the second time you call twig().');
        }
    
        return $this->twig;
    }
    
    public function form(array $value = []): \Symfony\Config\MisdPhoneNumber\FormConfig
    {
        if (null === $this->form) {
            $this->_usedProperties['form'] = true;
            $this->form = new \Symfony\Config\MisdPhoneNumber\FormConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "form()" has already been initialized. You cannot pass values the second time you call form().');
        }
    
        return $this->form;
    }
    
    public function serializer(array $value = []): \Symfony\Config\MisdPhoneNumber\SerializerConfig
    {
        if (null === $this->serializer) {
            $this->_usedProperties['serializer'] = true;
            $this->serializer = new \Symfony\Config\MisdPhoneNumber\SerializerConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "serializer()" has already been initialized. You cannot pass values the second time you call serializer().');
        }
    
        return $this->serializer;
    }
    
    public function validator(array $value = []): \Symfony\Config\MisdPhoneNumber\ValidatorConfig
    {
        if (null === $this->validator) {
            $this->_usedProperties['validator'] = true;
            $this->validator = new \Symfony\Config\MisdPhoneNumber\ValidatorConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "validator()" has already been initialized. You cannot pass values the second time you call validator().');
        }
    
        return $this->validator;
    }
    
    public function getExtensionAlias(): string
    {
        return 'misd_phone_number';
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('twig', $value)) {
            $this->_usedProperties['twig'] = true;
            $this->twig = new \Symfony\Config\MisdPhoneNumber\TwigConfig($value['twig']);
            unset($value['twig']);
        }
    
        if (array_key_exists('form', $value)) {
            $this->_usedProperties['form'] = true;
            $this->form = new \Symfony\Config\MisdPhoneNumber\FormConfig($value['form']);
            unset($value['form']);
        }
    
        if (array_key_exists('serializer', $value)) {
            $this->_usedProperties['serializer'] = true;
            $this->serializer = new \Symfony\Config\MisdPhoneNumber\SerializerConfig($value['serializer']);
            unset($value['serializer']);
        }
    
        if (array_key_exists('validator', $value)) {
            $this->_usedProperties['validator'] = true;
            $this->validator = new \Symfony\Config\MisdPhoneNumber\ValidatorConfig($value['validator']);
            unset($value['validator']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['twig'])) {
            $output['twig'] = $this->twig->toArray();
        }
        if (isset($this->_usedProperties['form'])) {
            $output['form'] = $this->form->toArray();
        }
        if (isset($this->_usedProperties['serializer'])) {
            $output['serializer'] = $this->serializer->toArray();
        }
        if (isset($this->_usedProperties['validator'])) {
            $output['validator'] = $this->validator->toArray();
        }
    
        return $output;
    }

}
