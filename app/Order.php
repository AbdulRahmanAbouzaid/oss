<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];
    
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function products()
    {
        return $this->belongsToMany('App\Product');
    }


    public function bill()
    {
        return $this->hasOne(Bill::class);
    }



    public function getTotalPrice()
    {
        return $this->products()->sum('price');
    }



    public function getBill(Type $var = null)
    {
        if($bill = $this->bill){
            return $bill;
        }
        return $this->bill()->create([
            'bill_number' => hexdec(uniqid()),
            'bill_total' => $this->getTotalPrice(),
        ]);
    }


}
