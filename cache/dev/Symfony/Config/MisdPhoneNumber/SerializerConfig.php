<?php

namespace Symfony\Config\MisdPhoneNumber;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help in creating a config.
 */
class SerializerConfig 
{
    private $enabled;
    private $defaultRegion;
    private $format;
    private $_usedProperties = [];
    
    /**
     * @default true
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function enabled($value): self
    {
        $this->_usedProperties['enabled'] = true;
        $this->enabled = $value;
    
        return $this;
    }
    
    /**
     * @default 'ZZ'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultRegion($value): self
    {
        $this->_usedProperties['defaultRegion'] = true;
        $this->defaultRegion = $value;
    
        return $this;
    }
    
    /**
     * @default 0
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function format($value): self
    {
        $this->_usedProperties['format'] = true;
        $this->format = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }
    
        if (array_key_exists('default_region', $value)) {
            $this->_usedProperties['defaultRegion'] = true;
            $this->defaultRegion = $value['default_region'];
            unset($value['default_region']);
        }
    
        if (array_key_exists('format', $value)) {
            $this->_usedProperties['format'] = true;
            $this->format = $value['format'];
            unset($value['format']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['enabled'])) {
            $output['enabled'] = $this->enabled;
        }
        if (isset($this->_usedProperties['defaultRegion'])) {
            $output['default_region'] = $this->defaultRegion;
        }
        if (isset($this->_usedProperties['format'])) {
            $output['format'] = $this->format;
        }
    
        return $output;
    }

}
