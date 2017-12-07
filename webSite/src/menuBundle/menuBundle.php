<?php

namespace menuBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;


class menuBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}

