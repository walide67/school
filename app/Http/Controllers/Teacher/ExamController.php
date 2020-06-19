<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Classe;

class ExamController extends Controller
{
    public function showExams(){
        $exams = auth()->user()->exams;
        return view('teacher.exams.exams')->with('exams', $exams);
    }

    public function addExamForm(){
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
        return view('teacher.exams.addExam')->with(compact('classes_lvl_1', 'classes_lvl_2', 'classes_lvl_3'));
    }

    public function addExam(Request $request){
        $request->validate($this->addExamRules());

        $exam = auth('teacher')->user()->exams()->create([
            'exam_name' => $request->exam_title,
            'exam_desc' => $request->exam_desc,
            'exam_photo' => '',
            'file_path' => '',
            'correction_path' => '',
        ]);

        if(!empty($exam)){
            $classes = Classe::find($request->classes);
            foreach($classes as $classe){
                $classe->exams()->attach($exam);
            }
            return redirect()->back()->with('success', 'Exam added with success');
        }else{
            return redirect()->back()->with('error', 'Fails to insert Exam, try later');
        }
    }

    private function addExamRules(){
        return [
            'exam_title' => 'required',
            'exam_lvl' => 'required',
            'classes' => 'required',
            'exam_desc' => 'required',
            'exam_pic' => 'required',
            'exam_file' => 'required',
            'exam_corr' => 'required'
        ];
    }

    private function addExamMessage(){
        return [];
    }

    private function addExamAttributes(){
        return [];
    }
}
