<?php

namespace Abstractfactory\Php;

use Abstractfactory\Php\iEnemies;

interface iAbstractGameFactory
{
    public function getEnemies(): iEnemies;
    public function getMap(): iMap;
}