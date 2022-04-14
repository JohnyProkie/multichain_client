<?php
declare(strict_types=1);

class Client
{
    private \Psr\Http\Message\RequestInterface $request;

    public function __construct(\Psr\Http\Message\RequestInterface $request)
    {
        $this->request = $request;
    }

    
}