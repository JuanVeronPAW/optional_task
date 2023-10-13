<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = 'items';
    public $timestamps = true;
    protected $fillable = [
        'code',
        'name',
        'brand_id',
        'qty',
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
