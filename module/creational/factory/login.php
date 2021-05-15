<?php


interface signal
{
    public function login(): void;
    public function loginOut(): void;
    public function post(): string;
}

class qq implements signal
{
    public function __construct(private string $account, private string $password)
    {
        # code...
    }

    public function login(): void
    {
        echo "login";
    }

    public function loginOut(): void
    {
        echo 'loginOut';
    }

    public function post(): string
    {
        return 'QQ的post请求';
    }
}


abstract class create
{
    public function __construct(protected string $account, protected string $password)
    {
    }

    abstract public function factoryMethod(): signal;
}

class qqCreate extends create
{
    /**
     * @name: 实例估
     * @param {*}
     * @author: ANNG
     * @return {*}
     */
    public function factoryMethod(): signal
    {
        return (new qq($this->account, $this->password));
    }
}

$qq = (new qqCreate('abc', '123'))->factoryMethod();
$qq->login();
$qq->post();
$qq->loginOut();
