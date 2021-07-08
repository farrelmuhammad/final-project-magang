<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reviews extends Model
{
    protected $fillable=[
        'user_id','product_id','score','description'
    ];
    /**
     * Get the user that owns the review
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    /**
     * Get the product that owns the review
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function products()
    {
        return $this->belongsTo('App\products','product_id');
    }
}
