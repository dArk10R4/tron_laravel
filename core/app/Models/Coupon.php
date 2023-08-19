<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Coupon extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [
        'code', 'apply_limit', 'expire_time', 'bonus','status'
        ];
    public function users()
    {
        return $this->belongsToMany(User::class,'users_coupons');
    }
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($coupon) {
            $coupon->code = Coupon::generateUniqueCouponCode();
        });
    }
    public static function generateUniqueCouponCode($length = 10)
    {
        $code = Str::random($length);

        while (static::where('code', $code)->exists()) {
            $code = Str::random($length);
        }

        return $code;
    }
}
// codu 
// vaxti
// her adama verdiyi pul 
// 