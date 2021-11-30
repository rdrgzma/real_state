@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="searchbar mt-0 mb-4">
            <div class="row">
                <div class="col-md-6">
                    <form>
                        <div class="input-group">
                            <input
                                id="indexSearch"
                                type="text"
                                name="search"
                                placeholder="{{ __('crud.common.search') }}"
                                value="{{ $search ?? '' }}"
                                class="form-control"
                                autocomplete="off"
                            />
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-primary">
                                    <i class="icon ion-md-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 text-right">
                    @can('create', App\Models\Properties::class)
                        <a
                            href="{{ route('properties.create') }}"
                            class="btn btn-primary"
                        >
                            <i class="icon ion-md-add"></i> @lang('crud.common.new')
                        </a>
                    @endcan
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div style="display: flex; justify-content: space-between;">
                    <h4 class="card-title">
                        @lang('crud.properties.index_title')
                    </h4>
                </div>

                <div class="table-responsive">
                    <table class="table table-borderless table-hover">
                        <thead>
                        <tr>
                            <th class="text-left">
                                @lang('crud.properties.inputs.office_id')
                            </th>
                            <th class="text-left">
                                @lang('crud.properties.inputs.realtor_id')
                            </th>
                            <th class="text-left">
                                @lang('crud.properties.inputs.name')
                            </th>
                            <th class="text-left">
                                @lang('crud.properties.inputs.photo')
                            </th>
                            <th class="text-center">
                                @lang('crud.common.actions')
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($properties as $properties)
                            <tr>
                                <td>
                                    {{ optional($properties->office)->name ?? '-' }}
                                </td>
                                <td>
                                    {{ optional($properties->realtor)->name ?? '-'
                                    }}
                                </td>
                                <td>{{ $properties->name ?? '-' }}</td>
                                <td>
                                    <x-partials.thumbnail
                                        src="{{ $properties->photo ? \Storage::url($properties->photo) : '' }}"
                                    />
                                </td>
                                <td class="text-center" style="width: 134px;">
                                    <div
                                        role="group"
                                        aria-label="Row Actions"
                                        class="btn-group"
                                    >
                                        @can('update', $properties)
                                            <a
                                                href="{{ route('properties.edit', $properties) }}"
                                            >
                                                <button
                                                    type="button"
                                                    class="btn btn-light"
                                                >
                                                    <i class="icon ion-md-create"></i>
                                                </button>
                                            </a>
                                        @endcan @can('view', $properties)
                                            <a
                                                href="{{ route('properties.show', $properties) }}"
                                            >
                                                <button
                                                    type="button"
                                                    class="btn btn-light"
                                                >
                                                    <i class="icon ion-md-eye"></i>
                                                </button>
                                            </a>
                                        @endcan @can('delete', $properties)
                                            <form
                                                action="{{ route('properties.destroy', $properties) }}"
                                                method="POST"
                                                onsubmit="return confirm('{{ __('crud.common.are_you_sure') }}')"
                                            >
                                                @csrf @method('DELETE')
                                                <button
                                                    type="submit"
                                                    class="btn btn-light text-danger"
                                                >
                                                    <i class="icon ion-md-trash"></i>
                                                </button>
                                            </form>
                                        @endcan
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">
                                    @lang('crud.common.no_items_found')
                                </td>
                            </tr>
                        @endforelse
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="5">
                                {!! $properties->render() !!}
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
