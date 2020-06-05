<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnnonceController extends Controller
{
    public function showAnnonces(){
        return view('teacher.annonces.showAnnonce');
    }

    public function addAnnonceForm(){
        return view('teacher.annonces.addAnnonce');
    }
}
