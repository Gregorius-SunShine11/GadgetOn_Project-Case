<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gadget extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'gadgets';

    public function transaction()
    {
        return $this->hasMany(Transaction::class);
    }

    public function chart()
    {
        return $this->hasMany(Cart::class);
    }
}
