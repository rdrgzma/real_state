<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PartnerResource;
use App\Http\Resources\PartnerCollection;

class UserPartnersController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, User $user)
    {
        $this->authorize('view', $user);

        $search = $request->get('search', '');

        $partners = $user
            ->partners()
            ->search($search)
            ->latest()
            ->paginate();

        return new PartnerCollection($partners);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $user)
    {
        $this->authorize('create', Partner::class);

        $validated = $request->validate([
            'office_id' => ['required', 'exists:offices,id'],
            'name' => ['required', 'max:255', 'string'],
            'realtor_id' => ['required', 'exists:realtors,id'],
        ]);

        $partner = $user->partners()->create($validated);

        return new PartnerResource($partner);
    }
}
