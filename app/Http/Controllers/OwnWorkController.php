<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work;
class OwnWorkController extends Controller
{

    public function index(Request $request){
        $search = $request->input('search');
        if ($search == null) {
            $works = Work::paginate(10);
        } else {
            $works = Work::where('title','LIKE','%'. $search.'%')->orWhere('description','LIKE','%'. $search.'%')->paginate(10);
        }
        return view('welcome.projects',compact('works'));
    }

    public function show($id){
        $image = Work::find($id);
        $works = Work::where('id',$id)->get();

        return view('welcome.show', compact('image','works'));
    }




}
