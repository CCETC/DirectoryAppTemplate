<?php

namespace MyDirectory\AppBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MyDirectoryAppBundle extends Bundle
{
    public function getParent()
    {
        return 'CCETCDirectoryBundle';
    }
}
