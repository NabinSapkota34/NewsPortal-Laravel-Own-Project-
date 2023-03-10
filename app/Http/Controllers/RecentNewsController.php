<?php

namespace App\Http\Controllers;

use App\Models\RecentNews;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
 // Import the Image class

class RecentNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = RecentNews::all();
        return view('RecentNews.index',compact('images'));
    }
    public function indexed()
    {
        $images = RecentNews::take(2)->get();
        return view('frontend.index', compact('images'));
    }
    public function recent()
    {
        $images = RecentNews::all();
        return view('RecentNews.recent',compact('images'));
    }
    
    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $images = RecentNews::all();
        return view('RecentNews.create',compact('images'));
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
            'caption'=>'required|string',
            'span'=>'required|string',
            'date'=>'required|string',

            'image'=>'required|image|mimes:png,jpg,jpeg'
        ]);
       if($request->hasFile('image')){
        $img = date('YmdHis'). '.'. $request->file('image')->extension();
        Image::make($request->file('image'))->resize(600,600)->save(public_path('/images/recentnews/').$img,40);
       }

        RecentNews::create([
            'caption' => $request->caption,
            'span' => $request->span,
            'date' => $request->date,
            'image' => $img,
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
    public function edit()
    {
        $id = request('id');
        $image = RecentNews::findOrFail($id);
        return view('RecentNews.update', compact('image'));
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
        $image = RecentNews::findOrFail($id);
        $request->validate([
            'caption'=>'required|string',
            'span'=>'required|string',
            'date'=>'required|string',
    
            'image'=>'required|image|mimes:png,jpg,jpeg'
        ]);
        if($request->hasFile('image')){
            $path = public_path('/images/recentnews/' . $image->image);
            if(file_exists($path)){
                unlink($path);
            }
            $request->validate([
                'image' => 'required|image|mimes:png,jpg,jpeg'
            ]);
            $img = date('YmdHis'). '.'. $request->file('image')->extension();
            Image::make($request->file('image'))->resize(600,600)->save(public_path('/images/recentnews/').$img,40);
            $image->image = $img;
        }
        $image->update([
            'caption' => $request->caption,
            'span' => $request->span,
            'date' => $request->date,
            'image' => $img,
        ]);
        return redirect()->route('home');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $images = RecentNews::find($id);
        $images->delete();
                    
    
        return back();
    }
}
