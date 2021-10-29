@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('realtors.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.realtors.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.realtors.inputs.office_id')</h5>
                    <span>{{ optional($realtor->office)->name ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.realtors.inputs.name')</h5>
                    <span>{{ $realtor->name ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.realtors.inputs.user_id')</h5>
                    <span>{{ optional($realtor->user)->name ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('realtors.index') }}" class="btn btn-light">
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\Realtor::class)
                <a href="{{ route('realtors.create') }}" class="btn btn-light">
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>
</div>
@endsection
