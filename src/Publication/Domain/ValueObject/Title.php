<?php

declare(strict_types=1);

namespace MyLibrary\Publication\Domain\ValueObject;

use MyLibrary\Publication\Domain\Exception\InvalidTitleException;

final class Title
{
    public function __construct(public readonly string $value)
    {
        if (empty($value)) {
            throw new InvalidTitleException();
        }
    }

    public function __toString(): string
    {
        return $this->value;
    }
}
