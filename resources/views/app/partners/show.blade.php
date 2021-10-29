@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('partners.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.partners.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.partners.inputs.office_id')</h5>
                    <span>{{ optional($partner->office)->name ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.partners.inputs.name')</h5>
                    <span>{{ $partner->name ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.partners.inputs.realtor_id')</h5>
                    <span>{{ optional($partner->realtor)->name ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.partners.inputs.user_id')</h5>
                    <span>{{ optional($partner->user)->name ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('partners.index') }}" class="btn btn-light">
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\Partner::class)
                <a href="{{ route('partners.create') }}" class="btn btn-light">
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>
</div>
@endsection
