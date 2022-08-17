<?php
 
namespace App\Models;
 
use BinaryCabin\LaravelUUID\Traits\HasUUID;
use Illuminate\Database\Eloquent\Model;
 
class Cliente extends Model
{
    use HasUUID;

    protected $table = 'clientes';
    protected $primaryKey = 'id_cliente';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $uuidFieldName = 'id_cliente';
}