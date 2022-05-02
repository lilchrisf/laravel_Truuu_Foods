<?php

namespace App\Models;

use App\Models\ItemModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderModel extends Model
{
    use HasFactory;
    protected $table= 'orders';
    protected $fillable = [
        'user_id',
        'fname',
        'lname',
        'phone',
        'email',
        'parish',
        'town',
        'status',
        'total_price',
        'tracking_no',
    ];
    /**
     * Get all of the orderitems for the OrderModel
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    // public function orderitem()
    // {
    //     return $this->belongsTo(ItemModel::class,'user_id','id');
    // }

    public function orderitems()
    {
        return $this->hasMany(ItemModel::class);
    }
}
