<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
use App\VideoList;
class FrontController extends Controller
{
    //
    public function index(){
        $videos = VideoList::paginate('6');
        $cats = VideoList::groupBy('video_category')->select('video_category')->get();
        return view('home', compact('videos', 'cats'));
    }
    public function whatNew(){
        $new_videos = VideoList::orderBy('created_at', 'ASC')->paginate(8);
        return view('whats-new', compact('new_videos'));
    }
    public function whatHot(){
        $hot_videos = VideoList::orderBy('ratings', 'DESC')->paginate(10);
        return view('whats-hot', compact('hot_videos'));
    }
}
