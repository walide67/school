<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\AnnonceTrait;
use App\Traits\UploadTrait;

class AnnonceController extends Controller
{
    use AnnonceTrait;
    use UploadTrait;

    public function showAnnonces(){
        $annonces = auth('teacher')->user()->annonces;
        return view('teacher.annonces.showAnnonce')->with('annonces', $annonces);
    }

    public function addAnnonceForm(){
        return view('teacher.annonces.addAnnonce');
    }

    public function addAnnonce(Request $request){
        $request->validate($this->addAnnonceRules());

        $file_path = 'uploads/teacher/annonces/';
        $file_name = 'avatar.jpg';

        if($request->hasFile('annonce_pic') && $request->annonce_pic->isValid()){
           $file_name = $this->uploadfile($request->annonce_pic, $file_path);
        }

        $annonce = $this->createAnnonce($request->all(), auth('teacher')->user(), $file_path.$file_name);

        if(!empty($annonce)){
            return redirect()->back()->with('success', 'Annonce added with success');
        }else{
            return redirect()->back()->with('error', 'Fails to insert annonce try later');
        }

    }

    private function addAnnonceRules(){
        return [
            'annonce_title' => 'required',
            'annonce_desc' => 'required',
            'annonce_pic' => 'image|nullable',
            'annonce_ex_at'=> 'required',
        ];
    }

    private function addAnnonceMessages(){
        //todo later
        return [];
    }

    private function addAnnonceAttributes(){
        //todo later
        return [];
    }
}
