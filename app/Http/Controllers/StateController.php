<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;

class StateController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $states = state::latest()->paginate(10);

        return view('states.index', compact('states'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        $countries = Country::all();
        return view('states.create', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $request->validate([
            'country_id' => 'required',
            'name' => 'required',
            'code' => 'required',
        ]);
        state::create($request->all());
        return redirect()->route('states.index')
            ->with('success', 'State has been created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(State $state) {
        return view('states.show', compact('state'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(State $state) {
        $countries = Country::get();
        return view('states.edit', compact('state', 'countries'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, State $state) {
        $request->validate([
            'country_id' => 'required',
            'name' => 'required',
            'code' => 'required',
        ]);
        $state->update($request->all());
        return redirect()->route('states.index')
            ->with('success', 'State has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(State $state) {
        $state->delete();
        return redirect()->route('states.index')
            ->with('success', 'State has been deleted successfully');
    }
}
