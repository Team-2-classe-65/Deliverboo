<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    protected $fillable = [
        "name", "description", "price"
    ];

    public function user() {
        return $this->belongsTo("App\User");
    }

    public function orders() {
        return $this->belongsToMany("App\Order");
    }
}
