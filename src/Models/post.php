<?php

namespace Fallah\Crud\Models;

use Illuminate\Database\Eloquent\Model;

class post  extends Model
{
    protected  $table='Post';
    protected $primaryKey='id';
    protected $guarded =[];
}
