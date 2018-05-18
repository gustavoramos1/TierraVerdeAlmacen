<?php

namespace TierrasVerdes\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Inventory;
use App\Models\BuyoutDetail;
use App\Models\SaleDetail;
use App\Models\TypeProduct;

class Product extends Model
{
    protected $fillable = [
        'id','name','description', 'type_product_id'
    ];

    public function buyout_details()
    {
        return $this->hasMany(BuyoutDetail::class);
    }
    public function sale_details()
    {
        return $this->hasMany(SaleDetail::class);
   
    }
    public function inventories()
    {
        return $this->hasMany(Inventory::class);
   
    }
    public function Type_products()
    {
        return $this->belongTo(TypeProduct::class);
   
    }
}
