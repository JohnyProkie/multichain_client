<?php

namespace JohnyProkie\MultichainClient\Contracts;

interface CommandContract
{
    /**
     * Get parameters in correct order as described by Multichain documentation
     * @return array Would be "cool" to not use array, but currently I don't see a benefit.
     */
    public function getParameters(): array;
}