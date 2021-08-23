<?php

namespace App\Http\Controllers;

use App\ChampionRole;
use App\Http\Requests\ChampionRoleStoreRequest;
use App\Http\Requests\ChampionRoleUpdateRequest;
use Illuminate\Http\Request;

/**
 * @group Champion Role management
 */
class ChampionRoleController extends Controller
{
    /**
     * Display a list of every role.
     *
     * @return \Illuminate\Http\Response
     * @authenticated
     */
    public function index()
    {
        $champions = ChampionRole::all();

        return $champions;
    }

    /**
     * Show the form for adding a new role to the database.
     *
     * @return \Illuminate\Http\Response
     * @authenticated
     */
    public function create()
    {
        //
    }

    /**
     * Save a newly created role into the database.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @authenticated
     */
    public function store(ChampionRoleStoreRequest $request)
    {
        $data = $request->all();

        $post = ChampionRole::create($data);

        $response = [
            'data' => $post,
            'message' => 'Role Adicionado',
            'result' => 'SUCCESS',
        ];

        return response($response, 201);
    }

    /**
     * Show information from a specific champion role.
     *
     * @param  \App\ChampionRole $championRole
     * @return \Illuminate\Http\Response
     * @authenticated
     */
    public function show(ChampionRole $championRole)
    {
        //
    }

    /**
     * Show the form for editting a specific champion role.
     *
     * @param  \App\ChampionRole $championRole
     * @return \Illuminate\Http\Response
     * @authenticated
     */
    public function edit(ChampionRole $championRole)
    {
        //
    }

    /**
     * Update a specific role.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\ChampionRole $championRole
     * @return \Illuminate\Http\Response
     * @authenticated
     */
    public function update(ChampionRoleUpdateRequest $request, ChampionRole $championRole)
    {
        $data = $request->all();

        $championRole->update($data);

        $response = [
            'data' => $championRole,
            'message' => 'Champion Role atualizado',
            'result' => 'SUCCESS',
        ];

        return response($response);
    }

    /**
     * Delete a specific role from the database.
     *
     * @param  \App\ChampionRole $championRole
     * @return \Illuminate\Http\Response
     * @authenticated
     */
    public function destroy(ChampionRole $championRole)
    {
        $championRole->delete();

        $response = [
            'data' => $championRole,
            'message' => 'Champion role apagado',
            'result' => 'SUCCESS',
        ];

        return response($response);
    }

    public function roleform(Request $request)
    {
        $champion = ChampionRole::all();

        return view('addrole')
            ->with('champions', $champion);
    }
}
