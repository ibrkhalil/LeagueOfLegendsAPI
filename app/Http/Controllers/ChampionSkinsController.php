<?php

namespace App\Http\Controllers;

use App\Champion;
use App\ChampionSkin;
use App\Http\Requests\ChampionSkinStoreRequest;
use App\Http\Requests\ChampionSkinUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

/**
 * @group Champion Skins management
 */

class ChampionSkinsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @authenticated
     */
    public function index()
    {
        $champions = ChampionSkin::all();

        return $champions;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * @authenticated
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
     * @authenticated
     */
    public function store(ChampionSkinStoreRequest $request)
    {
        $data = $request->all();

        $file = $request->file('image')->store('champSkin');

        $data['image'] = $file;

        $post = ChampionSkin::create($data);

        $response = [
            'data' => $post,
            'message' => 'Skin Adicionada',
            'result' => 'SUCCESS',
        ];

        return response($response, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ChampionSkin  $championSkin
     * @return \Illuminate\Http\Response
     * @authenticated
     */
    public function show(ChampionSkin $championSkin)
    {
        return $championSkin;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ChampionSkin  $championSkins
     * @return \Illuminate\Http\Response
     * @authenticated
     */
    public function edit(ChampionSkin $championSkin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ChampionSkin  $championSkin
     * @return \Illuminate\Http\Response
     * @authenticated
     */
    public function update(ChampionSkinUpdateRequest $request, ChampionSkin $championSkin)
    {
        $data = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image')->store('champSkin');

            $data['image'] = $file;
        }

        $championSkin->update($data);

        $response = [
            'data' => $championSkin,
            'message' => 'Champion Skin atualizada',
            'result' => 'SUCCESS',
        ];

        return response($response);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ChampionSkin  $championSkin
     * @return \Illuminate\Http\Response
     * @authenticated
     */
    public function destroy(ChampionSkin $championSkin)
    {
        $championSkin->delete();

        $response = [
            'data' => $championSkin,
            'message' => 'Champion Skin apagada',
            'result' => 'OK',
        ];

        return response($response);
    }

    public function skinform(Request $request)
    {
        $champion = Champion::all();

        return view('addskin')
            ->with('champions', $champion);
    }
}
