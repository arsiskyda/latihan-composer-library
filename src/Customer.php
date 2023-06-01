<?php

namespace ArsiSkyda\Latihan;

class Customer
{
    public function __construct(private string $name)
    {
    }

    public function sayHello(string $name = "Guset"): string
    {
        return "Hello $name, My name is $this->name";
    }
}

