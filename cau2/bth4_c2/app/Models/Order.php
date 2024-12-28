<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['customer_id', 'order_date', 'status'];

    public function orderDetails(){
        return $this->belongsTo(Order_detail::class);
    }

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public function products(){
        return $this->hasmany(Order_detail::class);
    }
}
