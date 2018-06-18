<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Court;

class CourtsController extends Controller
{
    public function index()
    {
        $courts = Court::all();
        return view('courts')->with('courts', $courts);
    }

    public function create()
    {
        return view('createCourt');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'adress' => 'required',
            'date' => 'required',
            'timeFrom' => 'required',
            'timeUntil' => 'required',
        ]);
        
        $court = new Court;
        $court->name = $request->input('name');
        $court->adress = $request->input('adress');
        $court->date = $request->input('date');
        $court->timeFrom = $request->input('timeFrom');
        $court->timeUntil = $request->input('timeUntil');
        $court->user_id = auth()->user()->id;
        
        $court->save();
        
        return redirect('/courts')->with('success', 'Court created');
    }

    public function show($id)
    {
        $court = Court::find($id);
        return view('showCourt')->with('court',$court);
    }
    
    public function edit($id)
    {
        $court = Court::find($id);
        return view('editCourt')->with('court',$court);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'adress' => 'required',
            'date' => 'required',
            'timeFrom' => 'required',
            'timeUntil' => 'required',
        ]);
        
        $court = Court::find($id);
        $court->name = $request->input('name');
        $court->adress = $request->input('adress');
        $court->date = $request->input('date');
        $court->timeFrom = $request->input('timeFrom');
        $court->timeUntil = $request->input('timeUntil');
        
        $court->save();
        
        return redirect('/courts')->with('success', 'Court updated');
    }

    public function destroy($id)
    {
        $post = Court::find($id);
        $post->delete();
        return redirect('/courts')->with('success', 'Court removed');
    }
     
}
