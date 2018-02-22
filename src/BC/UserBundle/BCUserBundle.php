<?php

namespace BC\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class BCUserBundle extends Bundle
{
    // Modif du 12/02/18 ajout du FOSUSER
    public function getParent()
    {
      return 'FOSUserBundle';
    }
}
