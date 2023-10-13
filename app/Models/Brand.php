<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $table = 'brands';
    public $timestamps = true;
    protected $fillable = [
        'brand',
    ];

    public function item()
    {
        return $this->hasMany(Item::class);
    }
}
