<?php

namespace App\Http\Controllers;

use App\Champion;
use App\ChampionSkill;
use App\Http\Requests\ChampionSkillStoreRequest;
use App\Http\Requests\ChampionSkillUpdateRequest;
use Illuminate\Http\Request;

class EditSkillController extends Controller
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
        $champion = Champion::all();

        return view('addskill')
            ->with('champions', $champion);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ChampionSkillStoreRequest $request)
    {
        $data = $request->all();

        $file = $request->file('image')->store('champSkills');

        $data['image'] = $file;

        ChampionSkill::create($data);

        return redirect()->route('web.champion.index')->withErrors(['success' => $data['name'].' - Skill criada.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ChampionSkill $championSkill
     * @return \Illuminate\Http\Response
     */
    public function show(ChampionSkill $championSkill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ChampionSkill $championSkill
     * @return \Illuminate\Http\Response
     */
    public function edit(ChampionSkill $championSkill)
    {
        return view('editskills')
            ->with('skill', $championSkill);
//        return view('editskills')->with('skill', $championSkill);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\ChampionSkill $championSkill
     * @return \Illuminate\Http\Response
     */
//    public function update(Request $request, ChampionSkill $championSkill)
//    {
//        //
//    }

    public function update(ChampionSkillUpdateRequest $request, ChampionSkill $championSkill)
    {
        $data = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image')->store('champSkills');

            $data['image'] = $file;
        }

        $championSkill->update($data);

        return redirect()->route('web.champion.index')->withErrors(['success' => $data['name'].' - Skill atualizada.']);

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ChampionSkill $championSkill
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChampionSkill $championSkill)
    {
        $championSkill->delete();

        return redirect()->route('web.champion.index')->withErrors(['success' => "Skill apagada (".$championSkill['name'] .")"]);
    }
}
