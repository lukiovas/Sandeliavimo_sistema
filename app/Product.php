<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public $primaryKey = 'product_id';
    
    public $timestamps = true;
    
    public function user() {
        return $this->belongsTo('App\User');
    }
}
