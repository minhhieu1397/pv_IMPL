<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $table = 'purchase';

    public const STATUS_ACCEPT = 1;
    public const STATUS_REJECT = 0;
    public const STATUS_NO_PROCESS = 2;

    public const STATUS = [
        self::STATUS_ACCEPT => 'Accept',
        self::STATUS_REJECT => 'Reject',
        self::STATUS_NO_PROCESS => 'No Process',
    ];

    protected $fillable = [
        'product_id', 'buyer_id', 'status'
    ];

    public function product()
    {
        return $this->belongsTo('App\Models\Product','product_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'buyer_id');
    }
}
