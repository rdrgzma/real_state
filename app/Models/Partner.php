<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['id', 'office_id', 'name', 'realtor_id', 'user_id'];

    protected $searchableFields = ['*'];

    public function office()
    {
        return $this->belongsTo(Office::class);
    }

    public function clients()
    {
        return $this->hasMany(Client::class);
    }

    public function realtor()
    {
        return $this->belongsTo(Realtor::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
