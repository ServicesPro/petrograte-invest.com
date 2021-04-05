<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaidPack extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function users() {
        return $this->hasMany(User::class);
    }

    public function packs()
    {
        return $this->belongsToMany(Pack::class);
    }

    public function payoffs()
    {
        return $this->hasMany(Payoff::class);
    }
}
