<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    use HasFactory;
    protected $with = ['account', 'bank', 'category', 'user'];

    public function account()
    {
        return $this->belongsTo(AkunBank::class);
    }
    public function bank()
    {
        return $this->belongsTo(Bank::class);
    }

    public function category()
    {
        return $this->belongsTo(Kategori::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
