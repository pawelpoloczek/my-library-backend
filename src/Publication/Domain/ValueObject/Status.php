<?php

declare(strict_types=1);

namespace MyLibrary\Publication\Domain\ValueObject;

use MyLibrary\Publication\Domain\Enum\Status as StatusEnum;
use MyLibrary\Publication\Domain\Exception\InvalidStatusException;

final class Status
{
    public readonly StatusEnum $value;

    public function __construct(string $value)
    {
        if (empty($value)) {
            throw new InvalidStatusException();
        }
    }

    public function getValue(): StatusEnum
    {
        return $this->value;
    }

    public function __toString(): string
    {
        return $this->value;
    }
}
