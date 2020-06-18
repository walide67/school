<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;
use App\Models\Matter;

class MatterController extends Controller
{
   public function __construct(){
        $this->middleware('auth:admin');
    }

    public function index(){
        $matters = Matter::all();
        return view('admin.matters.show_matters')->with('matters', $matters);
    }

    public function addMatterForm(){
        return view('admin.matters.add_matter');
    }

    public function addMatter(Request $request){
         Validator::make($request->all(), [
            'matter_name' => 'required',
            'matter_lvl' => 'required|numeric',
            'matter_photo' => 'required|image',
        ])->validate();
        Matter::create([
            'matter_name' => $request->matter_name,
            'matter_level' => $request->matter_lvl,
            'matter_photo' => '',
        ]);
        return redirect()->back()->with('success', 'Matter Added with Success');
    }

}