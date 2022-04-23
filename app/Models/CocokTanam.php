<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CocokTanam extends Model
{
    protected $table = 'cocok_tanam';
    protected $fillable = ['headline', 'photo', 'description'];
    use HasFactory;
}
