<?php
namespace App;
use Illuminate\Database\Eloquent\Model;


class Archivos extends Model
{
   protected $table = "archivos";
   public $primaryKey = "id";
   protected $fillable = [
    'descripcion',
    'path'
    ];
    public $timestamps = false;
}
