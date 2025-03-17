<?php

namespace App\Http\Controllers;


use App\Models\Transparence;
use Illuminate\Http\Request;

class TransparenceController extends Controller
{
    public function index()
 
    {
        $transparences = Transparence::all();
        return view('transparences.index', compact('transparences')); 
    }
    public function create()
    {
        return view('transparences.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'reason' => 'required',
            'type' => 'required',
            'price' => 'required',
        ]);

        $transparences = new Transparence();
        $transparences->reason = $request->reason;
        $transparences->type = $request->type;
        $transparences->prince = $request->price;
        $transparences->save();

        return redirect('transparence')->with('success', 'Transparence created successfully.');
    }

    public function edit($id)
    {
        $transparences = Transparence::findOrFail($id);
        return view('transparences.edit', compact('transparences'));
    }

    public function update(Request $request, $id)
    {
        $transparences = Transparence::findOrFail($id);
        $transparences->update($request->all());

        $transparences->reason = $request->reason;
        $transparences->type = $request->type;
        $transparences->price = $request->price;
        $transparences->save();

        return redirect('transparence')->with('success', 'Transparence updated successfully.');
    }

    public function destroy($id)
    {
        $pokemon = Transparence::findOrFail($id);
        $pokemon->delete();
        return redirect('transaparence')->with('success', 'Transparence deleted successfully.');
    }
 
}
