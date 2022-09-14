<?php

namespace JohnyProkie\MultichainClient\Services\Compilers;

use JohnyProkie\MultichainClient\Contracts\CommandContract;

interface Compiler
{
    public function compile(): string;

    public function setCommand(CommandContract $command): static;
}