<?php

namespace App\Http\Controllers;

use App\Http\Resources\VideoResource;
use App\Models\Comment;
use App\Models\Tag;
use App\Models\User;
use App\Models\Video;
use App\Models\VideoHosting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return VideoResource::collection(Video::all());
        $videos = Video::all();
        return view('welcome', [
            "videos" =>$videos
        ]);
    }

    public function profile_video()
    {
         $tags = Tag::all();
         return view('addVideo', compact('tags'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "video_name" => ['required', 'string'],
            "video_description" => ['sometimes'],
            "video" => ['file']

        ]);
        $upload_folder = 'public/storage/videos/';

        $filename = $data['video']->getClientOriginalName(); // image.jpg
        Storage::putFileAs($upload_folder, $data['video'], $filename); //add img in uploads
        $filename = "/storage/storage/videos/".$filename;
 

        $video = Video::create([
            "video_name" => $data['video_name'],
            "video_description" => $data['video_description'],
            "video" => $filename
        ]);
        if($video){
            return redirect(route("profile"));
        }

        // $cat;
        // $music;
        // $extrime;
        // $animals;
        // $dog;
        // $food;

        

            // VideoHosting::create([
            //     "video_id" => Video::find(Auth::user()->id),
            //     "user_id" => User::find(Auth::user()->id),
            //     "comment_id" => null,
            //     "like_id" => null,
            //     "dislike_id" => null,
            //     "tag_id" => Tag::find(Auth::user()->id)

    
            // ]);


    
        // if($video){
        //     return redirect(route("videos"));
        // }
        // if($video){
        //     auth('web')->login($video);

        // }
        // return redirect(route("videos"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $video = Video::findOrFail($id);
        return view("video", compact('video'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
