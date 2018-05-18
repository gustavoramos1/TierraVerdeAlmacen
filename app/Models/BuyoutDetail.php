<?php

namespace TierrasVerdes\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Buyout;
use App\Models\Product;


class BuyoutDetail extends Model
{
    protected $fillable = [
        'id','amount','cost_unitary','cost_total', 'buyout_id', 'product_id'
    ];

    public function buyouts()
    {
        return $this->belongTo(Buyout::class);
    }
    public function products()
    {
        return $this->belongTo(Poduct::class);
    }
}
