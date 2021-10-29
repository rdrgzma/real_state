<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Office;
use App\Models\Partner;
use App\Models\Realtor;
use Illuminate\Http\Request;
use App\Http\Requests\PartnerStoreRequest;
use App\Http\Requests\PartnerUpdateRequest;

class PartnerController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', Partner::class);

        $search = $request->get('search', '');

        $partners = Partner::search($search)
            ->latest()
            ->paginate(5);

        return view('app.partners.index', compact('partners', 'search'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', Partner::class);

        $offices = Office::pluck('name', 'id');
        $realtors = Realtor::pluck('name', 'id');
        $users = User::pluck('name', 'id');

        return view(
            'app.partners.create',
            compact('offices', 'realtors', 'users')
        );
    }

    /**
     * @param \App\Http\Requests\PartnerStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PartnerStoreRequest $request)
    {
        $this->authorize('create', Partner::class);

        $validated = $request->validated();

        $partner = Partner::create($validated);

        return redirect()
            ->route('partners.edit', $partner)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Partner $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Partner $partner)
    {
        $this->authorize('view', $partner);

        return view('app.partners.show', compact('partner'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Partner $partner
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Partner $partner)
    {
        $this->authorize('update', $partner);

        $offices = Office::pluck('name', 'id');
        $realtors = Realtor::pluck('name', 'id');
        $users = User::pluck('name', 'id');

        return view(
            'app.partners.edit',
            compact('partner', 'offices', 'realtors', 'users')
        );
    }

    /**
     * @param \App\Http\Requests\PartnerUpdateRequest $request
     * @param \App\Models\Partner $partner
     * @return \Illuminate\Http\Response
     */
    public function update(PartnerUpdateRequest $request, Partner $partner)
    {
        $this->authorize('update', $partner);

        $validated = $request->validated();

        $partner->update($validated);

        return redirect()
            ->route('partners.edit', $partner)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Partner $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Partner $partner)
    {
        $this->authorize('delete', $partner);

        $partner->delete();

        return redirect()
            ->route('partners.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
