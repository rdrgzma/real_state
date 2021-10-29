<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\OfficeResource;
use App\Http\Resources\OfficeCollection;

class UserOfficesController extends Controller
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

        $offices = $user
            ->offices()
            ->search($search)
            ->latest()
            ->paginate();

        return new OfficeCollection($offices);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $user)
    {
        $this->authorize('create', Office::class);

        $validated = $request->validate([
            'name' => ['required', 'max:255', 'string'],
        ]);

        $office = $user->offices()->create($validated);

        return new OfficeResource($office);
    }
}
