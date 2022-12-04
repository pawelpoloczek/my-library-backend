<?php

declare(strict_types=1);

namespace MyLibrary\Publication\Infrastructure\Doctrine\Type;

use MyLibrary\Publication\Domain\Enum\Status;
use MyLibrary\Shared\Infrastructure\Doctrine\Type\AbstractEnumType;

final class StatusType extends AbstractEnumType
{

    public static function getClassName():string
    {
        return Status::class;
    }

    public function getName(): string
    {
        return 'publication_status';
    }
}