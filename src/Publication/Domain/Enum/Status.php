<?php

namespace MyLibrary\Publication\Domain\Enum;

enum Status: string
{
    case BOUGHT = 'bought';
    case TO_BUY = 'to_buy';
}
