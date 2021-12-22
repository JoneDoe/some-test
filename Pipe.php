<?php

declare(strict_types=1);

class Pipe
{
    /**
     * @var HandlerInterface[]
     */
    private array $handlers;

    public function __construct(HandlerInterface ...$handlers)
    {
        $this->handlers = $handlers;
    }

    public function addHandler(HandlerInterface $handler): self
    {
        $this->handlers[] = $handler;

        return $this;
    }

    public function run(): array
    {
        $result = [];

        foreach ($this->handlers as $handler) {
            $result[] = $this->process($handler);
        }

        return $result;
    }

    private function process(HandlerInterface $handler): string
    {
        return $handler->getRule();
    }
}
