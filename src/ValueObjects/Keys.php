<?php
declare(strict_types=1);

namespace JohnyProkie\MultichainClient\ValueObjects;

class Keys
{
    private array $keys = [];

    /**
     * @param Key[] $keysArray
     * @return static
     */
    public static function fromArray(array $keysArray): static
    {
        $keysInstance = new static();
        array_walk($keysArray, function($index, $element) use ($keysInstance) {
            if (!($element instanceof Key)) {
                throw new \InvalidArgumentException('Provided array contains at least one element that is not Key!');
            }
            $keysInstance->keys[] = $element;
        });
        return $keysInstance;
    }

    private function __construct()
    {
    }

    public function push(Key $key): static
    {
        $copy = clone $this;
        $copy->keys[] = $key;

        return $copy;
    }

    public function getKeys(): array
    {
        return $this->keys;
    }
}