<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use BinaryCabin\LaravelUUID\Traits\HasUUID;
 
class Producto extends Model
{
    use HasUUID;

    protected $table = 'productos';
    protected $primaryKey = 'id_producto';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $uuidFieldName = 'id_producto';
}