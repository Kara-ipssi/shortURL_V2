<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;

    protected $table = 'link';

    // attributs
    protected $fillable = [
        'keyword', 'url', 'click', 'ip'
    ];
}
