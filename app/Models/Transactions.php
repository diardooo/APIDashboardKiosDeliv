<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    use HasFactory;
    // protected $table="user";
    public $primarykey ='id';
    protected $fillable = [
        "service_id", 'vendor_id', 'merchant_id', 'status', 'buy', 'price', 'admin', 'commission',
    ];
}
