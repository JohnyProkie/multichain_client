<?php
declare(strict_types=1);

namespace JohnyProkie\MultichainClient\Services\Compilers;

use JohnyProkie\MultichainClient\Contracts\CommandContract;

class HttpCompiler implements Compiler
{
    private CommandContract $command;

    public function compile(): string
    {
        $parameters = $this->command->getParameters();
        return implode(' ', $parameters);
    }

    public function setCommand(CommandContract $command): static
    {
        $this->command = $command;
        return $this;
    }
}