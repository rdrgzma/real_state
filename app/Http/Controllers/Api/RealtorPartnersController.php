<?php

namespace App\Http\Controllers\Api;

use App\Models\Realtor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PartnerResource;
use App\Http\Resources\PartnerCollection;

class RealtorPartnersController extends Controller
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

        $partners = $realtor
            ->partners()
            ->search($search)
            ->latest()
            ->paginate();

        return new PartnerCollection($partners);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Realtor $realtor
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Realtor $realtor)
    {
        $this->authorize('create', Partner::class);

        $validated = $request->validate([
            'office_id' => ['required', 'exists:offices,id'],
            'name' => ['required', 'max:255', 'string'],
            'user_id' => ['required', 'exists:users,id'],
        ]);

        $partner = $realtor->partners()->create($validated);

        return new PartnerResource($partner);
    }
}
