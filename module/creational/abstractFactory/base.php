<?php

//产品A接口
interface abstractProuductA
{
    public function usefulFunctionA(): string;
}

//产品B接口
interface abstractProuductB
{
    public function usefulFunctionB(): string;

    public function anotherUsefulFunction(abstractProuductA $proudct): string;
}

//定义工厂接口
interface abstractFactory
{
    // 创建产口A实例
    public function createProductA(): abstractProuductA;

    // 创建产品B实例
    public function createProductB(): abstractProuductB;
}

// 创建产品1的相关对象
class concreteFactory1 implements abstractFactory
{
    public function createProductA(): abstractProuductA
    {
        return (new productA1);
    }

    public function createProductB(): abstractProuductB
    {
        return (new productB1);
    }
}

// 产品A1
class productA1 implements abstractProuductA
{
    public function usefulFunctionA(): string
    {
        return 10;
    }
}


class productB1 implements abstractProuductB
{
    public function usefulFunctionB(): string
    {
        return "100";
    }


    public function anotherUsefulFunction(abstractProuductA $proudct): string
    {
        $data = $proudct->usefulFunctionA();
        return '产品A的数据：' . $data;
    }
}


//创建产品2的相关对象
class concreteFactory2 implements abstractFactory
{
    public function createProductA(): abstractProuductA
    {
        return (new productA2);
    }

    public function createProductB(): abstractProuductB
    {
        return (new productB2);
    }
}


class productA2 implements abstractProuductA
{
    public function usefulFunctionA(): string
    {
        return 10;
    }
}


class productB2 implements abstractProuductB
{
    public function usefulFunctionB(): string
    {
        return "100";
    }

    public function anotherUsefulFunction(abstractProuductA $proudct): string
    {
        $data = $proudct->usefulFunctionA();
        return '产品A的数据：' . $data;
    }
}
