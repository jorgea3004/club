<?php

namespace App\Http\Controllers;

use App\Models\Members;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function index(){
        $miembros = Members::all();
        return view('members/index', compact('miembros'));
    }

    public function create(){
        return view('members/new');
    }

    public function store(Request $request){
        $request->validate([
            'nombre' => 'required|max:45',
            'lastname' => 'required|max:45',
            'telef' => 'required|max:15',
            'fecnac' => 'required|max:10',
            'idcity' => 'required|max:2'
        ]);
        $member = new Members();
        $member->name = $request->nombre;
        $member->last_name = $request->lastname;
        $member->phone = $request->telef;
        $member->date_born = $request->fecnac;
        $member->idcity = $request->idcity;
        $member->save();
        return redirect()->route('members.index');
    }

    public function edit($id){
        $miembros = Members::find($id);
        return view('members/edit',compact('miembros'));
    }
    public function update(Request $request, Members $member){
        $member->name = $request->nombre;
        $member->last_name = $request->lastname;
        $member->phone = $request->telef;
        $member->date_born = $request->fecnac;
        $member->idcity = $request->idcity;
        $member->save();
        return redirect()->route('members.index');
    }
}
