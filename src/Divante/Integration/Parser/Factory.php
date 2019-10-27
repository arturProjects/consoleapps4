<?php

namespace Divante\Integration\Parser; 


class Factory implements FactoryInterface
{
   public function getParser($type)
   {
       $parser = 'Divante\\Integration\\Parser\\'.$type;
       return new $parser;
   }
}
