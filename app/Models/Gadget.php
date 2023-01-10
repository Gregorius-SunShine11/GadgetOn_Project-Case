<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gadget extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function transaction()
    {
        return $this->hasMany(Transaction::class, 'gadget_id', 'id');
    }

    public function chart()
    {
        return $this->hasMany(Chart::class, 'gadget_id', 'id');
    }
}
