<?php

namespace App\Http\Controllers;

use App\Http\Requests\PropertiesStoreRequest;
use App\Http\Requests\PropertiesUpdateRequest;
use App\Models\Office;
use App\Models\Properties;
use App\Models\Realtor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

        $properties = Properties::search($search)
            ->latest()
            ->paginate(5);

        return view(
            'app.properties.index',
            compact('properties', 'search')
        );
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', Properties::class);

        $offices = Office::all();
        $realtors = Realtor::all();

        return view(
            'app.properties.create',
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
            ->route('properties.edit', $properties)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Properties $properties
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Properties $properties)
    {

        return view('app.properties.show', compact('properties'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Properties $properties
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Properties $properties)
    {


        $offices = Office::pluck('name', 'id');
        $realtors = Realtor::pluck('name', 'id');

        return view(
            'app.properties.edit',
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
        Properties              $properties
    )
    {


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


        if ($properties->photo) {
            Storage::delete($properties->photo);
        }

        $properties->delete();

        return redirect()
            ->route('properties.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
