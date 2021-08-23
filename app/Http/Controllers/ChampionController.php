<?php

namespace App\Http\Controllers;

use App\Champion;
use App\Http\Requests\ChampionStoreRequest;
use App\Http\Requests\ChampionUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;


/**
* @group Champion management
*/

class ChampionController extends Controller
{
    /**
     * Display a list of existing champions.
     *
     * @return \Illuminate\Http\Response
     * @authenticated
     */
    public function index()
    {
        $champions = Champion::with('championSkills', 'championSkins')->get();

        return $champions;
    }

    /**
     * Show the form for creating a new champion.
     *
     * @return \Illuminate\Http\Response
     * @authenticated
     */
    public function create()
    {
        //
    }

    /**
     * Save a newly created champion in the database.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @authenticated
     */
    public function store(ChampionStoreRequest $request)
    {
        $data = $request->all();

        $file = $request->file('image')->store('champImage/'.$data['name']);

        $data['image'] = $file;

        $post = Champion::create($data);

        $response = [
            'data' => $post,
            'message' => 'Champion Inserido',
            'result' => 'SUCCESS',
        ];

        return response($response, 201);
    }

    /**
     * Show a specific champion.
     *
     * @param  \App\Champion $champion
     * @return \Illuminate\Http\Response
     * @authenticated
     */
    public function show(Champion $champion)
    {
        return $champion;
    }

    /**
     * Show the form for editing a specific champion.
     *
     * @param  \App\Champion $champion
     * @return \Illuminate\Http\Response
     * @authenticated
     */
    public function edit(Champion $champion)
    {
        //
    }

    /**
     * Update a specific champion in the database.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Champion $champion
     * @return \Illuminate\Http\Response
     * @authenticated
     */
    public function update(ChampionUpdateRequest $request, Champion $champion)
    {
        $data = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image')->store('champImage/'.$data['name']);

            $data['image'] = $file;
        }

        $champion->update($data);

        $response = [
            'data' => $champion,
            'message' => 'Champion atualizado',
            'result' => 'SUCCESS',
        ];

        return response($response);
    }

    /**
     * Remove a champion record from the database.
     *
     * @param  \App\Champion $champion
     * @return \Illuminate\Http\Response
     * @authenticated
     */
    public function destroy(Champion $champion)
    {
        $champion->delete();

        $response = [
            'data' => $champion,
            'message' => 'Champion apagado',
            'result' => 'OK',
        ];

        return response($response);
    }
}
