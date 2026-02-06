<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ninja;
use App\Models\Dojo;

class NinjaController extends Controller
{

    public function index()
    // route--> /ninjas/
    {
        $ninjas = Ninja::with('dojo')->orderBy('created_at', 'desc')->paginate(10);
        return view('ninjas.index', [
            "ninjas" => $ninjas
        ]);
    }


    public function show(Ninja $ninja)
    // route--> /ninjas/{ninja}
    {
        $ninja->load('dojo'); // Eager load the related dojo

        return view('ninjas.show', [
            'ninja' => $ninja,
        ]);
    }


    public function create()
    // route--> /ninjas/create
    {
        $dojos = Dojo::all();
        return view('ninjas.create', [
            'dojos' => $dojos
        ]);
    }

    public function store(Request $request)
    // route--> /ninjas/ (POST)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'skill' => 'required|integer|min:0|max:100',
            'bio' => 'required|string|min:20|max:1000',
            'dojo_id' => 'required|exists:dojos,id',
        ]);

        Ninja::create($validated);

        return redirect()->route('ninjas.index')->with('success', 'Ninja created successfully!');
    }

    public function destroy(Ninja $ninja)
    // route--> /ninjas/{ninja} (DELETE)
    {
        $ninja->delete();
        return redirect()->route('ninjas.index')->with('success', 'Ninja deleted successfully!');
    }
}
