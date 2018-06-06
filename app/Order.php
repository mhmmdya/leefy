<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
            'uuid', 'minimum_rating', 'customer_id', 'professional_id', 'order_type_id', 'priority_status_id', 'order_status_id'
    ];

    /**
     * Get the professional record associated with the order.
     */
    public function professional()
    {
        return $this->belongsTo('App\Professional');
    }
}
