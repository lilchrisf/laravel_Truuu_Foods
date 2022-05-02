<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrderitemModel;

class Rating extends Model
{
    use HasFactory;
    protected $table ='orders';
    protected $fillable =[
        'user_id',
        'prod_id',
        'stars_rated',
    ];

    // public function orderitem(): HasMany
    // {
    //     return $this->hasMany(OrderitemModel::class);
    // }

    // public function orderitems()
    // {
    //     return $this->belongsTo(OrderitemModel::class);
    // }
}
