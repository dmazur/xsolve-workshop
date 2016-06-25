<?php

namespace Domain\Entity;

interface HydratorAwareInterface
{

    public function hydrate(array $data);

    public function extract();
}
