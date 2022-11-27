<?php

declare(strict_types=1);

namespace MyLibrary\Publication\Domain\ValueObject;

use MyLibrary\Publication\Domain\Exception\InvalidLanguageCodeException;
use MyLibrary\Publication\Domain\Exception\InvalidLanguageNameException;

final class Language
{
    public function __construct(
        public readonly string $name,
        public readonly string $code
    ) {
        if (empty($name)) {
            throw new InvalidLanguageNameException();
        }

        if (strlen($code) !== 3) {
            throw new InvalidLanguageCodeException();
        }
    }

    public function __toString(): string
    {
        return $this->name;
    }
}
