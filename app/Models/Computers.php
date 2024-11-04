<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computers extends Model
{
    use HasFactory;

    protected $table='computers';
    
    //mutador
    protected function model(): Attribute
    {
        return Attribute::make(
            set: function (string $value){
                return strtolower($value);
            }
            //AQUI PUEDE IR EL GET
        );
     //mutador 
        return Attribute::make(
            get: function (string $value){
                return strtoupper($value);
            }
            //AQUI PUEDE IR EL SET
        );
    }
    

}

