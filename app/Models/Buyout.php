<?php

namespace TierrasVerdes\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Provider;
use App\Models\BoyoutDetail;
use App\Models\User;

class Buyout extends Model
{
protected $fillable = [
        'id','date', 'user_id', 'provider_id'
    ];
    

    public function boyout_details()
    {
        return $this->hasMany(BoyoutDetail::class);
    }
    public function providers()
    {
        return $this->belongTo(Provider::class);
    }
    public function users()
    {
        return $this->belongTo(User::class);
    }
}
