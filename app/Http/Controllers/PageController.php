<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Show the home page.
     *
     * @return \Illuminate\View\View
     */
    public function home()
    {
        return view('home');
    }

    /**
     * Show the blog listing page.
     *
     * @return \Illuminate\View\View
     */
    public function blog()
    {
        $posts = [
            ['id' => 1, 'title' => 'PHP', 'slug' => 'php'],
            ['id' => 2, 'title' => 'Laravel', 'slug' => 'laravel'],
            ['id' => 3, 'title' => 'HTML', 'slug' => 'HTML'], 
        ];
        return view('blog', ['posts' => $posts]);
    }

    /**
     * Show the post detail page.
     *
     * @param string $slug The slug of the post to retrieve.
     * @return \Illuminate\View\View
     */
    public function post($slug)
    {
        // Assuming there's logic here to fetch the real post using the slug
        $post = ['slug' => $slug]; // This should be fetched from a database
        return view('post', ['post' => $post]);
    }
}

