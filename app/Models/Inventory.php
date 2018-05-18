<?php

namespace TierrasVerdes\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Product;


class Inventoriy extends Model
{
    protected $fillable = [
        'id','amount','min_stock','max_stock', 'product_id'
    ];
    public function products()
    {
        return $this->belongTo(Product::class);
   
    }
}
