<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Time;
use App\Http\Controllers\Controller;

class TimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $times = Time::orderBy('created_at','desc')->paginate(10);

        return view('admin.time.index', compact('times'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.time.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $time = new Time;
        $time->day = $request->day;
        $time->open = $request->open;
        $time->close = $request->close;
        $time->save();

        
        return redirect()->route('time.index')->with('successMsg','Time Successfully Added');

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
        $time = Time::find($id);
        return view('admin.time.edit',compact('time'));
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
        $time = Table::find($id);
        $time->name = $request->name;
        $time->capacity = $request->capacity;
        $time->quantity = $request->quantity;
        $time->save(); 

        return redirect()->route('time.index')->with('successMsg','Time Successfully Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $time = Time::find($id);
        $time->delete();

        return redirect()->back()->with('successMsg','time Successfully Deleted');
    }
}
