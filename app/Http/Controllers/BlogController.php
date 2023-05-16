<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $blogs = Post::latest()->paginate(3);
        return view('blog.blogs')->with('blogs', $blogs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($slug)
    {
        $blog = Post::whereSlug($slug)->firstOrFail();
        $relatedBlogs = Post::where('id', '!=', $blog->id)
            ->latest()
            ->take(6)
            ->get(['image', 'title', 'slug', 'created_at']);


        // Set SEO metadata
        SEOTools::setTitle(Str::limit($blog->title, 60, ''));
        SEOTools::setDescription(Str::limit($blog->meta_description, 150, '...'));
        SEOTools::metatags()->addMeta('article:published_time', $blog->created_at->toW3CString(), 'property');
        SEOTools::metatags()->addMeta('article:section', 'news');
        SEOTools::metatags()->addKeyword([$blog->meta_keywords]);

        // Set Open Graph metadata
        SEOTools::opengraph()->setTitle(Str::limit($blog->title, 60, ''));
        SEOTools::opengraph()->setDescription(Str::limit($blog->meta_description, 150, '...'));
        SEOTools::opengraph()->setUrl(config('app.url'));
        SEOTools::opengraph()->setType('article');
        SEOTools::opengraph()->setArticle([
            'published_time' => $blog->created_at,
            'modified_time' => $blog->updated_at,
        ]);
        SEOTools::opengraph()->addImage(Voyager::image($blog->image), ['height' => 300, 'width' => 300]);

        // Set JSON-LD metadata
        SEOTools::jsonLd()->setTitle(Str::limit($blog->title, 60, ''));
        SEOTools::jsonLd()->setDescription(Str::limit($blog->meta_description, 150, '...'));
        SEOTools::jsonLd()->setType('Article');


        return view('blog.details-blog', compact('blog', 'relatedBlogs'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
