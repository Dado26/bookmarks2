<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bookmark2;
use App\Http\Requests\bookmark2Request;
use Auth;


class bookmark2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $user= Auth::user();
        
       // moz i takto $bookmarks2 = Bookmark2::where('user_id',$user->id)->latest()->paginate();
        
        $bookmarks2 = Bookmark2::where('user_id',auth()->user()->id)->latest()->paginate();
        
        return view('bookmarks.index', compact('bookmarks2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bookmarks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(bookmark2Request $request)
    {
       // auth()->user()->bookmarks2()->create($request->all());
        
       $params = $request->all();
        
        $params['user_id'] = Auth::id(); //auth()->user()->id;
                
        bookmark2::create($params);
        
        return redirect()->route('bookmarks2.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bookmark2 = bookmark2::find($id);
        
        return view('bookmarks.show', compact('bookmark2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bookmark2 = bookmark2::find($id);
        return view('bookmarks.edit', compact('bookmark2'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(bookmark2Request $request, $id)
    {
         bookmark2::find($id)->update($request->all());
        

        return redirect()->route('bookmarks2.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bookmark2 = bookmark2::find($id);
        $bookmark2->delete();
        
        return redirect()->route('bookmarks2.index');
    }
}
