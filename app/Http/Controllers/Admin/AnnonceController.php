<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;

class AnnonceController extends Controller
{
   public function __construct(){
        $this->middleware('auth:admin')->except('adminLoginForm', 'adminLogin');
        $this->middleware('guest:admin')->only('adminLoginForm', 'adminLogin');
    }

    public function index(){
        return view('admin.annonces.show_annonces');
    }

    public function addAnnonceForm(){
        return view('admin.annonces.add_annonce');
    }

    public function addAnnonce(Request $request){

    }

}