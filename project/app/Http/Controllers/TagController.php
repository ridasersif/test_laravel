<?php
namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller {
    public function index() {
        $tags=Tag::all();
        return view('tags',compact('tags'));
    }

    public function store(Request $request) {
        $student = Tag::create($request->only(['name']));
        return redirect()->route('tags');
    }
}