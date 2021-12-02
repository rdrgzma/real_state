<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['id', 'name', 'partner_id'];

    protected $searchableFields = ['*'];

    public function partner()
    {
        return $this->belongsTo(Partner::class);
    }
}
