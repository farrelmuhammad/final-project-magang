<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    protected $fillable = [
        'name'
    ];
    /**
     * Get all of the product for the categories
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany('App\products', 'category_id', 'id');
    }
}
