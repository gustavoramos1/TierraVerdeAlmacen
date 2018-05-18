<?php

namespace TierrasVerdes\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Product;


class TypeProduct extends Model
{
    protected $fillable = [
        'id','amount','cost_unitary','cost_total', 'sale_id', 'product_id'
    ];

    public function products()
    {
        return $this->hasMany(Poduct::class);
    }
}
