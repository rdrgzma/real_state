<?php

namespace App\Http\Controllers\Api;

use App\Models\Properties;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\PropertiesResource;
use App\Http\Resources\PropertiesCollection;
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
            ->paginate();

        return new PropertiesCollection($allProperties);
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

        return new PropertiesResource($properties);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Properties $properties
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Properties $properties)
    {
        $this->authorize('view', $properties);

        return new PropertiesResource($properties);
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

        return new PropertiesResource($properties);
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

        return response()->noContent();
    }
}
