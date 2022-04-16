<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merchants extends Model
{
    use HasFactory;
    // protected $table="user";
    public $primarykey ='id';
    protected $fillable = [
        "name", 'registered_by', 'provinsi', 'kabupaten', 'kecamatan', 'address',
    ];
}
