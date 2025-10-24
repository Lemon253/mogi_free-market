<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'post_code',
        'prefecture',
        'city',
        'street',
        'name',
        'is_default',
    ];

    //リレーションの設定
    public function users()
    {
        return $this->belongsTo(User::class );
    }
}
