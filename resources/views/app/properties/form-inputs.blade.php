@php $editing = isset($properties) @endphp

<div class="row">
    <x-inputs.group class="col-sm-6">
        <x-inputs.select name="office_id" label="Office" required>
            @php $selected = old('office_id', ($editing ? $properties->office_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the Office</option>
            @foreach($offices as $value => $label)
                <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-6">
        <x-inputs.select name="realtor_id" label="Realtor" required>
            @php $selected = old('realtor_id', ($editing ? $properties->realtor_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the Realtor</option>
            @foreach($realtors as $value => $label)
                <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
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
            required
        ></x-inputs.text>
    </x-inputs.group>
    <x-inputs.group class="col-sm-4">
        <x-inputs.text
            name="numero"
            label="Número"
            value="{{ old('numero', ($editing ? $properties->numero : '')) }}"
            maxlength="255"
            placeholder="Número"
            required
        ></x-inputs.text>
    </x-inputs.group>
    <x-inputs.group class="col-sm-4">
        <x-inputs.text
            name="complemento"
            label="Complemento"
            value="{{ old('complemento', ($editing ? $properties->complemento : '')) }}"
            maxlength="255"
            placeholder="Complemento"
            required
        ></x-inputs.text>
    </x-inputs.group>
    <x-inputs.group class="col-sm-4">
        <x-inputs.text
            name="pais"
            label="País"
            value="{{ old('pais', ($editing ? $properties->pais : '')) }}"
            maxlength="255"
            placeholder="País"
            required
        ></x-inputs.text>
    </x-inputs.group>
    <x-inputs.group class="col-sm-8">
        <x-inputs.text
            name="cidade"
            label="Cidade"
            value="{{ old('cidade', ($editing ? $properties->cidade : '')) }}"
            maxlength="255"
            placeholder="Cidade"
            required
        ></x-inputs.text>
    </x-inputs.group>
    <x-inputs.group class="col-sm-4">
        <x-inputs.text
            name="estado"
            label="Estado"
            value="{{ old('estado', ($editing ? $properties->estado : '')) }}"
            maxlength="255"
            placeholder="Estado"
            required
        ></x-inputs.text>
    </x-inputs.group>
    <x-inputs.group class="col-sm-4">
        <x-inputs.text
            name="cep"
            label="CEP"
            value="{{ old('cep', ($editing ? $properties->cep : '')) }}"
            maxlength="255"
            placeholder="CEP"
            required
        ></x-inputs.text>
    </x-inputs.group>
    <x-inputs.group class="col-sm-8">
        <x-inputs.text
            name="bairro"
            label="Bairro"
            value="{{ old('bairro', ($editing ? $properties->bairro : '')) }}"
            maxlength="255"
            placeholder="Bairro"
            required
        ></x-inputs.text>
    </x-inputs.group>
    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea
            name="descricao"
            label="Descrição"
            value="{{ old('descricao', ($editing ? $properties->descricao : '')) }}"
            maxlength="255"
            placeholder="Descrição"
            required
        ></x-inputs.textarea>
    </x-inputs.group>
    <br/>
    <x-inputs.group class="col-sm-4">
        <x-inputs.text
            name="valor"
            label="Valor"
            value="{{ old('valor', ($editing ? $properties->valor : '')) }}"
            maxlength="255"
            placeholder="Valor"
            required
        ></x-inputs.text>
    </x-inputs.group>
    <x-inputs.group class="col-sm-4">
        <x-inputs.text
            name="area"
            label="Área"
            value="{{ old('area', ($editing ? $properties->area : '')) }}"
            maxlength="255"
            placeholder="Área"
            required
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
            <option value="">Selecione</option>
            <option value="Solteiro">Solteiro</option>
            <option value="Casado">Casado</option>
            <option value="Divorciado">Divorciado</option>
            <option value="Viúvo">Viúvo</option>
            <opition value="Outros">Outros</opition>
        </x-inputs.select>
    </x-inputs.group>
    <x-inputs.group class="col-sm-6">
        <x-inputs.select class="m-auto mt-3" name="crianca" label="Crianças">
            <option value="">Selecione</option>
            <option value="Não">Não</option>
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="+04">04 ou mais</option>
        </x-inputs.select>
    </x-inputs.group>
    <x-inputs.group class="col-sm-6">
        <x-inputs.select class="m-auto mt-3" name="vaga_garagem" Label="Vagas na Garagem">
            <option value="">Selecione</option>
            <option value="Não">Não</option>
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="+04">04 ou mais</option>

        </x-inputs.select>
    </x-inputs.group>
    <x-inputs.group class="col-sm-6">
        <x-inputs.select class="m-auto mt-3" name="banheiro" label="Banheiros">
            <option value="">Selecione</option>
            <option value="Não">Não</option>
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="+04">04 ou mais</option>

        </x-inputs.select>
    </x-inputs.group>
    <x-inputs.group class="col-sm-6">
        <x-inputs.select class="m-auto mt-3" name="quartos" label="Quartos">
            <option value="">Selecione</option>
            <option value="Não">Não</option>
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="+04">04 ou mais</option>

        </x-inputs.select>
    </x-inputs.group>
    <x-inputs.group class="col-sm-6">
        <x-inputs.select class="m-auto mt-3" name="suite" label="Suites">
            <option value="">Selecione</option>
            <option value="Não">Não</option>
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="+04">04 ou mais</option>
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-6">
        <x-inputs.select class="m-auto mt-3" name="proximidade_praia" label="Proximidade da praia">
            <option value="">Selecione</option>
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
            <option value="">Selecione</option>
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
            <option value="">Selecione</option>
            <option value="Urgente">Urgente</option>
            <option value="Durante o ano">Durante o ano</option>
            <option value="Sem previsão">Sem previsão</option>
        </x-inputs.select>
    </x-inputs.group>
    <x-inputs.group class="col-sm-6">
        <x-inputs.select class="m-auto mt-3" name="financiamento" label="Financiamento">
            <option value="">Selecione</option>
            <option value="Já financiado">Já financiado</option>
            <option value="À financiar">À financiaro</option>
            <option value="À vista">À vista</option>
            <option value="Outro">Outro</option>
        </x-inputs.select>
    </x-inputs.group>
    <x-inputs.group class="col-sm-6">
        <x-inputs.select class="m-auto mt-3" name="construcao" label="Tipo de construcao">
            <option value="">Selecione</option>
            <option value="Novo">Novo</option>
            <option value="Usado">Usado</option>
            <option value="Lançamento 01 ano">Lançamento 01 ano</option>
            <option value="Lançamento 02 anos">Lançamento 02 anos</option>
            <option value="lançamento 03 anos ou mais">Lançamento 03 ou mais anos</option>

        </x-inputs.select>
    </x-inputs.group>
    <x-inputs.group class="col-sm-6">
        <x-inputs.select class=" m-auto mt-3" name="tipo_imovel" label="Tipo de Imóvel">
            <option value="">Selecione</option>
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
            <option value="">Selecione</option>
            <option value="Não">Não</option>
            <option value="Carro">Carro</option>
            <option value="Imóvel">Imóvel</option>
            <option value="Terreno">Terreno</option>
            <option value="Outro">Outro</option>
        </x-inputs.select>
    </x-inputs.group>
    <x-inputs.group class="col-sm-6">
        <x-inputs.select class="m-auto mt-3" name="mobilia" label="Mobilia">
            <option value="">Selecione</option>
            <option value="Não">Não</option>
            <option value="Sim">Sim</option>
        </x-inputs.select>
    </x-inputs.group>
    <x-inputs.group class="col-sm-6">
        <x-inputs.select class="m-auto mt-3" name="pet" label="Pet">
            <option value="">Selecione</option>
            <option value="Não">Não</option>
            <option value="Cachorro">Cachorro</option>
            <option value="Gato">Gato</option>
            <option value="Outro">Outro</option>
        </x-inputs.select>
    </x-inputs.group>
    <x-inputs.group class="col-sm-6">
        <x-inputs.select class="m-auto mt-3" name="tomador_descisao" label="Recomendado para tomador de descisão">
            <option value="">Selecione</option>
            <option value="Marido">Marido</option>
            <option value="Esposa">Esposa</option>
            <option value="Companeiro(a)">Companeiro(a)</option>
            <option value="Casal">Casal</option>
            <option value="Família">Família</option>
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <div
            x-data="imageViewer('{{ $editing && $properties->photo ? \Storage::url($properties->photo) : '' }}')"
        >
            <x-inputs.partials.label
                name="photo"
                label="Photo"
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
                    name="photo"
                    id="photo"
                    @change="fileChosen"
                />
            </div>

            @error('photo') @include('components.inputs.partials.error')
            @enderror
        </div>
    </x-inputs.group>
</div>

