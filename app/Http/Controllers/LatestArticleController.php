<?php

namespace App\Http\Controllers;

use App\Models\LatestArticle;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class LatestArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = LatestArticle::all();
        return view('LatestArticles.index',compact('images'));

    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $images = LatestArticle::all();
        return view('LatestArticles.create',compact('images'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'main' => 'required|string',
            'span' => 'required|string',
            'date' => 'required|string',
            'main2' => 'required|string',
            'author' => 'required|string',
            'image' => 'required|image|mimes:png,jpg,jpeg',
            'image2' => 'required|image|mimes:png,jpg,jpeg'
        ]);
    
        $img1 = date('YmdHis'). '.'. $request->file('image')->extension();
        $img2 = date('YmdHis'). '.'. $request->file('image2')->extension();
    
        Image::make($request->file('image'))->resize(600, 600)->save(public_path('/images/recentnews/') . $img1, 40);
        Image::make($request->file('image2'))->resize(600, 600)->roundCorner(20)->save(public_path('/images/recentnews/') . $img2, 40);
    
    
        LatestArticle::create([
            'main' => $request->main,
            'span' => $request->span,
            'date' => $request->date,
            'main2' => $request->main2,
            'author' => $request->author,
            'image' => $img1,
            'image2' => $img2,
        ]);
    
        return redirect()->route('home');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
