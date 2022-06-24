<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Flight extends Model
{
    //use HasFactory;

    protected $table = 'flights';
    protected $primaryKey = 'id';

    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $dateFormat = 'U';
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'updated_date';


     public function setAirlineAttribute($value)
    {
       //return ucfirst($value);
       $this->attributes['airline'] = strtolower($value);

    }

    public function getAirlineAttribute($value)
    {
       
       return ucfirst($value);

    }
}
