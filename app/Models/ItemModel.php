<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemModel extends Model
{
    use HasFactory;
    protected $table= 'order_items';
    protected $fillable = [
        'order_id',
        'prod_id',
        'price',
        'qty',
        'order_model_id',
    ];

            /**
         * Get the user that owns the OrderitemModel
         *
         * @return \Illuminate\Database\Eloquent\Relations\HasMany
         */
        public function products()
        {
            return $this->belongsTo(ProductModel::class,'prod_id','id');
        }

}
