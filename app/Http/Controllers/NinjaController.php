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
        $ninjas = Ninja::orderBy('created_at', 'desc')->get();
        return view('ninjas.index', [

            "ninjas" => $ninjas
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }
}
