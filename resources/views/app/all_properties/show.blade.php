@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('all-properties.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.all_properties.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.all_properties.inputs.office_id')</h5>
                    <span
                        >{{ optional($properties->office)->name ?? '-' }}</span
                    >
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.all_properties.inputs.realtor_id')</h5>
                    <span
                        >{{ optional($properties->realtor)->name ?? '-' }}</span
                    >
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.all_properties.inputs.name')</h5>
                    <span>{{ $properties->name ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.all_properties.inputs.photo')</h5>
                    <x-partials.thumbnail
                        src="{{ $properties->photo ? \Storage::url($properties->photo) : '' }}"
                        size="150"
                    />
                </div>
            </div>

            <div class="mt-4">
                <a
                    href="{{ route('all-properties.index') }}"
                    class="btn btn-light"
                >
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\Properties::class)
                <a
                    href="{{ route('all-properties.create') }}"
                    class="btn btn-light"
                >
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>
</div>
@endsection
