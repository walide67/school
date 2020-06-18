<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;
use App\Traits\AnnonceTrait;
use App\Models\Annonce;

class AnnonceController extends Controller
{
    use AnnonceTrait;

   public function __construct(){
        $this->middleware('auth:admin')->except('adminLoginForm', 'adminLogin');
        $this->middleware('guest:admin')->only('adminLoginForm', 'adminLogin');
    }

    public function index(){
        $annonces = Annonce::all();
        return view('admin.annonces.show_annonces')->with('annonces', $annonces);
    }

    public function addAnnonceForm(){
        return view('admin.annonces.add_annonce');
    }

    public function addAnnonce(Request $request){

        Validator::make($request->all(), $this->addAnnonceRules() )->validate();

        $annonce = $this->createAnnonce($request->all(), '', 'admin');

        if(!empty($annonce)){
            return redirect()->back()->with('success', 'Annonce Added with success');
        }else{
            return redirect()->back()->with('error', 'Fails to insert annonce try later');
        }
    }

    private function addAnnonceRules(){
        return [
            'annonce_title' => 'required|max:100',
            'annonce_desc' => 'required',
            'annonce_pic' => 'image',
        ];
    }

}