<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['id', 'name', 'user_id', 'type_client', 'email', 'phone', 'street', 'number', 'neighborhood', 'complement', 'city', 'state', 'zip_code', 'country', 'whatsapp', 'facebook', 'instagram', 'description', 'created_at', 'updated_at'];

    protected $searchableFields = ['*'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
