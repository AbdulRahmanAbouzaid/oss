<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Carbon\Carbon;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function paymentMethods()
    {
        return $this->hasMany(PaymentMethod::class);
    }


    public function orders()
    {
        return $this->hasMany(Order::class);
    }


    public function addUser($request)
    {
        $user = self::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => \Hash::make($request->get('password')),
            'phone' => $request->get('phone'),
            'is_admin' => false
        ]);

        $user->addPaymentMethod($request);

    }




    public function addPaymentMethod($request)
    {
        $exp_date = Carbon::create('20'.$request->get('year'), $request->get('month'), 1, 00, 00, 00);
        $this->paymentMethods()->create([
            'card_number' => $request->get('card_number'),
            'expiring_at' => $exp_date->toDateString(),
            'holder_name' => $request->get('holder_name'),
            'cvc' => $request->get('cvc')
        ]);
    }




    public function createOrFindOrder()
    {
        if($order = $this->getActiveOrder()){
            return $order;
        }

        return $this->orders()->create([
            'is_active' => true 
        ]);
    }



    public function getActiveOrder()
    {
        return $this->orders()->where('is_active', 1)->first();
    }
}
