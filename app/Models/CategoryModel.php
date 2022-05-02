<?php

namespace App\Models;
use App\Models\ProductModel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    use HasFactory;
    protected $table= 'category';
    protected $fillable = [
        'name',
        'slug',
        'description',
        'popular',
        'status',
        'image',
        'meta_title',
        'meta_descrip',
        'meta_keyward',
    ];

    public function products()
    {
        return $this->hasMany(ProductModel::class,);
    }
}
