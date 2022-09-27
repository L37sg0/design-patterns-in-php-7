<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\More\EAV;

class Value
{
    private Attribute $attribute;
    private string $name;
    
    public function __construct(Attribute $attribute, string $name) {
        $attribute->addValue($this);
        
        $this->attribute    = $attribute;
        $this->name         = $name;
        
    }
    
    public function __toString(): string
    {
        return sprintf('%s: %s', (string) $this->attribute, $this->name);
    }
}