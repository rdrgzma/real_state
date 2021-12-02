@php $editing = isset($client) @endphp

<div class="row">
    <x-inputs.group class="col-sm-6 form-check form-check-inline">
        <x-inputs.partials.label for="name" name="Tipo " label="Tipo"/>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="sale" name=type_client id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Venda
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name=type_client value="acquisition" id="flexCheckChecked"
                   checked>
            <label class="form-check-label" for="flexCheckChecked">
                Compra
            </label>
        </div>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="name"
            label="Nome"
            value="{{ old('name', ($editing ? $client->name : '')) }}"
            maxlength="255"
            placeholder="Nome"
            required
        ></x-inputs.text>
    </x-inputs.group>
    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="email"
            label="Email"
            value="{{ old('email', ($editing ? $client->email : '')) }}"
            maxlength="255"
            placeholder="Name"
            required
        ></x-inputs.text>
    </x-inputs.group>
    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="street"
            label="Logradouro"
            value="{{ old('street', ($editing ? $properties->street : '')) }}"
            maxlength="255"
            placeholder="Logradouro"
        ></x-inputs.text>
    </x-inputs.group>
    <x-inputs.group class="col-sm-4">
        <x-inputs.text
            name="number"
            label="Número"
            value="{{ old('number', ($editing ? $properties->number : '')) }}"
            maxlength="255"
            placeholder="Número"

        ></x-inputs.text>
    </x-inputs.group>
    <x-inputs.group class="col-sm-4">
        <x-inputs.text
            name="complement"
            label="Complemento"
            value="{{ old('complement', ($editing ? $properties->complement : '')) }}"
            maxlength="255"
            placeholder="Complemento"

        ></x-inputs.text>
    </x-inputs.group>
    <x-inputs.group class="col-sm-4">
        <x-inputs.text
            name="country"
            label="País"
            value="{{ old('country', ($editing ? $properties->country : '')) }}"
            maxlength="255"
            placeholder="País"

        ></x-inputs.text>
    </x-inputs.group>
    <x-inputs.group class="col-sm-8">
        <x-inputs.text
            name="city"
            label="Cidade"
            value="{{ old('city', ($editing ? $properties->city : '')) }}"
            maxlength="255"
            placeholder="Cidade"

        ></x-inputs.text>
    </x-inputs.group>
    <x-inputs.group class="col-sm-4">
        <x-inputs.text
            name="state"
            label="Estado"
            value="{{ old('state', ($editing ? $properties->state : '')) }}"
            maxlength="255"
            placeholder="Estado"

        ></x-inputs.text>
    </x-inputs.group>
    <x-inputs.group class="col-sm-4">
        <x-inputs.text
            name="zip_code"
            label="CEP"
            value="{{ old('zipcode', ($editing ? $properties->zipcode : '')) }}"
            maxlength="255"
            placeholder="CEP"

        ></x-inputs.text>
    </x-inputs.group>
    <x-inputs.group class="col-sm-8">
        <x-inputs.text
            name="neighborhood"
            label="Bairro"
            value="{{ old('neighborhood', ($editing ? $properties->neighborhood : '')) }}"
            maxlength="255"
            placeholder="Bairro"

        ></x-inputs.text>
    </x-inputs.group>
    <x-inputs.group class="col-sm-4">
        <x-inputs.text
            name="phone"
            label="Telefone"
            value="{{ old('telefone', ($editing ? $properties->telefone : '')) }}"
            maxlength="255"
            placeholder="Telefone"

        ></x-inputs.text>
    </x-inputs.group>


    <x-inputs.group class="col-sm-4">
        <x-inputs.text
            name="whatsapp"
            label="Whatsapp"
            value="{{ old('whatsapp', ($editing ? $properties->whatsapp : '')) }}"
            maxlength="255"
            placeholder="Whatsapp">

        </x-inputs.text>
    </x-inputs.group>
    <x-inputs.group class="col-sm-4">
        <x-inputs.text
            name="facebook"
            label="Facebook"
            value="{{ old('facebook', ($editing ? $properties->facebook : '')) }}"
            maxlength="255"
            placeholder="Facebook">

        </x-inputs.text>
    </x-inputs.group>
    <x-inputs.group class="col-sm-4">
        <x-inputs.text
            name="instagran"
            label="Instagran"
            value="{{ old('instagran', ($editing ? $properties->instagran : '')) }}"
            maxlength="255"
            placeholder="Instagran">

        </x-inputs.text>
    </x-inputs.group>
    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea
            name="description"
            label="Descrição"
            value="{{ old('descricao', ($editing ? $properties->descricao : '')) }}"
            maxlength="255"
            placeholder="Descrição"

        ></x-inputs.textarea>
    </x-inputs.group>
    <br/>
</div>
