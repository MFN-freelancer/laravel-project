<?php

namespace App\Http\Controllers;

use App\VideoList;
use Illuminate\Http\Request;

class VideoListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
    }
    public function showAddboard(){
        return view('admin.add');
    }
    public function addVideo(Request $request){
        if ($request->hasFile('video_cover')){
            $cover_image = $request->file('video_cover')->getClientOriginalName();
            $request->file('video_cover')->move(public_path('cover_images'), $cover_image);
        }
        if ($request->hasFile('video_file')){
            $video_url = $request->file('video_file')->getClientOriginalName();
            $request->file('video_file')->move(public_path('uploaded_video'), $video_url);
        }
        $form_data=array(
            'video_title'=>$request->input('video_name'),
            'video_category'=>$request->input('video_category'),
            'video_cover'=>$cover_image,
            'video_url'=>$video_url
            );
        VideoList::create($form_data);
        return back();
    }


}
