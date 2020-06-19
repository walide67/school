<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cour;
use App\Models\Classe;

class Cours extends Controller
{
    public function index(){
        $cours = auth('teacher')->user()->cours;
        return view('teacher.cours.showCours', compact('cours'));
    }

    public function addCourForm(){
        $classes = auth('teacher')->user()->classes;
        $classes_lvl_1 = array();
        $classes_lvl_2 = array();
        $classes_lvl_3 = array();
        foreach($classes as $classe){
            switch ($classe->class_level) {
                case '1':
                    array_push($classes_lvl_1, $classe);
                    break;
                case '2':
                    array_push($classes_lvl_2, $classe);
                    break;
                case '3':
                    array_push($classes_lvl_3, $classe);
                    break;
            }
        }
        return view('teacher.cours.addCour')->with(compact('classes_lvl_1', 'classes_lvl_2', 'classes_lvl_3'));
    }

    public function addCour(Request $request){
        $request->validate($this->addCourRules());
        $cour = auth('teacher')->user()->cours()->create([
            'cour_name' => $request->cour_title,
            'cour_desc' => $request->cour_desc,
            'cour_photo' => '',
            'file_path' => ''
        ]);

        if(!empty($cour)){

            $classes = Classe::find($request->classes);

            foreach($classes as $classe){
                $classe->cours()->attach($cour->id);
            }

            return redirect()->back()->with('success', 'Cour added with success.');
        }else{
            return redirect()->back()->with('error', 'Fails to insert cour try later');
        }

    }

    private function addCourRules(){
        return [
            'cour_title' => 'required',
            'cour_lvl' => 'required',
            'classes' => 'required',
            'cour_desc' => 'required',
            'cour_pic' => 'nullable|image',
            'cour_file' => 'required|file',
        ];
    }

    private function addCourMessage(){
        return [];
    }

    private function addCourAttributes(){
        return [];
    }
}
