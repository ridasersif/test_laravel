<?php
namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Types\Model\Article;

class UserController extends Controller
{
   
    public function showRegisterForm()
    {
        $tags=Tag::all();
        $articles=Article::all();
        return view('auth.register',compact('tags','articles'));
    }

  
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6',
            'artickel_id' => 'required',
            'tag_id' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'artickel_id'=>$request->article,
            'tag_id'=>$request->tag,
        ]);

        return redirect()->route('login');
    }

  
    public function showLoginForm()
    {
        return view('auth.login');
    }

    
    public function login(Request $request)
    {
        $user = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($user)) {
            return redirect()->route('home');
        }
    }
}


