<?php

namespace App\Http\Controllers\Api;

use App\Models\Realtor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PropertiesResource;
use App\Http\Resources\PropertiesCollection;

class RealtorAllPropertiesController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Realtor $realtor
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Realtor $realtor)
    {
        $this->authorize('view', $realtor);

        $search = $request->get('search', '');

        $allProperties = $realtor
            ->allProperties()
            ->search($search)
            ->latest()
            ->paginate();

        return new PropertiesCollection($allProperties);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Realtor $realtor
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Realtor $realtor)
    {
        $this->authorize('create', Properties::class);

        $validated = $request->validate([
            'office_id' => ['required', 'exists:offices,id'],
            'name' => ['required', 'max:255', 'string'],
            'photo' => ['nullable', 'file'],
        ]);

        if ($request->hasFile('photo')) {
            $validated['photo'] = $request->file('photo')->store('public');
        }

        $properties = $realtor->allProperties()->create($validated);

        return new PropertiesResource($properties);
    }
}
