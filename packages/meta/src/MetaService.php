<?php

namespace Ponizov\Meta;

class MetaService
{
    protected $property = 'test';
    protected $value = '';

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function getPropValue()
    {
        return $this->property . ' ' . $this->value;
    }

}