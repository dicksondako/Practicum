<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KekeOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'location', 'keke_user',
    ];

}
