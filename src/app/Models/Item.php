<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'brand_id',
        'item_name',
        'description',
        'price',
        'shipping_fee',
        'status',
        'image_path',
    ];

    public function categories()
    {
        // category_item 中間テーブルを介して Item モデルと関連付け
        return $this->belongsToMany(Category::class, 'category_item')->withTimestamps();
    }

    public function brands()
    {
        //Brandsテーブルと関連付け
        return $this->belongsTo(Brand::class);
    }

}
