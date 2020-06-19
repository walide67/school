<?php

namespace App\Http\Controllers\SubAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\AnnonceTrait;
use App\Models\Annonce;
class AnnonceController extends Controller
{
    use annonceTrait;

    public function index(){
        $annonces = Annonce::where('subadmin_id', auth()->user()->id)->get();
        return view('subAdmin.annonces.showAnnonce', compact('annonces'));
    }

    public function addAnnonceForm(){
        return view('subAdmin.annonces.addAnnonce');
    }

    public function addAnnonce(Request $request){

        $request->validate($this->addAnnonceRules());

        $annonce = $this->createAnnonce($request->all(), auth('subAdmin')->user(), '');

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
            'annonce_pic' => 'nullable|image',
        ];
    }
}
