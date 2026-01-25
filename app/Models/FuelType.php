<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FuelType extends Model
{
    // by defult when the name of model being FuelType the laravle thinks the table name is fuel_types  if being Car laravel thinks cars in plorel format
    // protected $table = "fuel_types";
    //define the model connectd tatbes munvaly
    // protected $primaryKey = 'id';
     // by deful is id if we want to change we can prove here instade id

    //  alos by defult primarykey is utho increment if we want to change
    // public $incrementing = false;


    // by defult utho incremment vlue is integer if we want to change
    // protected $keyType = 'string';

    // by defult model generate timestaps if we dont wnat to have time stamps
    public $timestamps = false;

    // changing the defult name of creatd_at and updated_at of table column
    // const CREATED_AT = "create_date";
    // const UPDATED_AT = "update_date";
    

    //if we put to null just one of them laravle thinks this dose not have exist
    //const UPDATED_AT = null; // now laravel think just created_at field exist

    protected $fillable = [
        'name'
    ];

    public function cars(): HasMany{
        return $this->hasMany(Car::class);
    }

}
