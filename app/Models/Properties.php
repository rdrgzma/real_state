<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Properties extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['office_id', 'realtor_id', 'name', 'photo'];

    protected $searchableFields = ['*'];

    public function office()
    {
        return $this->belongsTo(Office::class);
    }

    public function realtor()
    {
        return $this->belongsTo(Realtor::class);
    }
}
