<?php

declare(strict_types=1);

namespace MyLibrary\Publication\Domain\Entity;

use MyLibrary\Publication\Domain\ValueObject\Address;
use MyLibrary\Publication\Domain\ValueObject\Name;

class Publisher
{
    public function __construct(
        public readonly Name $name,
        public readonly Address $address
    ) {
    }

    public function getName(): Name
    {
        return $this->name;
    }

    public function getAddress(): Address
    {
        return $this->address;
    }
}
