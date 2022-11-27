<?php

declare(strict_types=1);

namespace MyLibrary\Publication\Domain\ValueObject;

use MyLibrary\Publication\Domain\Exception\InvalidPublishYearException;

final class PublishYear
{
    public function __construct(
     public readonly int $year
    ) {
        $length = strlen((string)$year);
        if(
            ($length < 3 || $length > 4)
            || $year <= 800
        ) {
            throw new InvalidPublishYearException();
        }
    }

    public function __toString(): string
    {
        return (string)$this->year;
    }
}
