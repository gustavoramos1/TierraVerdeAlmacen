<?php

namespace TierrasVerdes\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Client;
use App\User;
use App\Models\SaleDatail;

class Sale extends Model
{
    protected $fillable = [
        'id','date' , 'client_id', 'user_id'
    ];
    
    public function users()
    {
        return $this->belongTo(User::class);
    }
    public function clients()
    {
        return $this->belongTo(Client::class);
    }
    public function sale_details()
    {
        return $this->hasmany(SaleDetail::class);
    }
}

