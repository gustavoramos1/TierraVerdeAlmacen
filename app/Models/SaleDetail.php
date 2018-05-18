<?php

namespace TierrasVerdes\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Sale;
use App\Models\Product;


class SaleDetail extends Model
{
    protected $fillable = [
        'id','amount','cost_unitary','cost_total', 'sale_id', 'product_id'
    ];

    public function sales()
    {
        return $this->belongTo(Sale::class);
    }
    public function products()
    {
        return $this->belongTo(Poduct::class);
    }
}

