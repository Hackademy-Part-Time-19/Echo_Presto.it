<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'surname', 'city', 'address', 'description', 'advertisements_placed'
    ];
    protected $table = 'profiles';
    public $timestamps = false;

    
}


