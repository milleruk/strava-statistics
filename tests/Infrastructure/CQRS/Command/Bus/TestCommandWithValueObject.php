<?php

namespace App\Tests\Infrastructure\CQRS\Command\Bus;

use App\Infrastructure\CQRS\Command\DomainCommand;
use App\Infrastructure\ValueObject\String\Url;

class TestCommandWithValueObject extends DomainCommand
{
    public function __construct(protected Url $value)
    {
    }

    public function getValue(): Url
    {
        return $this->value;
    }
}
