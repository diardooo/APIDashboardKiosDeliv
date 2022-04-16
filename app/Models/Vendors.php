<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendors extends Model
{
    use HasFactory;
    // protected $table="user";
    public $primarykey ='id';
    protected $fillable = [
        "name", 'balance',
    ];
}
