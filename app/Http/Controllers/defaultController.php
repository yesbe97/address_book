<?php

namespace App\Http\Controllers;

use App\addresses;
use App\Http\Requests\addressesRequest;

class defaultController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function createForm()
    {
        return view('create');
    }

    public function create(addressesRequest $request)
    {
        $address = addresses::create($request->all());
        $address->save();
        return redirect()->route('overview');
    }

    public function editForm($id)
    {
        $person = addresses::findorfail($id);

        return view('edit')->with('person', $person);
    }

    public function edit(addressesRequest $request, $id)
    {
        $person = addresses::findorfail($id);
        $person->update($request->all());
        return redirect()->route('overview');
    }

    public function remove($id)
    {
        $person = addresses::findorfail($id);
        $person->delete();
        return redirect()->route('overview');
    }
}
