<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\RealtorResource;
use App\Http\Resources\RealtorCollection;

class UserRealtorsController extends Controller
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

        $realtors = $user
            ->realtors()
            ->search($search)
            ->latest()
            ->paginate();

        return new RealtorCollection($realtors);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $user)
    {
        $this->authorize('create', Realtor::class);

        $validated = $request->validate([
            'office_id' => ['required', 'exists:offices,id'],
            'name' => ['required', 'max:255', 'string'],
        ]);

        $realtor = $user->realtors()->create($validated);

        return new RealtorResource($realtor);
    }
}
