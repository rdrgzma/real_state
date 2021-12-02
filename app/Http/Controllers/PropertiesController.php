<?php

namespace App\Http\Controllers;

use App\Models\Office;
use App\Models\Properties;
use App\Models\Realtor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PropertiesController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        $search = $request->get('search', '');

        $properties = Properties::search($search)
            ->latest()
            ->paginate(10);

        return view('app.properties.index',
            compact('properties', 'search')
        );
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $offices = Office::all();
        $realtors = Realtor::all();

        return view(
            'app.properties.create',
            compact('offices', 'realtors')
        );
    }

    /**
     * @param \App\Http\Requests\PropertiesStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request['keys_words_id'] = 1;
        var_dump($request->all());
        $properties = Properties::create($request->all());

        return redirect()
            ->route('properties.edit', $properties)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Properties $properties
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Properties $properties)
    {

        return view('app.properties.show', compact('properties'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Properties $properties
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {

        $properties = Properties::findOrFail($id);
        $offices = Office::all();
        $realtors = Realtor::all();

        return view(
            'app.properties.edit', [
                'properties' => $properties,
                'offices' => $offices,
                'realtors' => $realtors
            ]
        );
    }

    /**
     * @param \App\Http\Requests\PropertiesUpdateRequest $request
     * @param \App\Models\Properties $properties
     * @return \Illuminate\Http\Response
     */
    public function update(
        Request    $request,
        Properties $properties
    )
    {
        if ($request->hasFile('foto')) {
            if ($properties->foto) {
                Storage::delete($properties->foto);
            }

            $request['foto'] = $request->file('foto')->store('public');
        }

        $properties->update($request->all());

        return redirect()
            ->route('properties.show', compact('properties'))
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Properties $properties
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Properties $properties)
    {


        if ($properties->foto) {
            Storage::delete($properties->foto);
        }

        $properties->delete();

        return redirect()
            ->route('properties.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
