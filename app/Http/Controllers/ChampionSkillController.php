<?php

namespace App\Http\Controllers;

use App\Champion;
use App\ChampionSkill;
use App\Http\Requests\ChampionSkillStoreRequest;
use App\Http\Requests\ChampionSkillUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

/**
 * @group Champion Skills management
 */

class ChampionSkillController extends Controller
{
    /**
     * Display a list of every champion skill.
     *
     * @return \Illuminate\Http\Response
     * @authenticated
     */
    public function index()
    {
        $champions = ChampionSkill::all();

        return $champions;
    }

    /**
     * Show the form for adding a new champion skill to the database.
     *
     * @return \Illuminate\Http\Response
     * @authenticated
     */
    public function create()
    {
        //
    }

    /**
     * Save a newly created champion skill into the database
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * @authenticated
     */
    public function store(ChampionSkillStoreRequest $request)
    {
        $data = $request->all();

        $file = $request->file('image')->store('champSkills');

        $data['image'] = $file;

        $post = ChampionSkill::create($data);

        $response = [
            'data' => $post,
            'message' => 'Skill Adicionada',
            'result' => 'SUCCESS',
        ];

        return response($response, 201);
    }

    /**
     * Show information from a specific champion skill
     *
     * @param  \App\ChampionSkill  $championSkill
     * @return \Illuminate\Http\Response
     * @authenticated
     */
    public function show(ChampionSkill $championSkill)
    {
//        return $championSkill;
    }

    /**
     * Show the form for editting a specific champion skill.
     *
     * @param  \App\ChampionSkill  $championSkill
     * @return \Illuminate\Http\Response
     * @authenticated
     */
    public function edit(ChampionSkill $championSkill)
    {
        //
    }

    /**
     * Update a specific champion skill.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ChampionSkill  $championSkill
     * @return \Illuminate\Http\Response
     * @authenticated
     */
    public function update(ChampionSkillUpdateRequest $request, ChampionSkill $championSkill)
    {
        $data = $request->all();


        if ($request->hasFile('image')) {
            $file = $request->file('image')->store('champSkills');

            $data['image'] = $file;
        }

        $championSkill->update($data);

        $response = [
            'data' => $championSkill,
            'message' => 'Champion Skill atualizada',
            'result' => 'SUCCESS',
        ];

        return response($response);
    }

    /**
     * Delete a specific champion skill from the database
     *
     * @param  \App\ChampionSkill  $championSkill
     * @return \Illuminate\Http\Response
     * @authenticated
     */
    public function destroy(ChampionSkill $championSkill)
    {
        $championSkill->delete();

        $response = [
            'data' => $championSkill,
            'message' => 'Champion skill apagada',
            'result' => 'SUCCESS',
        ];

        return response($response);

        return("deleted");
    }

    public function skillform(Request $request)
    {
        $champion = Champion::all();

        return view('addskill')
            ->with('champions', $champion);
    }
}
