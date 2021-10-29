<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Office;
use App\Models\Realtor;
use Illuminate\Http\Request;
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
            ->paginate(5);

        return view('app.realtors.index', compact('realtors', 'search'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', Realtor::class);

        $offices = Office::pluck('name', 'id');
        $users = User::pluck('name', 'id');

        return view('app.realtors.create', compact('offices', 'users'));
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

        return redirect()
            ->route('realtors.edit', $realtor)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Realtor $realtor
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Realtor $realtor)
    {
        $this->authorize('view', $realtor);

        return view('app.realtors.show', compact('realtor'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Realtor $realtor
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Realtor $realtor)
    {
        $this->authorize('update', $realtor);

        $offices = Office::pluck('name', 'id');
        $users = User::pluck('name', 'id');

        return view(
            'app.realtors.edit',
            compact('realtor', 'offices', 'users')
        );
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

        return redirect()
            ->route('realtors.edit', $realtor)
            ->withSuccess(__('crud.common.saved'));
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

        return redirect()
            ->route('realtors.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
