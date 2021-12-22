<?php

declare(strict_types=1);

enum Types
{
    case Denny;
    case Approve;
}

interface HandlerInterface
{
    public function setRule(string $rule): self;

    public function setPriority(int $priority): self;

    public function getRule(): string;

    public function getPriority(): int;

    public function getType(): Types;
}