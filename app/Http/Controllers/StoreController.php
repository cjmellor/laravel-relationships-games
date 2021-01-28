<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $stores = Store::all();

        return view('stores.index')->with('stores', $stores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|Response
     */
    public function create()
    {
        return view('stores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        Store::create([
            'name' => $request->name,
            'location' => $request->location
        ]);

        return redirect()->route('stores.index')
            ->with('success', __('messages.success_added', ['type' => 'Store']));
    }

    /**
     * Display the specified resource.
     *
     * @param  Store  $store
     * @return Application|Factory|View
     */
    public function show(Store $store)
    {
        return view('stores.show')->with('store', $store);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Store  $store
     * @return Application|Factory|View|Response
     */
    public function edit(Store $store)
    {
        return view('stores.edit')->with('store', $store);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  Store  $store
     * @return RedirectResponse
     */
    public function update(Request $request, Store $store)
    {
        $store->update([
            'name' => $request->name,
            'location' => $request->location,
        ]);

        return redirect()->route('stores.show', $store)
            ->with('success', __('messages.success_added', ['type' => 'Store']));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Store  $store
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(Store $store)
    {
        $store->delete();

        return redirect()->route('stores.index')
            ->with('success', __('messages.success_deleted', ['type' => $store->name]));
    }
}
