<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;
use App\Traits\AnnonceTrait;
use App\Traits\UploadTrait;
use App\Models\Annonce;

class AnnonceController extends Controller
{
    use AnnonceTrait;
    use UploadTrait;

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
        
        $file_path = 'uploads/admin/annonces/';
        $file_name = 'avatar.jpg';

        if($request->hasFile('annonce_pic') && $request->annonce_pic->isValid()){
           $file_name = $this->uploadfile($request->annonce_pic, $file_path);
        }
        
        $annonce = $this->createAnnonce($request->all(), auth('admin')->user(), $file_path.$file_name);

        if(!empty($annonce)){
            return redirect()->back()->with('success', 'Annonce added with success');
        }else{
            return redirect()->back()->with('error', 'Fails to insert annonce try later');
        }
    }

    private function addAnnonceRules(){
        return [
            'annonce_title' => 'required|max:100',
            'annonce_desc' => 'required',
            'annonce_pic' => 'image|nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'annonce_ex_at'=> 'required',
        ];
    }

}