<?php

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductModell;
use App\Models\OrderModel;

class OrderitemModel extends Model
{
    use HasFactory;
    protected $table= 'order_items';
    protected $fillable = [
        'order_model_id',
        'order_id ',
        'prod_id',
        'price',
        'qty',
    ];

    /**
     * Get the user that owns the OrderitemModel
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function products(): BelongsTo
    {
        return $this->belongsTo(ProductModell::class, 'prod_id', 'id');
    }


        /**
         * Get the user that owns the OrderitemModel
         *
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
         */
        public function Order(): BelongsTo
        {
            return $this->belongsTo(OrderModel::class);
        }

}

