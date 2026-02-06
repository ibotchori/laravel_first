<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ninja;

class NinjaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    // route--> /ninjas/
    {
        $ninjas = Ninja::orderBy('created_at', 'desc')->paginate(10);
        return view('ninjas.index', [
            "ninjas" => $ninjas
        ]);
    }


    public function show($id)
    // route--> /ninjas/{id}
    {
        $ninja = Ninja::findOrFail($id);

        return view('ninjas.show', [
            'ninja' => $ninja,
        ]);
    }


    public function create()
    // route--> /ninjas/create
    {
        return view('ninjas.create');
    }

    public function store(Request $request)
    {
        //
    }
}
