<?php

namespace App\Http\Controllers;

use App\Models\infoLink;
use Illuminate\Http\Request;

class infoLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $links = infoLink::select('id', 'title', 'slug','updated_at')->get();
        return view('admin.links.index', compact('links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.links.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $city = new infoLink();
        $city->fill($request->all())->save();
        return redirect()->route('infoLink.index')->withSuccess('Ссылка успешно добавлена');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\infoLink  $infoLink
     * @return \Illuminate\Http\Response
     */
    public function show(infoLink $infoLink)
    {
        return view('article', [
            'article' => $infoLink,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\infoLink  $infoLink
     * @return \Illuminate\Http\Response
     */
    public function edit(infoLink $infoLink)
    {
        return view('admin.links.edit', [
            'link'  =>  $infoLink,
        ]);
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
        $infoLink->fill($request->all())->save();
        return redirect()->route('infoLink.index')->with('success', 'Ссылка успешно обновлена');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\infoLink  $infoLink
     * @return \Illuminate\Http\Response
     */
    public function destroy(infoLink $infoLink)
    {
        $infoLink->delete();
        return redirect()->route('infoLink.index')->with('success', 'Ссылка удалена');
    }
}
