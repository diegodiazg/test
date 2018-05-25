<?php

namespace App\Http\Controllers;

use App\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $all = Test::all();
        return view("tests.index", compact('all')  );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("tests.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {		    	
        $new = Test::create($request->all());
        return redirect("test");
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MyModel  $myModel
     * @return \Illuminate\Http\Response
     */
    public function show(Test $myModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MyModel  $myModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request, Test $myModel)
    {
        //
        
        $data = Test::find($id);
        return view('tests.edit', compact('data'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MyModel  $myModel
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request, Test $myModel)
    {
        //
        
        $data = Test::find($id);
        $data->update($request->all());

        return redirect('test');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MyModel  $myModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Test $myModel)
    {
        //
    }
}
