<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class CompanyProfileController extends Controller
{
    public function aboutPage()
    {
        return view('landing.about-page');
    }

    public function blogPage()
    {
        $posts = Post::latest()->paginate(6);
        return view('landing.blogs', compact('posts'));
    }

    public function showblog($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('landing.blog-detail', compact('post'));
    }

    public function contactPage()
    {
        return view('landing.contact-us');
    }

    public function partnershipPage()
    {
        return view('landing.partnership');
    }
}
