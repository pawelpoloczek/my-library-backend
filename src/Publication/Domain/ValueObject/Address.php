<?php

declare(strict_types=1);

namespace MyLibrary\Publication\Domain\ValueObject;

use MyLibrary\Publication\Domain\Exception\InvalidCityException;
use MyLibrary\Publication\Domain\Exception\InvalidCountryException;
use MyLibrary\Publication\Domain\Exception\InvalidPostalCodeException;
use MyLibrary\Publication\Domain\Exception\InvalidStreetException;

use function sprintf;

final class Address
{
    public function __construct(
        public readonly string $street,
        public readonly string $city,
        public readonly string $postalCode,
        public readonly string $country
    ) {
        if (empty($this->street)) {
            throw new InvalidStreetException();
        }
        if (empty($this->city)) {
            throw new InvalidCityException();
        }
        if (strlen($this->postalCode) < 2) {
            throw new InvalidPostalCodeException();
        }
        if (empty($this->country)) {
            throw new InvalidCountryException();
        }
    }

    public function __toString(): string
    {
        return sprintf(
            '%s, %s %s, %s',
            $this->street,
            $this->postalCode,
            $this->city,
            $this->country
        );
    }
}
