<?php
declare(strict_types=1);

namespace JohnyProkie\MultichainClient\Services\Compilers;

use JohnyProkie\MultichainClient\Contracts\CommandContract;

/**
 * @TODO Compilation of commands for CLI isn't that easy, strings must be sanitized for different CLIs, see symfony/console
 */
class CliCompiler implements Compiler
{

    private CommandContract $command;

    public function compile(): string
    {
        throw new \RuntimeException('Not implemented yet.');
    }

    public function setCommand(CommandContract $command): static
    {
        $this->command = $command;
        return $this;
    }
}