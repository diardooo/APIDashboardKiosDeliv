<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banks extends Model
{
    use HasFactory;
    // protected $table="user";
    public $primarykey ='id';
    protected $fillable = [
        "name", 'account_number',
    ];
}
