<?php

namespace App\Http\Controllers;

use App\Champion;
use App\ChampionRole;
use App\Http\Requests\ChampionStoreRequest;
use App\Http\Requests\ChampionUpdateRequest;
use App\Http\Requests\WebChampionStoreRequest;
use App\Http\Requests\WebChampionUpdateRequest;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Validator;

/**
 * @group Edit Champion management
 */

class EditChampionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $champions = Champion::with('championSkills')->simplePaginate(5);
        $roles = ChampionRole::all();

        return view('champions')
            ->with('champions', $champions)->with('roles', $roles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $champions = Champion::all();
        $roles = ChampionRole::all();

        return view('insert')
            ->with('champions', $champions)->with('roles', $roles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WebChampionStoreRequest $request)
    {
        $data = $request->all();

        $file = $request->file('image')->store('champImage/'.$data['name']);

        $data['image'] = $file;

        Champion::create($data);

        return redirect()->route('web.champion.index')->withErrors(['success' => $data['name'].' - Champion adicionado.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Champion  $champion
     * @return \Illuminate\Http\Response
     */
    public function show(Champion $champion)
    {
        $champions = Champion::all();

        return view('champion')->with('champion', $champions->where('id', $champion->id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Champion  $champion
     * @param  \App\ChampionRole  $championRole
     * @return \Illuminate\Http\Response
     */
    public function edit(Champion $champion)
    {
        $roles = ChampionRole::all();

        return view('editchampion')->with('champion', $champion)->with('roles', $roles);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Champion  $champion
     * @return \Illuminate\Http\Response
     */
    public function update(ChampionUpdateRequest $request, Champion $champion)
    {
        $data = $request->all();
//        $champion->update($data);

        if ($request->hasFile('image')) {
            $file = $request->file('image')->store('champImage/'.$data['name']);

            $data['image'] = $file;
        }

        $champion->update($data);

//        $message = $data['name'].' Champion Updated';

        return redirect()->route('web.champion.index')->withErrors(['success' => $data['name'].' - Champion atualizado.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Champion  $champion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Champion $champion)
    {
        $champion->delete();

        return redirect()->route('web.champion.index')->withErrors(['success' =>  "Champion apagado (".$champion['name'] .")"]);
    }
}
