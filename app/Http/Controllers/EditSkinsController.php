<?php

namespace App\Http\Controllers;

use App\Champion;
use App\ChampionSkin;
use App\Http\Requests\ChampionSkinStoreRequest;
use App\Http\Requests\ChampionSkinUpdateRequest;
use Illuminate\Http\Request;

class EditSkinsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $champions = Champion::with('championSkins')->get();

        return view('skins')
            ->with('champions', $champions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $champion = Champion::all();

        return view('addskin')
            ->with('champions', $champion);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ChampionSkinStoreRequest $request)
    {
        $data = $request->all();

        $file = $request->file('image')->store('champSkin');

        $data['image'] = $file;

        ChampionSkin::create($data);

        return redirect()->route('web.champion.index')->withErrors(['success' => $data['name'].' - Skin criada.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ChampionSkin $championSkin
     * @return \Illuminate\Http\Response
     */
    public function show(ChampionSkin $championSkin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ChampionSkin $championSkin
     * @return \Illuminate\Http\Response
     */
    public function edit(ChampionSkin $championSkin)
    {
        return view('editskins')->with('skin', $championSkin);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\ChampionSkin $championSkin
     * @return \Illuminate\Http\Response
     */
//    public function update(Request $request, ChampionSkin $championSkin)
//    {
//        //
//    }
    public function update(ChampionSkinUpdateRequest $request, ChampionSkin $championSkin)
    {
        $data = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image')->store('champSkin');

            $data['image'] = $file;
        }

        $championSkin->update($data);

        return redirect()->route('web.champion.index')->withErrors(['success' => $data['name'].' - Skin atualizada.']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ChampionSkin $championSkin
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChampionSkin $championSkin)
    {
        $championSkin->delete();

        return redirect()->route('web.champion.index')->withErrors(['success' =>  "Skin apagada (".$championSkin['name'] .")"]);
    }
}
