<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->get('search', '');
        $clients = Client::search($search)
            ->latest()
            ->paginate(5);

        return view('app.clients.index', compact('clients', 'search'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('app.clients.create');
    }

    /**
     * @param \App\Http\Requests\ClientStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->merge(['user_id' => Auth::user()->id]);
        $client = Client::create($request->all());

        return view('app.clients.show', compact('client'))
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Client $client
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Client $client)
    {
        return view('app.clients.show', compact('client'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Client $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Client $client)
    {
        return view('app.clients.edit', compact('client'));
    }

    /**
     * @param \App\Http\Requests\ClientUpdateRequest $request
     * @param \App\Models\Client $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd('upadate');
        $client = Client::findOrFail($id);

        $client->update($request->all());

        return view('app.clients.show', compact('client'))
            ->withSuccess(__('crud.common.updated'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Client $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Client $client)
    {
        $client->delete();
        return redirect()
            ->route('clients.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
