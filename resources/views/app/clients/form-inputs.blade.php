@php $editing = isset($client) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="name"
            label="Name"
            value="{{ old('name', ($editing ? $client->name : '')) }}"
            maxlength="255"
            placeholder="Name"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.select name="partner_id" label="Partner" required>
            @php $selected = old('partner_id', ($editing ? $client->partner_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the Partner</option>
            @foreach($partners as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>
</div>
