<?php

namespace skobzr\BarBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class BarBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
