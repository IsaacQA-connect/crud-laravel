<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $table='notas';
    protected $primaryKey='id';
    protected $fillable=['tarea','descripcion'];
    public $timestamps=false;
}
