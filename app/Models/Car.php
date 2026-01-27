<?php

namespace App\Models;

// use app/Models/Model.php;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car extends Model
{
    use SoftDeletes, HasFactory;
    protected $fillable = [
        "maker_id",
        "model_id",
        "year",
        "price",
        "vin",
        "mileage",
        "car_type_id",
        "fuel_type_id",
        "user_id",
        "city_id",
        "address" ,
        "phone",
        "description",
        "published_at"
    ];

    public function carType()  {
       return $this->belongsTo(CarType::class);
    }

    public function fuelType(){
        return $this->belongsTo(FuelType::class);
    }

    public function maker(){
        return $this->belongsTo(Maker::class);
    }

    public function model(){
        return $this->belongsTo(Model::class);
    }

    public function owner(){
        return $this->belongsTo(User::class,"user_id");
    }

    public function city(){
        return $this->belongsTo(City::class);
    }
    public function features(): HasOne
    {
        return $this->hasOne(CarFeatures::class,"car_id");
    }

    public function primaryImage(){
        return $this->hasOne(CarImage::class)->oldestOfMany('position');
    }

    public function image() :HasMany{
        return $this->hasMany(CarImage::class);
    }

    

    public function favoredUsers(){
        return $this->belongsToMany(User::class,'favourite_cars','car_id','user_id');
    }
}
