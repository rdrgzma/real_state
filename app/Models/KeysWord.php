<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeysWord extends Model
{
    use HasFactory;

    protected $table = 'keys_words';
    protected $fillable = ['id', 'name'];
}
