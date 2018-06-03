<?php

namespace TierrasVerdes\Models;

use Illuminate\Database\Eloquent\Model;
use TierrasVerdes\Models\Sale;

class Client extends Model
{
protected $fillable = [
        'id','document','name','phone','sex','birthday', 'address', 'email'
    ];
  public function sales()
    {
        return $this->hasMany(Sale::class);
    }
}
