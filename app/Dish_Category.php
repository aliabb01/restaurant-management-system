<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish_Category extends Model
{
    protected $fillable = [
        'Category_name','amount',
    ];
    public function Dish()
    {
        return $this->hasMany('App\Dish');
    }
    protected $table = 'Dish_Categories';

}
