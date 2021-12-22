<?php

declare(strict_types=1);

class Handler implements HandlerInterface
{
    private int $priority = 0;
    private string $rule;
    private Types $type;

    public function __construct(Types $type = Types::Approve)
    {
        $this->type = $type;
    }

    public function getRule(): string
    {
        return $this->rule;
    }

    public function getPriority(): int
    {
        return $this->priority;
    }

    public function setRule(string $rule): self
    {
        $this->rule = $rule;

        return $this;
    }

    public function setPriority(int $priority): self
    {
        $this->priority = $priority;

        return $this;
    }

    public function getType(): Types
    {
        return $this->type;
    }
}
