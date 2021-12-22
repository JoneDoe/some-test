<?php

$pipe = new Pipe(
    (new Handler(Types::Denny))->setRule('rule0')->setPriority(1),
    (new Handler())->setRule('rule1')
);
$pipe->addHandler((new Handler())->setRule('rule2')->setPriority(2));
$pipe->addHandler((new Handler(Types::Denny))->setRule('rule3'));
$result = $pipe->run();