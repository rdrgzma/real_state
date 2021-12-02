<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['id', 'office_id', 'realtor_id', 'keys_words_id', 'nome', 'foto', 'logradouro', 'cidade', 'estado', 'cep', 'pais', 'numero', 'complemento', 'preco', 'area', 'descricao', 'status', 'estado_civil', 'crianca', 'vaga_garagem', 'banheiro', 'quarto', 'suite', 'tomador_decisao', 'localizacao', 'prazo_venda', 'financiamento', 'construcao', 'tipo_imovel', 'tipo_permuta', 'tipo_venda', 'mobilia', 'pet', 'tipo_pet', 'fumante', 'valor_condominio', 'valor_iptu', 'trabalha_fora', 'tipo_trabalho', 'proximidade_praia', 'created_at'];

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
