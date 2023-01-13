<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    //field name
    protected $table = 'profiles';
    protected $fillable = ['nama', 'alamat'];
}
