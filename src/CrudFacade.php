<?php

namespace Fallah\Crud;

use Illuminate\Support\Facades\Facade;

class CrudFacade  extends Facade
{
      protected static function getFacadeAccessor()
      {
          return 'crud';
      }
}
