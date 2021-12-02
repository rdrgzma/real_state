@php $editing = isset($properties) @endphp

<div class="row">
    <x-inputs.group class="col-sm-6">
        <x-inputs.select name="office_id" label="{{ __('crud.properties.inputs.office_id') }}" required>
            @php $selected = old('office_id', ($editing ? $properties->office_id : '')) @endphp

            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the Office</option>
            @foreach($offices as $office)
                <option
                    value="{{ $office->id }}" {{ $selected == $office->id ? 'selected' : '' }}>{{ $office->name }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-6">
        <x-inputs.select name="realtor_id" label="Realtor" required>
            @php $selected = old('realtor_id', ($editing ? $properties->realtor_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the Realtor</option>
            @foreach($realtors as $realtor)
                <option
                    value="{{ $realtor->id }}" {{ $selected == $realtor->id ? 'selected' : '' }} >{{ $realtor->name }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="nome"
            label="Nome"
            value="{{ old('nome', ($editing ? $properties->nome : '')) }}"
            maxlength="255"
            placeholder="Nome"
            required
        ></x-inputs.text>
    </x-inputs.group>
    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="logradouro"
            label="Logradouro"
            value="{{ old('logradouro', ($editing ? $properties->logradouro : '')) }}"
            maxlength="255"
            placeholder="Logradouro"

        ></x-inputs.text>
    </x-inputs.group>
    <x-inputs.group class="col-sm-4">
        <x-inputs.text
            name="numero"
            label="Número"
            value="{{ old('numero', ($editing ? $properties->numero : '')) }}"
            maxlength="255"
            placeholder="Número"

        ></x-inputs.text>
    </x-inputs.group>
    <x-inputs.group class="col-sm-4">
        <x-inputs.text
            name="complemento"
            label="Complemento"
            value="{{ old('complemento', ($editing ? $properties->complemento : '')) }}"
            maxlength="255"
            placeholder="Complemento"

        ></x-inputs.text>
    </x-inputs.group>
    <x-inputs.group class="col-sm-4">
        <x-inputs.text
            name="pais"
            label="País"
            value="{{ old('pais', ($editing ? $properties->pais : '')) }}"
            maxlength="255"
            placeholder="País"

        ></x-inputs.text>
    </x-inputs.group>
    <x-inputs.group class="col-sm-8">
        <x-inputs.text
            name="cidade"
            label="Cidade"
            value="{{ old('cidade', ($editing ? $properties->cidade : '')) }}"
            maxlength="255"
            placeholder="Cidade"

        ></x-inputs.text>
    </x-inputs.group>
    <x-inputs.group class="col-sm-4">
        <x-inputs.text
            name="estado"
            label="Estado"
            value="{{ old('estado', ($editing ? $properties->estado : '')) }}"
            maxlength="255"
            placeholder="Estado"

        ></x-inputs.text>
    </x-inputs.group>
    <x-inputs.group class="col-sm-4">
        <x-inputs.text
            name="cep"
            label="CEP"
            value="{{ old('cep', ($editing ? $properties->cep : '')) }}"
            maxlength="255"
            placeholder="CEP"

        ></x-inputs.text>
    </x-inputs.group>
    <x-inputs.group class="col-sm-8">
        <x-inputs.text
            name="bairro"
            label="Bairro"
            value="{{ old('bairro', ($editing ? $properties->bairro : '')) }}"
            maxlength="255"
            placeholder="Bairro"

        ></x-inputs.text>
    </x-inputs.group>
    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea
            name="descricao"
            label="Descrição"
            value="{{ old('descricao', ($editing ? $properties->descricao : '')) }}"
            maxlength="255"
            placeholder="Descrição"

        ></x-inputs.textarea>
    </x-inputs.group>
    <br/>
    <x-inputs.group class="col-sm-4">
        <x-inputs.text
            name="preco"
            label="Valor"
            value="{{ old('valor', ($editing ? $properties->preco : '')) }}"
            maxlength="255"
            placeholder="Valor"

        ></x-inputs.text>
    </x-inputs.group>
    <x-inputs.group class="col-sm-4">
        <x-inputs.text
            name="area"
            label="Área"
            value="{{ old('area', ($editing ? $properties->area : '')) }}"
            maxlength="255"
            placeholder="Área"

        ></x-inputs.text>
    </x-inputs.group>
    <x-inputs.group class="col-sm-4">
        <x-inputs.text
            name="valor_iptu"
            label="Valor do IPTU"
            value="{{ old('valor_iptu', ($editing ? $properties->valor_iptu : '')) }}"
            maxlength="255"
            placeholder="Valor do IPTU"

        ></x-inputs.text>
    </x-inputs.group>
    <x-inputs.group class="col-sm-6 ">
        <x-inputs.select class="my-auto mt-3" name="estado_civil" Label="Recomendação Estado Civil">
            <option disabled value="">Selecione</option>
            <option value="Solteiro">Solteiro</option>
            <option value="Casado">Casado</option>
            <option value="Divorciado">Divorciado</option>
            <option value="Viúvo">Viúvo</option>
            <opition value="Outros">Outros</opition>
        </x-inputs.select>
    </x-inputs.group>
    <x-inputs.group class="col-sm-6">
        <x-inputs.select class="m-auto mt-3" name="crianca" label="Crianças">
            <option disabled value="">Selecione</option>
            <option value="Não">Não</option>
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="+04">04 ou mais</option>
        </x-inputs.select>
    </x-inputs.group>
    <x-inputs.group class="col-sm-6">
        <x-inputs.select class="m-auto mt-3" name="vaga_garagem" Label="Vagas na Garagem">
            <option disabled value="">Selecione</option>
            <option value="Não">Não</option>
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="+04">04 ou mais</option>

        </x-inputs.select>
    </x-inputs.group>
    <x-inputs.group class="col-sm-6">
        <x-inputs.select class="m-auto mt-3" name="banheiro" label="Banheiros">
            <option disabled value="">Selecione</option>
            <option value="Não">Não</option>
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="+04">04 ou mais</option>

        </x-inputs.select>
    </x-inputs.group>
    <x-inputs.group class="col-sm-6">
        <x-inputs.select class="m-auto mt-3" name="quartos" label="Quartos">
            <option disabled value="">Selecione</option>
            <option value="Não">Não</option>
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="+04">04 ou mais</option>

        </x-inputs.select>
    </x-inputs.group>
    <x-inputs.group class="col-sm-6">
        <x-inputs.select class="m-auto mt-3" name="suite" label="Suites">
            <option disabled value="">Selecione</option>
            <option value="Não">Não</option>
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="+04">04 ou mais</option>
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-6">
        <x-inputs.select class="m-auto mt-3" name="proximidade_praia" label="Proximidade da praia">
            <option disabled value="">Selecione</option>
            <option value="Não">Não</option>
            <option value="Orla com vista">Orla com vista</option>
            <option value="Orla sem vista">Orla sem vista</option>
            <option value="Quadra com vista">Quadra com vista</option>
            <option value="Quadra sem vista">Quadra sem vista</option>
            <option value="Outro">Outro</option>

        </x-inputs.select>
    </x-inputs.group>
    <x-inputs.group class="col-sm-6">
        <x-inputs.select class="m-auto m-3" name="localizacao" label="Localização">
            <option disabled value="">Selecione</option>
            <option value="Centros Urbanos">Centros Urbanos</option>
            <option value="Condomínio">Condomínio</option>
            <option value="Área Comercial">Área Comercial</option>
            <option value="Acesso Rodovia">Acesso Rodovia</option>
            <option value="Área Rural">Área Rural</option>
            <option value="Outros">Outros</option>
        </x-inputs.select>
    </x-inputs.group>
    <x-inputs.group class="col-sm-6">
        <x-inputs.select class="m-auto mt-3" name="prazo_venda" label="Prazo para Venda">
            <option disabled value="">Selecione</option>
            <option value="Urgente">Urgente</option>
            <option value="Durante o ano">Durante o ano</option>
            <option value="Sem previsão">Sem previsão</option>
        </x-inputs.select>
    </x-inputs.group>
    <x-inputs.group class="col-sm-6">
        <x-inputs.select class="m-auto mt-3" name="financiamento" label="Financiamento">
            <option disabled value="">Selecione</option>
            <option value="Já financiado">Já financiado</option>
            <option value="À financiar">À financiar</option>
            <option value="À vista">À vista</option>
            <option value="Outro">Outro</option>
        </x-inputs.select>
    </x-inputs.group>
    <x-inputs.group class="col-sm-6">
        <x-inputs.select class="m-auto mt-3" name="construcao" label="Tipo de construção">
            <option disabled value="">Selecione</option>
            <option value="Novo">Nova</option>
            <option value="Usado">Usada</option>
            <option value="Lançamento 01 ano">Lançamento 01 ano</option>
            <option value="Lançamento 02 anos">Lançamento 02 anos</option>
            <option value="lançamento 03 anos ou mais">Lançamento 03 ou mais anos</option>

        </x-inputs.select>
    </x-inputs.group>
    <x-inputs.group class="col-sm-6">
        <x-inputs.select class=" m-auto mt-3" name="tipo_imovel" label="Tipo de Imóvel">
            <option disabled value="">Selecione</option>
            <option value="Casa">Casa</option>
            <option value="Apartamento">Apartamento</option>
            <option value="Cobertura">Cobertura</option>
            <option value="Flat">Flat</option>
            <option value="Kitnet">Kitnet</option>
            <option value="Loft">Loft</option>
            <option value="Sobrado">Sobrado</option>
            <option value="Terreno">Terreno</option>
            <option value="Chacará">Chacará</option>
            <option value="Comercial">Comercial</option>
            <option value="Industrial">Industrial</option>
            <option value="Outro">Outro</option>
        </x-inputs.select>
    </x-inputs.group>
    <x-inputs.group class="col-sm-6">
        <x-inputs.select class="m-auto mt-3" name="tipo_permuta" label="Tipo de Permuta">
            <option disabled value="">Selecione</option>
            <option value="Não">Não</option>
            <option value="Carro">Carro</option>
            <option value="Imóvel">Imóvel</option>
            <option value="Terreno">Terreno</option>
            <option value="Outro">Outro</option>
        </x-inputs.select>
    </x-inputs.group>
    <x-inputs.group class="col-sm-6">
        <x-inputs.select class="m-auto mt-3" name="mobilia" label="Mobília">
            <option disabled value="">Selecione</option>
            <option value="Não">Não</option>
            <option value="Sim">Sim</option>
        </x-inputs.select>
    </x-inputs.group>
    <x-inputs.group class="col-sm-6">
        <x-inputs.select class="m-auto mt-3" name="pet" label="Pet">
            <option disabled value="">Selecione</option>
            <option value="Não">Não</option>
            <option value="Sim">Sim</option>

        </x-inputs.select>
    </x-inputs.group>
    <x-inputs.group class="col-sm-6">
        <x-inputs.select class="m-auto mt-3" name="tomador_decisao" label="Recomendado para tomador de descisão">
            <option disabled value="">Selecione</option>
            <option value="Marido">Marido</option>
            <option value="Esposa">Esposa</option>
            <option value="Companeiro(a)">Companheiro(a)</option>
            <option value="Casal">Casal</option>
            <option value="Família">Família</option>
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <div
            x-data="imageViewer('{{ $editing && $properties->foto ? \Storage::url($properties->foto) : '' }}')"
        >
            <x-inputs.partials.label
                name="foto"
                label="Foto"
            ></x-inputs.partials.label
            >
            <br/>

            <!-- Show the image -->
            <template x-if="imageUrl">
                <img
                    :src="imageUrl"
                    class="object-cover rounded border border-gray-200"
                    style="width: 100px; height: 100px;"
                />
            </template>

            <!-- Show the gray box when image is not available -->
            <template x-if="!imageUrl">
                <div
                    class="border rounded border-gray-200 bg-gray-100"
                    style="width: 100px; height: 100px;"
                ></div>
            </template>

            <div class="mt-2">
                <input
                    type="file"
                    name="foto"
                    id="foto"
                    @change="fileChosen"
                />
            </div>

            @error('foto') @include('components.inputs.partials.error')
            @enderror
        </div>
    </x-inputs.group>
</div>

