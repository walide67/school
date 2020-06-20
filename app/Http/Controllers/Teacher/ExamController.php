<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Classe;
use App\Traits\UploadTrait;

class ExamController extends Controller
{
    use UploadTrait;

    public function showExams(){
        $exams = auth('teacher')->user()->exams;
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

        $file_path = 'uploads/teacher/exams/examsFiles/';
        $corr_path = 'uploads/teacher/exams/examsCorr/';
        $photo_path = 'uploads/teacher/exams/examsImages/';
        $photo_name ='avatar.png';
        $file_name ='';
        $corr_name ='';

        if($request->hasFile('exam_file') && $request->exam_file->isValid()){
            $file_name = $this->uploadfile($request->exam_file, $file_path);
         }

         if($request->hasFile('exam_corr') && $request->exam_corr->isValid()){
            $corr_name = $this->uploadfile($request->exam_corr, $corr_path);
         }

        if($request->hasFile('exam_pic') && $request->exam_pic->isValid()){
           $photo_name = $this->uploadfile($request->exam_pic, $photo_path);
        }
        $exam = auth('teacher')->user()->exams()->create([
            'exam_name' => $request->exam_title,
            'exam_desc' => $request->exam_desc,
            'exam_photo' => $photo_path.$photo_name,
            'file_path' => $file_path.$file_name,
            'correction_path' => $corr_path.$corr_name,
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
            'exam_title' => 'required|max:100',
            'exam_lvl' => 'required',
            'classes' => 'required',
            'exam_desc' => 'required',
            'exam_pic' => 'image|nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'exam_file' => 'file|required|mimes:jpeg,png,jpg,pdf,doc,docx',
            'exam_corr' => 'file|nullable|mimes:jpeg,png,jpg,pdf,doc,docx'
        ];
    }

    private function addExamMessage(){
        return [];
    }

    private function addExamAttributes(){
        return [];
    }
}
