<?php

namespace App\Http\Controllers\Api;

use App\Models\Office;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PropertiesResource;
use App\Http\Resources\PropertiesCollection;

class OfficeAllPropertiesController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Office $office
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Office $office)
    {
        $this->authorize('view', $office);

        $search = $request->get('search', '');

        $allProperties = $office
            ->allProperties()
            ->search($search)
            ->latest()
            ->paginate();

        return new PropertiesCollection($allProperties);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Office $office
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Office $office)
    {
        $this->authorize('create', Properties::class);

        $validated = $request->validate([
            'realtor_id' => ['required', 'exists:realtors,id'],
            'name' => ['required', 'max:255', 'string'],
            'photo' => ['nullable', 'file'],
        ]);

        if ($request->hasFile('photo')) {
            $validated['photo'] = $request->file('photo')->store('public');
        }

        $properties = $office->allProperties()->create($validated);

        return new PropertiesResource($properties);
    }
}
