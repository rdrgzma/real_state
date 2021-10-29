<?php

namespace App\Http\Controllers\Api;

use App\Models\Partner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ClientResource;
use App\Http\Resources\ClientCollection;

class PartnerClientsController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Partner $partner
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Partner $partner)
    {
        $this->authorize('view', $partner);

        $search = $request->get('search', '');

        $clients = $partner
            ->clients()
            ->search($search)
            ->latest()
            ->paginate();

        return new ClientCollection($clients);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Partner $partner
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Partner $partner)
    {
        $this->authorize('create', Client::class);

        $validated = $request->validate([
            'name' => ['required', 'max:255', 'string'],
        ]);

        $client = $partner->clients()->create($validated);

        return new ClientResource($client);
    }
}
