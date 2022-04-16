<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    // protected $table="user";
    public $primarykey ='id';
    protected $fillable = [
        "name", 'email', 'password', 'level_user', 'photo',
    ];
}
