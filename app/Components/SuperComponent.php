<?php


class SuperComponent {
    protected $name = 'super ';

    public function __construct($attr)
    {
        $this->name .= $attr;
    }

    public function getName()
    {
        return $this->name;
    }
}