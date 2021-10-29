<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Office extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['name', 'user_id'];

    protected $searchableFields = ['*'];

    public function realtors()
    {
        return $this->hasMany(Realtor::class);
    }

    public function allProperties()
    {
        return $this->hasMany(Properties::class);
    }

    public function partners()
    {
        return $this->hasMany(Partner::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
