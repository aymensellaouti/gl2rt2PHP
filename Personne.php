<?php

class Personne
{
    function __construct(private $name) {}

    function getName() {
        return $this->name;
    }
}