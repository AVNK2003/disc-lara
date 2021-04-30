<?php

namespace App\Http\Controllers;

use App\Models\infoLink;
use Illuminate\Http\Request;

class infoLinksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $links = infoLink::select('id', 'title', 'slug','updated_at')->get();
        return view('admin.links.links', compact('links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\infoLink  $infoLink
     * @return \Illuminate\Http\Response
     */
    public function show(infoLink $infoLink)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\infoLink  $infoLink
     * @return \Illuminate\Http\Response
     */
    public function edit(infoLink $infoLink)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\infoLink  $infoLink
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, infoLink $infoLink)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\infoLink  $infoLink
     * @return \Illuminate\Http\Response
     */
    public function destroy(infoLink $infoLink)
    {
        //
    }
}
