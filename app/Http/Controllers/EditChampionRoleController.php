<?php

namespace App\Http\Controllers;

use App\ChampionRole;
use App\Http\Requests\ChampionRoleStoreRequest;
use App\Http\Requests\ChampionRoleUpdateRequest;
use Illuminate\Http\Request;

class EditChampionRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $champion = ChampionRole::all();

        return view('addrole')
            ->with('champions', $champion);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ChampionRoleStoreRequest $request)
    {
        $data = $request->all();

        ChampionRole::create($data);

        return redirect()->route('web.champion.index')->withErrors(['success' => $data['name'].' - Role criado.']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ChampionRole  $championRole
     * @return \Illuminate\Http\Response
     */
    public function show(ChampionRole $championRole)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ChampionRole  $championRole
     * @return \Illuminate\Http\Response
     */
    public function edit(ChampionRole $championRole)
    {
        return view('editroles')->with('role', $championRole);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ChampionRole  $championRole
     * @return \Illuminate\Http\Response
     */
    public function update(ChampionRoleUpdateRequest $request, ChampionRole $championRole)
    {
        $data = $request->all();

        $championRole->update($data);

        return redirect()->route('web.champion.index')->withErrors(['success' => $data['name'].' - Role atualizado.']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ChampionRole  $championRole
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChampionRole $championRole)
    {
        $championRole->delete();

        return redirect()->route('web.champion.index')->withErrors(['success' => 'Role apagado.']);

    }
}
