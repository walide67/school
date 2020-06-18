<?php

namespace App\Http\Controllers\SubAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Field;
use App\Models\Matter;
use App\Models\Classe;

class ClassController extends Controller
{
    public function index(){
        $classes = Classe::where('school_id', auth('subAdmin')->user()->id)->get();
        return view('subAdmin.classes.showClasses')->with('classes', $classes);
    }

    public function addClassForm(){
        $matters = Matter::all();
        $fields = Field::all();
        return view('subAdmin.classes.addClass')->with(compact('matters', 'fields'));
    }

    public function addClass(Request $request){

        $request->validate($this->addClassRules());

        $classe = Classe::create(
            [
                'class_level' => $request->class_lvl,
                'field_id' => $request->field,
                'school_id' => Auth::guard('subAdmin')->id(),
                'class_number' => 1
            ]
        );
        if(!empty($classe)){
            Auth::guard('subAdmin')->user()->classes()->save($classe);
            Field::find($request->field)->classes()->save($classe);
            $classe->matters()->sync($request->matters);
            return redirect()->back()->with('success', 'Class added with success.');
        }else{

            return redirect()->back()->with('error', 'Fails to insert class try later.');
        }
    }

    private function addClassRules(){
        return [
            'class_lvl' => 'required|numeric|min:1|max:3',
            'field' => 'required|numeric',
            'matters' => 'required',
            'class_num' => 'nullable|numeric',
        ];
    }

    private function addClassMessage(){
        //Todo later
        return [];
    }

    private function addClassAttributes(){
        //todo later
        return [];
    }
}

