<?php

interface productInterface
{
    public function operation(): string;
}

class product1 implements productInterface
{
    public function operation(): string
    {
        return '这是产品1';
    }
}

class product2 implements productInterface
{
    public function operation(): string
    {
        return '这是产品2';
    }
}

abstract class creator
{
    abstract public function factoryMethod(): productInterface;

    public function someOperation(): string
    {
        $product = $this->factoryMethod();
        $result = "产品:" . $product->operation();
        return $result;
    }
}


class create1 extends creator
{
    public function factoryMethod(): productInterface
    {
        return (new product1);
    }
}

class create2 extends creator
{
    public function factoryMethod(): productInterface
    {
        return (new product2);
    }
}


echo (new create1)->someOperation();
echo (new create2)->someOperation();
