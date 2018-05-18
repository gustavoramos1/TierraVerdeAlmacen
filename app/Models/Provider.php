<?php

namespace TierrasVerdes\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Boyout;


class Provider extends Model
{
   
    protected $fillable = [
        'id','name','phone','address','email'
    ];



    public function boyouts()
    {
        return $this->hasMany(Boyout::class);
    }
}
