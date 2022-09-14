<?php
declare(strict_types=1);

namespace JohnyProkie\MultichainClient\Commands;

use JohnyProkie\MultichainClient\Contracts\CommandContract;
use JohnyProkie\MultichainClient\Enums\Boolean;
use JohnyProkie\MultichainClient\ValueObjects\Key;
use JohnyProkie\MultichainClient\ValueObjects\Keys;

class ListStreamKeys implements CommandContract
{
    private const ALL_KEYS = '*';
    private string $stream;
    private Keys $keys;
    private bool $verbose = false;
    private int $count = 1;
    private int $start = -1;
    private bool $countMax = false;
    private bool $localOrdering = false;

    public function __construct()
    {
        $this->keys = Keys::fromArray([new Key(self::ALL_KEYS)]);
    }

    public function stream(string $stream): static
    {
        $this->stream = $stream;
        return $this;
    }

    public function keys(Keys $keys): static
    {
        $this->keys = $keys;
        return $this;
    }

    public function verbose(bool $verbose): static
    {
        $this->verbose = $verbose;
        return $this;
    }

    public function count(int $count): static
    {
        $this->count = $count;
        return $this;
    }

    public function countMax(): static
    {
        $this->countMax = true;
        return $this;
    }

    public function start(int $start): static
    {
        $this->start = $start;
        return $this;
    }

    public function localOrdering(bool $localOrdering): static
    {
        $this->localOrdering = $localOrdering;
        return $this;
    }

    private function getCount(): int
    {
        if ($this->countMax) {
            return -$this->start;
        }

        return $this->count;
    }

    public function getParameters(): array
    {
        return [
            $this->stream,
            $this->keys->getKeys(),
            $this->verbose ? Boolean::TRUE : Boolean::FALSE,
            (string) $this->getCount(),
            (string) $this->start,
            $this->localOrdering ? Boolean::TRUE : Boolean::FALSE,
        ];
    }
}