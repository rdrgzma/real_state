<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('office_id');
            $table->unsignedBigInteger('realtor_id');
            $table->unsignedBigInteger('keys_words_id');
            $table->string('nome');
            $table->string('foto')->nullable();
            $table->string('logradouro')->nullable();
            $table->string('cidade')->nullable();
            $table->string('estado')->nullable();
            $table->string('cep')->nullable();
            $table->string('pais')->nullable();
            $table->string('numero')->nullable();
            $table->string('complemento')->nullable();
            $table->string('preco')->nullable();
            $table->string('area')->nullable();
            $table->string('descricao')->nullable();
            $table->enum('status', ['Ativo', 'Inativo'])->default('Ativo');
            $table->enum('estado_civil', ['Solteiro', 'Casado', 'Divorciado', 'Viúvo', 'Outro'])->nullable();
            $table->enum('crianca', ['Não', '01', '02', '03', '4 ou mais'])->default('Não');
            $table->enum('vaga_garagem', ['Não', '01', '02', '03', '4 ou mais'])->default('Não');
            $table->enum('banheiro', ['Não', '01', '02', '03', '4 ou mais'])->default('Não');
            $table->enum('quarto', ['Não', '01', '02', '03', '4 ou mais'])->default('Não');
            $table->enum('suite', ['Não', '01', '02', '03', '4 ou mais'])->default('Não');
            $table->enum('tomador_decisao', ['Marido', 'Esposa', 'Companeiro(a)', 'Casal', 'Família'])->default('Família');
            $table->enum('localizacao', ['Centros Urbanos', 'Área Comercial', 'Acesso Rodovia', 'Área Rural', 'Condomínio', 'Outros'])->default('Centros Urbanos');
            $table->enum('prazo_venda', ['Urgente', 'Durante o ano', 'Sem previsão'])->default('Urgente');
            $table->enum('financiamento', ['Já financiado', 'À financiar', 'À vista', 'Outro'])->default('Á financiar');
            $table->enum('construcao', ['Novo', 'Usado', 'Lançamento 01 ano', 'Lançcamento 02 anos', 'lançamento 03 anos ou mais'])->default('Novo');
            $table->enum('tipo_imovel', ['Casa', 'Apartamento', 'Cobertura', 'Terreno', 'Chacará', 'Sobrado', 'Flat', 'Kitnet', 'Comercial', 'Loft', 'Terreno', 'Industrial', 'Outros'])->default('Casa');
            $table->enum('tipo_permuta', ['Não', 'Carro', 'Imóvel', 'Terreno', 'Outro'])->default('Não');
            $table->enum('tipo_venda', ['Venda', 'Permuta'])->default('Venda');
            $table->enum('mobilia', ['Não', 'Sim'])->default('Não');
            $table->enum('pet', ['Não', 'Cachorro', 'Gato', 'Outro'])->default('Não');
            $table->string('tipo_pet')->nullable();
            $table->enum('fumante', ['Não', 'Sim'])->default('Não');
            $table->string('valor_condominio')->nullable();
            $table->string('valor_iptu')->nullable();
            $table->enum('trabalha_fora', ['Não', 'Marido', 'Esposa', 'Companeiro(a)', 'Ambos'])->default('Não');
            $table->enum('tipo_trabalho', ['Não', 'Comercial', 'Industrial', 'Outros'])->default('Não');
            $table->enum('proximidade_praia', ['Não', 'Orla com vista', 'Orla sem vista', 'Quadra com vista', 'Quadra sem vista', 'Outro'])->default('Não');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
