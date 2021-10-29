<?php

namespace App\Http\Controllers\Api;

use App\Models\Office;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\RealtorResource;
use App\Http\Resources\RealtorCollection;

class OfficeRealtorsController extends Controller
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

        $realtors = $office
            ->realtors()
            ->search($search)
            ->latest()
            ->paginate();

        return new RealtorCollection($realtors);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Office $office
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Office $office)
    {
        $this->authorize('create', Realtor::class);

        $validated = $request->validate([
            'name' => ['required', 'max:255', 'string'],
            'user_id' => ['required', 'exists:users,id'],
        ]);

        $realtor = $office->realtors()->create($validated);

        return new RealtorResource($realtor);
    }
}
