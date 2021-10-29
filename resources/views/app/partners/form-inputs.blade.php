@php $editing = isset($partner) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.select name="office_id" label="Office" required>
            @php $selected = old('office_id', ($editing ? $partner->office_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the Office</option>
            @foreach($offices as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="name"
            label="Name"
            value="{{ old('name', ($editing ? $partner->name : '')) }}"
            maxlength="255"
            placeholder="Name"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.select name="realtor_id" label="Realtor" required>
            @php $selected = old('realtor_id', ($editing ? $partner->realtor_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the Realtor</option>
            @foreach($realtors as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.select name="user_id" label="User" required>
            @php $selected = old('user_id', ($editing ? $partner->user_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the User</option>
            @foreach($users as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>
</div>
