<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    protected $fillable = [
        'title','price','Description' ,'Calorie', 'image','Category_name',
    ];
    public function Dish_Category()
    {
        return $this->belongsTo('App\Dish_Category');
    }
}
