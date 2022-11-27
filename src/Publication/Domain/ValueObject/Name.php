<?php

declare(strict_types=1);

namespace MyLibrary\Publication\Domain\ValueObject;

use MyLibrary\Publication\Domain\Exception\InvalidNameException;

final class Name
{
    public function __construct(public readonly string $value)
    {
        if (empty($value)) {
            throw new InvalidNameException();
        }
    }

    public function __toString(): string
    {
        return $this->value;
    }
}
