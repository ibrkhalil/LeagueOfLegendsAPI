<?php

namespace App\Http\Controllers;

use App\Champion;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index()
    {
        return view('welcome');
    }

//    public function champlist()
//    {
//        $champions = Champion::with('championSkills')->get();
//
//        return view('champions')
//            ->with('champions', $champions);
////        return Champion::with('championSkills')->get();
//    }
//
//    public function insert(Request $request)
//    {
//
//        $this->validate($request, [
//            'name' => 'required|string',
//            'title' => 'required|string',
//            'description' => 'required|string',
//            'image' => 'required|image'
//        ], [
//            'name.required' => 'É necessário preencher o nome',
//            'title.required' => 'É necessário preencher o título',
//            'description.required' => 'É necessário preencher a descrição',
//            'image.required' => 'É necessário adicionar uma imagem',
//        ]);
//
//        $data = $request->all();
//
//        $file = $request->file('image')->store('champImage');
//
//        $data['image'] = $file;
//
//        Champion::create($data);
//
//        return redirect()->route('champlist');
//    }
//
//    public function form(Request $request)
//    {
//        $champions = Champion::all();
//
//        return view('insert')
//            ->with('champions', $champions);
//    }
}
