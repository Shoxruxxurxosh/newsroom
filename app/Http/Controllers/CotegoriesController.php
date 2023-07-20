<?php

namespace App\Http\Controllers;

use App\Models\Cotegories;
use Illuminate\Http\Request;

class CotegoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cotegories = Cotegories::all();
        return view('post.create', compact('cotegories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cotegories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cotegory = new Cotegories();


        $cotegory['name']=$request->name;

        $cotegory->save();
        return redirect()-> route("post.create");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cotegories  $cotegories
     * @return \Illuminate\Http\Response
     */
    public function show(Cotegories $cotegories)
    {
        $cotegory = Cotegories::all();
        return view('post.create', compact('cotegories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cotegories  $cotegories
     * @return \Illuminate\Http\Response
     */
    public function edit(Cotegories $cotegories)
    {
        return view('cotegories.edit', ['post' => $cotegories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cotegories  $cotegories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cotegories $cotegories)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cotegories  $cotegories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cotegories $cotegories)
    {
        $cotegories->delete();
        return redirect(route('cotegories.create'));
    }
}
