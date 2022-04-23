<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farmer extends Model
{
    protected $table = 'farmer';
    protected $fillable = [
        'name', 'photo', 'contact', 'list_of_plant'
    ];
    use HasFactory;
}
