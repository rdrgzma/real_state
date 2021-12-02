@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">
                    <a href="{{ route('clients.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                        ></a>
                    @lang('crud.clients.show_title')
                </h4>

                <div class="mt-4">
                    <div class="mb-4">
                        <h5>@lang('crud.clients.inputs.name')</h5>
                        <span>{{ $client->name ?? '-' }}</span>
                    </div>
                    <div class="mb-4">
                        <h5>@lang('crud.clients.inputs.partner_id')</h5>
                        <span>{{ optional($client->user)->name ?? '-' }}</span>
                    </div>
                    <div class="mb-4">
                        <h5>@lang('crud.clients.inputs.email')</h5>
                        <span>{{ $client->email ?? '-' }}</span>
                    </div>
                    <div class="mb-4">
                        <h5>@lang('crud.clients.inputs.phone')</h5>
                        <span>{{ $client->phone ?? '-' }}</span>
                    </div>
                    <div class="mb-4">
                        <h5>@lang('crud.clients.inputs.street')</h5>
                        <span>{{ $client->street ?? '-' }}</span>
                    </div>
                    <div class="mb-4">
                        <h5>@lang('crud.clients.inputs.number')</h5>
                        <span>{{ $client->number ?? '-' }}</span>
                    </div>
                    <div class="mb-4">
                        <h5>@lang('crud.clients.inputs.complement')</h5>
                        <span>{{ $client->complement ?? '-' }}</span>
                    </div>
                    <div class="mb-4">
                        <h5>@lang('crud.clients.inputs.neighborhood')</h5>
                        <span>{{ $client->neighborhood ?? '-' }}</span>
                    </div>
                    <div class="mb-4">
                        <h5>@lang('crud.clients.inputs.city')</h5>
                        <span>{{ $client->city ?? '-' }}</span>
                    </div>
                    <div class="mb-4">
                        <h5>@lang('crud.clients.inputs.state')</h5>
                        <span>{{ $client->state ?? '-' }}</span>
                    </div>
                    <div class="mb-4">
                        <h5>@lang('crud.clients.inputs.zip_code')</h5>
                        <span>{{ $client->zip_code ?? '-' }}</span>
                    </div>
                    <div class="mb-4">
                        <h5>@lang('crud.clients.inputs.country')</h5>
                        <span>{{ $client->country ?? '-' }}</span>
                    </div>
                    <div class="mb-4">
                        <h5>@lang('crud.clients.inputs.whatsapp')</h5>
                        <span>{{ $client->whatsapp ?? '-' }}</span>
                    </div>
                    <div class="mb-4">
                        <h5>@lang('crud.clients.inputs.facebook')</h5>
                        <span>{{ $client->facebook ?? '-' }}</span>
                    </div>
                    <div class="mb-4">
                        <h5>@lang('crud.clients.inputs.instagram')</h5>
                        <span>{{ $client->instagram ?? '-' }}</span>
                    </div>
                    
                </div>

                <div class="mt-4">
                    <a href="{{ route('clients.index') }}" class="btn btn-light">
                        <i class="icon ion-md-return-left"></i>
                        @lang('crud.common.back')
                    </a>

                    @can('create', App\Models\Client::class)
                        <a href="{{ route('clients.create') }}" class="btn btn-light">
                            <i class="icon ion-md-add"></i> @lang('crud.common.create')
                        </a>
                    @endcan
                </div>
            </div>
        </div>
    </div>
@endsection
