<?php
declare(strict_types=1);

use JohnyProkie\MultichainClient\Commands\ListStreamKeyItems;
use JohnyProkie\MultichainClient\Commands\ListStreamKeys;
use JohnyProkie\MultichainClient\Contracts\CommandContract;
use JohnyProkie\MultichainClient\Services\Compilers\Compiler;
use Psr\Http\Message\RequestInterface;

class MultichainClient
{
    private CommandContract $commad;

    public function __construct(private RequestInterface $request, private Compiler $compiler)
    {
    }

    public function listStreamKeys(): ListStreamKeys
    {
        $this->commad = new ListStreamKeys();
        return $this->commad;
    }

    public function listStreamKeyItems(): ListStreamKeyItems
    {
        return new ListStreamKeyItems();
    }

    public function send()
    {
        $parameters = $this->compiler->setCommand($this->commad)->compile();
        throw new RuntimeException('Not implemented!');
        $this->request;
    }
}