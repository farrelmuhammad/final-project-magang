<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $fillable=[
        'image','name','price','product_type','description','user_id','category_id'
    ];
    /**
     * Get the user that owns the product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    /**
     * The category that belong to the product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories()
    {
        return $this->belongsTo('App\categories','category_id');
    }
    /**
     * Get the order associated with the product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function orders()
    {
        return $this->hasOne('App\orders', 'product_id', 'id');
    }
    /**
     * Get all of the review for the product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reviews()
    {
        return $this->hasMany('App\reviews','product_id','id');
    }
}
