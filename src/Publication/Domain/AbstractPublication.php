<?php

declare(strict_types=1);

namespace MyLibrary\Publication\Domain;

use MyLibrary\Publication\Domain\Entity\Publisher;
use MyLibrary\Publication\Domain\ValueObject\Language;
use MyLibrary\Publication\Domain\ValueObject\PublishYear;
use MyLibrary\Publication\Domain\ValueObject\Status;
use MyLibrary\Publication\Domain\ValueObject\Title;
use Ramsey\Uuid\Uuid;

abstract class AbstractPublication
{
    private Uuid $uuid;
    private Title $title;
    private Status $status;
    private array $authors;
    private Language $language;
    private Publisher $publisher;
    private PublishYear $publishYear;
    private Language $originalLanguage;
}
