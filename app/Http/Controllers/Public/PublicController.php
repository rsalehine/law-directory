<?php

namespace App\Http\Controllers\Public;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PublicController extends Controller
{
    public function index()
    {
        return view('public.home');
    }

    public function about()
    {
        return view('public.about');
    }

    public function contact()
    {
        return view('public.contact');
    }

    public function blog()
    {
        // Logic to get blog posts
        return view('public.blog');
    }

    public function showBlogPost($post)
    {
        // Logic to get a single blog post
        return view('public.blog-post', ['post' => $post]);
    }

    public function terms()
    {
        return view('public.terms');
    }

    public function privacy()
    {
        return view('public.privacy');
    }

    public function lawyerProfile($id)
    {
        // Logic to get lawyer profile by ID
        return view('public.lawyer-profile', ['id' => $id]);
    }

    public function lawFirmProfile($id)
    {
        // Logic to get law firm profile by ID
        return view('public.law-firm-profile', ['id' => $id]);
    }
    public function lawyers()
    {
        // Logic to get lawyers
        return view('public.lawyers');
    }
    public function lawfirms()
    {
        // Logic to get law firms
        return view('public.law-firms');
    }
}

