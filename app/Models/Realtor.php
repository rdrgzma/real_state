<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Realtor extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['office_id', 'name', 'user_id'];

    protected $searchableFields = ['*'];

    public function office()
    {
        return $this->belongsTo(Office::class);
    }

    public function partners()
    {
        return $this->hasMany(Partner::class);
    }

    public function allProperties()
    {
        return $this->hasMany(Properties::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
