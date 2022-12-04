<?php

declare(strict_types=1);

namespace MyLibrary\Shared\Infrastructure\Doctrine\Type;

use BackedEnum;
use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\Type;
use Doctrine\DBAL\Types\Types;
use MyLibrary\Shared\Infrastructure\Doctrine\Exception\EnumTypeInvalidClassException;
use MyLibrary\Shared\Infrastructure\Doctrine\Exception\EnumTypeInvalidValueException;
use function enum_exists;

abstract class AbstractEnumType extends Type
{
    abstract public static function getClassName(): string;

    public function getSQLDeclaration(array $column, AbstractPlatform $platform): string
    {
        return Types::TEXT;
    }

    /**
     * @throws EnumTypeInvalidValueException
     */
    public function convertToDatabaseValue($value, AbstractPlatform $platform)
    {
        if (!$value instanceof BackedEnum) {
            throw new EnumTypeInvalidValueException();
        }

        return $value->value;
    }

    /**
     * @throws EnumTypeInvalidClassException
     */
    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        if (false === enum_exists(self::getClassName())) {
            throw new EnumTypeInvalidClassException();
        }

        return $this::getClassName()::from($value);
    }
}
