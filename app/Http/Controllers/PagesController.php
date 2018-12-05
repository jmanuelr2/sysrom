<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Galery;
use App\Post;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
    	$photos = Photo::get(); 
    	$galeries = Galery::get();
    	$posts = Post::where('published_at','<=' , today())->get(); 
    	
    	return view('pages.home', compact('photos','galeries','posts'));
    }
}
