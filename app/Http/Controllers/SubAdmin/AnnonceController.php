<?php

namespace App\Http\Controllers\SubAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnnonceController extends Controller
{
    public function index(){
        return view('subAdmin.annonces.showAnnonce');
    }

    public function addAnnonceForm(){
        return view('subAdmin.annonces.addAnnonce');
    }
}
