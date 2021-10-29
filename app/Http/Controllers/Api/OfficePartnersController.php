<?php

namespace App\Http\Controllers\Api;

use App\Models\Office;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PartnerResource;
use App\Http\Resources\PartnerCollection;

class OfficePartnersController extends Controller
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

        $partners = $office
            ->partners()
            ->search($search)
            ->latest()
            ->paginate();

        return new PartnerCollection($partners);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Office $office
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Office $office)
    {
        $this->authorize('create', Partner::class);

        $validated = $request->validate([
            'name' => ['required', 'max:255', 'string'],
            'realtor_id' => ['required', 'exists:realtors,id'],
            'user_id' => ['required', 'exists:users,id'],
        ]);

        $partner = $office->partners()->create($validated);

        return new PartnerResource($partner);
    }
}
