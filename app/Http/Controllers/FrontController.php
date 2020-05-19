<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
use Illuminate\Support\Facades\Auth;
use App\VideoList;
class FrontController extends Controller
{
    //
    public function index(){
        $videos = VideoList::orderBy('created_at', 'DESC')->paginate('6');
        $cats = VideoList::groupBy('video_category')->select('video_category')->get();
        $total_video = VideoList::select('id')->count();
        $total_download = VideoList::select('downloaded_number')->sum("downloaded_number");

        return view('home', compact('videos', 'cats', 'total_video', 'total_download'));
    }
    public function whatNew(){
        $new_videos = VideoList::orderBy('created_at', 'DESC')->paginate(8);
        return view('whats-new', compact('new_videos'));
    }
    public function whatHot(){
        $hot_videos = VideoList::orderBy('ratings', 'DESC')->paginate(10);
        return view('whats-hot', compact('hot_videos'));
    }
    Public function player($id){
//        $this->middleware('auth');
        $video = VideoList::where('id','=',$id)->get();
        $user = User::whereId($video[0]->user_id)->get();
        return view('video-player', compact('video', 'user'));
    }
}
