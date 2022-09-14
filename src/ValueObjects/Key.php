<?php
declare(strict_types=1);

namespace JohnyProkie\MultichainClient\ValueObjects;

class Key
{
    public function __construct(private string $key)
    {

    }

    public function get(): string
    {
        return $this->key;
    }

    public function __toString(): string
    {
        return $this->key;
    }
}