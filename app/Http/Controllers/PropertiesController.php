<?php

namespace App\Http\Controllers;

use App\Models\Office;
use App\Models\Realtor;
use App\Models\Properties;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\PropertiesStoreRequest;
use App\Http\Requests\PropertiesUpdateRequest;

class PropertiesController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', Properties::class);

        $search = $request->get('search', '');

        $allProperties = Properties::search($search)
            ->latest()
            ->paginate(5);

        return view(
            'app.all_properties.index',
            compact('allProperties', 'search')
        );
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', Properties::class);

        $offices = Office::pluck('name', 'id');
        $realtors = Realtor::pluck('name', 'id');

        return view(
            'app.all_properties.create',
            compact('offices', 'realtors')
        );
    }

    /**
     * @param \App\Http\Requests\PropertiesStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PropertiesStoreRequest $request)
    {
        $this->authorize('create', Properties::class);

        $validated = $request->validated();
        if ($request->hasFile('photo')) {
            $validated['photo'] = $request->file('photo')->store('public');
        }

        $properties = Properties::create($validated);

        return redirect()
            ->route('all-properties.edit', $properties)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Properties $properties
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Properties $properties)
    {
        $this->authorize('view', $properties);

        return view('app.all_properties.show', compact('properties'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Properties $properties
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Properties $properties)
    {
        $this->authorize('update', $properties);

        $offices = Office::pluck('name', 'id');
        $realtors = Realtor::pluck('name', 'id');

        return view(
            'app.all_properties.edit',
            compact('properties', 'offices', 'realtors')
        );
    }

    /**
     * @param \App\Http\Requests\PropertiesUpdateRequest $request
     * @param \App\Models\Properties $properties
     * @return \Illuminate\Http\Response
     */
    public function update(
        PropertiesUpdateRequest $request,
        Properties $properties
    ) {
        $this->authorize('update', $properties);

        $validated = $request->validated();
        if ($request->hasFile('photo')) {
            if ($properties->photo) {
                Storage::delete($properties->photo);
            }

            $validated['photo'] = $request->file('photo')->store('public');
        }

        $properties->update($validated);

        return redirect()
            ->route('all-properties.edit', $properties)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Properties $properties
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Properties $properties)
    {
        $this->authorize('delete', $properties);

        if ($properties->photo) {
            Storage::delete($properties->photo);
        }

        $properties->delete();

        return redirect()
            ->route('all-properties.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
