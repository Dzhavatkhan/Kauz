<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FormController extends Controller
{
    public function index(){
        $comments = Comment::all();
        return view('welcome', compact('comments'));
    }



    public function show($id)
    {
        $comment = Comment::findOrFail($id);

        return view('comment', compact('comment'));
    }



    public function store ( Request $request)
    {
        $data = $request->validate([
            'comment' => ['required', 'string'],
        ]);

        $add_comment = Comment::create([
            "comment" => $data['comment']
        ]);


    }

    public function indexReg()
    {
        return view("register");
    }


    public function indexAuth()
    {
        return view('auth');
    }


    public function logout()
    {
        auth('web')->logout();
        return redirect(route('videos'));
    }


    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => ['email', 'required', 'string', ''],
            'password' => ['required']
        ]);
        if(auth('web')->attempt($data)){
            return redirect(route("videos"));
        }
        return redirect(route('auth'))->withErrors([
            "email" => "Пользователь не найден, либо данные были введены неверно"
        ]);
    }





    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string'],
            'email' => ['email', 'required', 'string', 'unique:users,email'],
            'password' => ['required','confirmed'],
            "file" => ['image', 'sometimes']
        ]);
        $upload_folder = 'public/storage/uploads';

        $filename = $data['file']->getClientOriginalName(); // image.jpg
        Storage::putFileAs($upload_folder, $data['file'], $filename); //add img in uploads
        $filename = "/storage/storage/uploads/".$filename;
        $user = User::create([
            "name" => $data['name'],
            "email" => $data['email'],
            "image" => $filename,
            "password" => bcrypt($data['password'])
        ]);
  
  
        if($user){
            auth('web')->login($user);

        }
        return redirect(route("videos"));
    }
}
