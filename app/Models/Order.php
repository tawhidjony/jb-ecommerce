<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function shipping()
    {
        return $this->hasOne(Shipping::class, 'id', 'shipping_id');
    }

    public function payment()
    {
        return $this->hasOne(Payment::class, 'id', 'payment_id');
    }

    public function order_details()
    {
        return $this->hasMany(OrderDetails::class, 'order_id', 'id');
    }
}
