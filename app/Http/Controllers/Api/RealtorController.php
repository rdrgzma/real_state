<?php

namespace App\Http\Controllers\Api;

use App\Models\Realtor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\RealtorResource;
use App\Http\Resources\RealtorCollection;
use App\Http\Requests\RealtorStoreRequest;
use App\Http\Requests\RealtorUpdateRequest;

class RealtorController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', Realtor::class);

        $search = $request->get('search', '');

        $realtors = Realtor::search($search)
            ->latest()
            ->paginate();

        return new RealtorCollection($realtors);
    }

    /**
     * @param \App\Http\Requests\RealtorStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(RealtorStoreRequest $request)
    {
        $this->authorize('create', Realtor::class);

        $validated = $request->validated();

        $realtor = Realtor::create($validated);

        return new RealtorResource($realtor);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Realtor $realtor
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Realtor $realtor)
    {
        $this->authorize('view', $realtor);

        return new RealtorResource($realtor);
    }

    /**
     * @param \App\Http\Requests\RealtorUpdateRequest $request
     * @param \App\Models\Realtor $realtor
     * @return \Illuminate\Http\Response
     */
    public function update(RealtorUpdateRequest $request, Realtor $realtor)
    {
        $this->authorize('update', $realtor);

        $validated = $request->validated();

        $realtor->update($validated);

        return new RealtorResource($realtor);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Realtor $realtor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Realtor $realtor)
    {
        $this->authorize('delete', $realtor);

        $realtor->delete();

        return response()->noContent();
    }
}
